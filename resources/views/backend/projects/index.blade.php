@extends('backend.layouts.app')

@php
    $scopeLabels = [
        'all' => 'All Projects',
        'active' => 'Active Projects',
        'archived' => 'Archived Projects',
        'templates' => 'Project Templates',
    ];

    $scopeDescriptions = [
        'all' => 'Centralized portfolio view with progress, risk and delivery health.',
        'active' => 'Execution-focused list for currently running deliveries.',
        'archived' => 'Closed projects retained for audit, billing and historical reporting.',
        'templates' => 'Reusable project blueprints to standardize delivery workflows.',
    ];

    $currentScope = $scope ?? 'all';
    $scopeTitle = $scopeLabels[$currentScope] ?? $scopeLabels['all'];
    $scopeDescription = $scopeDescriptions[$currentScope] ?? $scopeDescriptions['all'];
@endphp

@section('title', $scopeTitle)

@section('content')
    <div class="h-full overflow-y-auto">
        <div class="p-6 animate-fade-in space-y-6">
            @if (session('success'))
                <div class="bg-green-900/30 border border-green-700/50 text-green-300 px-4 py-3 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-white">{{ $scopeTitle }}</h1>
                        <p class="text-sm text-gray-400 mt-1">{{ $scopeDescription }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('projects.create') }}"
                            class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white text-sm font-medium">
                            <i class="fas fa-plus mr-2"></i>New Project
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Projects In View</p>
                    <p id="scopeProjectCount" class="text-2xl font-bold text-white mt-2">{{ $scopeProjectCount }}</p>
                </div>
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Critical Items</p>
                    <p id="criticalProjectCount" class="text-2xl font-bold text-red-400 mt-2">{{ $criticalProjectCount }}</p>
                </div>
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-gray-500">On Track / Delayed</p>
                    <p id="trackDelayedCount" class="text-2xl font-bold text-blue-400 mt-2">{{ $onTrackProjectCount }} / {{ $delayedProjectCount }}</p>
                </div>
            </div>

            <div id="projectTableRoot" data-scope="{{ $currentScope }}" data-live-url="{{ route('projects.live', absolute: false) }}">
                @include('backend.projects.table')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tableRoot = document.getElementById('projectTableRoot');
            if (!tableRoot) {
                return;
            }

            const liveUrl = tableRoot.dataset.liveUrl;
            const scope = tableRoot.dataset.scope || 'all';
            const scopeCount = document.getElementById('scopeProjectCount');
            const criticalCount = document.getElementById('criticalProjectCount');
            const trackDelayedCount = document.getElementById('trackDelayedCount');

            async function refreshProjects() {
                try {
                    if (document.visibilityState === 'hidden') {
                        return;
                    }

                    const params = new URLSearchParams(window.location.search);
                    params.set('scope', scope);

                    const response = await fetch(liveUrl + '?' + params.toString(), {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        },
                    });

                    if (!response.ok) {
                        return;
                    }

                    const data = await response.json();
                    if (typeof data.table_html === 'string') {
                        tableRoot.innerHTML = data.table_html;
                    }

                    if (scopeCount) {
                        scopeCount.textContent = String(data.scope_project_count ?? 0);
                    }
                    if (criticalCount) {
                        criticalCount.textContent = String(data.critical_project_count ?? 0);
                    }
                    if (trackDelayedCount) {
                        trackDelayedCount.textContent = `${data.on_track_project_count ?? 0} / ${data.delayed_project_count ?? 0}`;
                    }
                } catch (error) {
                    // Ignore transient polling errors.
                }
            }

            setInterval(refreshProjects, 20000);
        });
    </script>
@endsection
