@php
    $m = $dashboardMetrics ?? [];
    $activeProjectsChange = (float) ($m['active_projects_change'] ?? 0);
    $pendingTasksChange = (float) ($m['pending_tasks_change'] ?? 0);
    $activeClientsChange = (int) ($m['active_clients_change'] ?? 0);
    $monthlyRevenueChange = (float) ($m['monthly_revenue_change'] ?? 0);

    $fmtPct = fn ($value) => ($value >= 0 ? '+' : '') . rtrim(rtrim(number_format($value, 1), '0'), '.') . '%';
    $fmtIntDelta = fn ($value) => ($value >= 0 ? '+' : '') . number_format($value);
    $fmtMoney = fn ($value) => '$' . number_format(((float) $value) / 1000, 1) . 'K';
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-red-900/30 rounded-lg">
                        <i class="fas fa-project-diagram text-red-500 text-xl"></i>
                    </div>
                    <span class="text-sm {{ $activeProjectsChange >= 0 ? 'text-green-400 bg-green-900/30' : 'text-red-400 bg-red-900/30' }} px-2 py-1 rounded-full">{{ $fmtPct($activeProjectsChange) }}</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">{{ number_format((int) ($m['active_projects_count'] ?? 0)) }}</h3>
                <p class="text-gray-400">Active Projects</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Completion</span>
                        <span>{{ rtrim(rtrim(number_format((float) ($m['completion_rate'] ?? 0), 1), '0'), '.') }}%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: {{ min(100, max(0, (float) ($m['completion_rate'] ?? 0))) }}%"></div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-900/30 rounded-lg">
                        <i class="fas fa-tasks text-blue-500 text-xl"></i>
                    </div>
                    <span class="text-sm {{ $pendingTasksChange <= 0 ? 'text-green-400 bg-green-900/30' : 'text-red-400 bg-red-900/30' }} px-2 py-1 rounded-full">{{ $fmtPct($pendingTasksChange) }}</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">{{ number_format((int) ($m['pending_tasks_count'] ?? 0)) }}</h3>
                <p class="text-gray-400">Pending Tasks</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Overdue</span>
                        <span>{{ rtrim(rtrim(number_format((float) ($m['overdue_rate'] ?? 0), 1), '0'), '.') }}%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: {{ min(100, max(0, (float) ($m['overdue_rate'] ?? 0))) }}%"></div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-green-900/30 rounded-lg">
                        <i class="fas fa-users text-green-500 text-xl"></i>
                    </div>
                    <span class="text-sm {{ $activeClientsChange >= 0 ? 'text-green-400 bg-green-900/30' : 'text-red-400 bg-red-900/30' }} px-2 py-1 rounded-full">{{ $fmtIntDelta($activeClientsChange) }}</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">{{ number_format((int) ($m['active_clients_count'] ?? 0)) }}</h3>
                <p class="text-gray-400">Active Clients</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Satisfaction</span>
                        <span>{{ rtrim(rtrim(number_format((float) ($m['satisfaction_rate'] ?? 0), 1), '0'), '.') }}%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: {{ min(100, max(0, (float) ($m['satisfaction_rate'] ?? 0))) }}%"></div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-900/30 rounded-lg">
                        <i class="fas fa-dollar-sign text-purple-500 text-xl"></i>
                    </div>
                    <span class="text-sm {{ $monthlyRevenueChange >= 0 ? 'text-green-400 bg-green-900/30' : 'text-red-400 bg-red-900/30' }} px-2 py-1 rounded-full">{{ $fmtPct($monthlyRevenueChange) }}</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">{{ $fmtMoney($m['monthly_revenue'] ?? 0) }}</h3>
                <p class="text-gray-400">Monthly Revenue</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Target</span>
                        <span>{{ rtrim(rtrim(number_format((float) ($m['revenue_target_rate'] ?? 0), 1), '0'), '.') }}%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: {{ min(100, max(0, (float) ($m['revenue_target_rate'] ?? 0))) }}%"></div>
                    </div>
                </div>
            </div>
        </div>
