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
            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-white">{{ $scopeTitle }}</h1>
                        <p class="text-sm text-gray-400 mt-1">{{ $scopeDescription }}</p>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <span class="px-3 py-1 rounded-full bg-green-900/30 text-green-400 border border-green-700/40">
                            SLA 97.2%
                        </span>
                        <span class="px-3 py-1 rounded-full bg-blue-900/30 text-blue-400 border border-blue-700/40">
                            Delivery Cycle: Weekly
                        </span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Projects In View</p>
                    <p id="scopeProjectCount" class="text-2xl font-bold text-white mt-2">0</p>
                </div>
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Critical Items</p>
                    <p id="criticalProjectCount" class="text-2xl font-bold text-red-400 mt-2">0</p>
                </div>
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Scope</p>
                    <p class="text-2xl font-bold text-blue-400 mt-2">{{ $scopeTitle }}</p>
                </div>
            </div>

            <div id="projectScopeRoot" data-scope="{{ $currentScope }}">
                @include('backend.component.recentprojects')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const root = document.getElementById('projectScopeRoot');
            if (!root) {
                return;
            }

            const scope = root.dataset.scope || 'all';
            const rows = Array.from(document.querySelectorAll('.project-row'));
            const emptyState = document.getElementById('emptyState');
            const countElement = document.getElementById('scopeProjectCount');
            const criticalCountElement = document.getElementById('criticalProjectCount');

            let visibleCount = 0;
            let criticalCount = 0;

            rows.forEach(function (row) {
                const status = (row.dataset.status || '').toLowerCase();
                const priority = (row.dataset.priority || '').toLowerCase();

                let show = true;
                if (scope === 'active') {
                    show = status === 'active';
                } else if (scope === 'archived' || scope === 'templates') {
                    show = false;
                }

                row.style.display = show ? '' : 'none';

                if (show) {
                    visibleCount += 1;
                    if (priority === 'high') {
                        criticalCount += 1;
                    }
                }
            });

            if (countElement) {
                countElement.textContent = String(visibleCount);
            }

            if (criticalCountElement) {
                criticalCountElement.textContent = String(criticalCount);
            }

            if (emptyState) {
                if (visibleCount === 0) {
                    emptyState.classList.remove('hidden');
                    const emptyHeading = emptyState.querySelector('h4');
                    const emptyDescription = emptyState.querySelector('p');

                    if (emptyHeading) {
                        emptyHeading.textContent = scope === 'templates'
                            ? 'No Templates Found'
                            : 'No Projects Found';
                    }

                    if (emptyDescription) {
                        emptyDescription.textContent = scope === 'archived'
                            ? 'No archived projects are available right now.'
                            : scope === 'templates'
                                ? 'Create a reusable template to standardize future projects.'
                                : 'Try adjusting your filters or search terms';
                    }
                } else {
                    emptyState.classList.add('hidden');
                }
            }
        });
    </script>
@endsection
