@php
    $routeByScope = [
        'all' => 'projects.index',
        'active' => 'projects.active',
        'archived' => 'projects.archived',
        'templates' => 'projects.templates',
    ];

    $scopeRoute = $routeByScope[$scope ?? 'all'] ?? 'projects.index';
@endphp

<div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
    <form method="GET" action="{{ route($scopeRoute) }}"
        class="flex flex-col lg:flex-row lg:items-center gap-3 mb-6">
        <div class="relative w-full lg:w-80">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-500"></i>
            </div>
            <input type="text" name="search" value="{{ $filters['search'] }}"
                placeholder="Search by project/client/summary"
                class="w-full pl-10 pr-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 text-sm">
        </div>

        <select name="status"
            class="w-full lg:w-48 px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-red-600">
            <option value="">All Statuses</option>
            @foreach ($statuses as $status)
                <option value="{{ $status }}" @selected($filters['status'] === $status)>
                    {{ ucfirst($status) }}
                </option>
            @endforeach
        </select>

        <select name="priority"
            class="w-full lg:w-48 px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-red-600">
            <option value="">All Priorities</option>
            @foreach ($priorities as $priority)
                <option value="{{ $priority }}" @selected($filters['priority'] === $priority)>
                    {{ ucfirst($priority) }}
                </option>
            @endforeach
        </select>

        <div class="flex items-center gap-2">
            <button type="submit"
                class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white text-sm font-medium">
                Apply
            </button>
            <a href="{{ route($scopeRoute) }}" class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg text-sm">
                Reset
            </a>
        </div>
    </form>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="text-left text-gray-400 text-sm border-b border-gray-800">
                    <th class="pb-3 font-medium">Project</th>
                    <th class="pb-3 font-medium">Client</th>
                    <th class="pb-3 font-medium">Progress</th>
                    <th class="pb-3 font-medium">Due Date</th>
                    <th class="pb-3 font-medium">Budget</th>
                    <th class="pb-3 font-medium">Status</th>
                    <th class="pb-3 font-medium">Priority</th>
                    <th class="pb-3 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    @php
                        $progress = (int) $project->progress;
                        $isOverdue = $project->due_date && $project->due_date->isPast() && $project->status !== 'completed';
                    @endphp
                    <tr class="border-b border-gray-800/50 hover:bg-gray-800/30 transition-all">
                        <td class="py-4">
                            <div>
                                <p class="font-semibold text-white">{{ $project->name }}</p>
                                <p class="text-xs text-gray-400 mt-1">{{ $project->summary ?: 'No summary' }}</p>
                            </div>
                        </td>
                        <td class="py-4 text-sm text-gray-200">{{ $project->client_name }}</td>
                        <td class="py-4">
                            <div class="w-28">
                                <div class="flex justify-between text-xs text-gray-400 mb-1">
                                    <span>{{ $progress }}%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-green-500 to-blue-500 rounded-full"
                                        style="width: {{ $progress }}%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 text-sm {{ $isOverdue ? 'text-red-400' : 'text-gray-200' }}">
                            {{ $project->due_date ? $project->due_date->format('M d, Y') : 'N/A' }}
                        </td>
                        <td class="py-4 text-sm text-gray-200">
                            @if ($project->budget)
                                ${{ number_format((float) $project->spent_budget, 2) }} / ${{ number_format((float) $project->budget, 2) }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="py-4">
                            <span class="px-2 py-1 text-xs rounded-full bg-gray-800 border border-gray-700 text-gray-200">
                                {{ ucfirst($project->status) }}
                            </span>
                        </td>
                        <td class="py-4">
                            <span
                                class="px-2 py-1 text-xs rounded-full {{ $project->priority === 'high' ? 'bg-red-900/30 text-red-300' : ($project->priority === 'medium' ? 'bg-yellow-900/30 text-yellow-300' : 'bg-green-900/30 text-green-300') }}">
                                {{ ucfirst($project->priority) }}
                            </span>
                        </td>
                        <td class="py-4">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('projects.edit', $project) }}"
                                    class="px-3 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg text-xs">
                                    Edit
                                </a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST"
                                    onsubmit="return confirm('Delete this project?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-2 bg-red-900/40 hover:bg-red-900/60 rounded-lg text-xs text-red-300">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="py-12 text-center">
                            <h4 class="text-lg font-semibold text-white mb-2">No Projects Found</h4>
                            <p class="text-gray-400 mb-6">Try changing filters or create a new project.</p>
                            <a href="{{ route('projects.create') }}"
                                class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white text-sm font-medium">
                                Create Project
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($projects->hasPages())
        <div class="mt-6">
            {{ $projects->links() }}
        </div>
    @endif
</div>
