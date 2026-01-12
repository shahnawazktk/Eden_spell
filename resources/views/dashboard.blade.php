@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-6 animate-fade-in">
        <!-- Welcome Banner -->
        <div class="mb-6">
            <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 border border-gray-800 rounded-2xl p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-2">Welcome back, Alex! 👋</h2>
                        <p class="text-gray-400">Here's what's happening with your projects today.</p>
                    </div>
                    <div class="hidden lg:flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm text-gray-400">Current Sprint</p>
                            <p class="text-lg font-semibold text-white">Sprint 24 • Week 3</p>
                        </div>
                        <div
                            class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                            <span class="text-2xl font-bold text-white">85%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-red-900/30 rounded-lg">
                        <i class="fas fa-project-diagram text-red-500 text-xl"></i>
                    </div>
                    <span class="text-sm text-green-400 bg-green-900/30 px-2 py-1 rounded-full">+12%</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">24</h3>
                <p class="text-gray-400">Active Projects</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Completion</span>
                        <span>68%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 68%"></div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-900/30 rounded-lg">
                        <i class="fas fa-tasks text-blue-500 text-xl"></i>
                    </div>
                    <span class="text-sm text-red-400 bg-red-900/30 px-2 py-1 rounded-full">-8%</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">127</h3>
                <p class="text-gray-400">Pending Tasks</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Overdue</span>
                        <span>12%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 12%">
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-green-900/30 rounded-lg">
                        <i class="fas fa-users text-green-500 text-xl"></i>
                    </div>
                    <span class="text-sm text-green-400 bg-green-900/30 px-2 py-1 rounded-full">+5</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">42</h3>
                <p class="text-gray-400">Active Clients</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Satisfaction</span>
                        <span>94%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 94%">
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-900/30 rounded-lg">
                        <i class="fas fa-dollar-sign text-purple-500 text-xl"></i>
                    </div>
                    <span class="text-sm text-green-400 bg-green-900/30 px-2 py-1 rounded-full">+12.5%</span>
                </div>
                <h3 class="text-3xl font-bold text-white mb-2">$84.2K</h3>
                <p class="text-gray-400">Monthly Revenue</p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Target</span>
                        <span>75%</span>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 75%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Project Progress -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-white">Project Progress</h3>
                        <div class="flex items-center space-x-2">
                            <button class="px-3 py-1 text-sm bg-gray-800 rounded-lg hover:bg-gray-700">Week</button>
                            <button class="px-3 py-1 text-sm bg-red-600 rounded-lg">Month</button>
                            <button class="px-3 py-1 text-sm bg-gray-800 rounded-lg hover:bg-gray-700">Quarter</button>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <!-- Add project items here -->
                    </div>
                </div>

                <!-- Activity Timeline -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-white mb-6">Recent Activity</h3>
                    <div class="space-y-6">
                        <!-- Add activity items here -->
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Team Status -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-white mb-6">Team Status</h3>
                    <div class="space-y-4">
                        <!-- Add team status items here -->
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gray-800 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-white mb-6">Quick Actions</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                            <div
                                class="w-12 h-12 bg-red-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-plus text-red-500 text-xl"></i>
                            </div>
                            <p class="text-sm text-center text-gray-300">New Task</p>
                        </button>
                        <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                            <div
                                class="w-12 h-12 bg-blue-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-file-alt text-blue-500 text-xl"></i>
                            </div>
                            <p class="text-sm text-center text-gray-300">Generate Report</p>
                        </button>
                        <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                            <div
                                class="w-12 h-12 bg-green-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-calendar-check text-green-500 text-xl"></i>
                            </div>
                            <p class="text-sm text-center text-gray-300">Schedule Meeting</p>
                        </button>
                        <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                            <div
                                class="w-12 h-12 bg-purple-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-chart-line text-purple-500 text-xl"></i>
                            </div>
                            <p class="text-sm text-center text-gray-300">View Analytics</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Projects Table -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 mb-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-white">Recent Projects</h3>
                <a href="#" class="text-red-400 hover:text-red-300 text-sm font-medium">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-gray-400 text-sm border-b border-gray-800">
                            <th class="pb-3 font-medium">Project</th>
                            <th class="pb-3 font-medium">Client</th>
                            <th class="pb-3 font-medium">Progress</th>
                            <th class="pb-3 font-medium">Deadline</th>
                            <th class="pb-3 font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add table rows here -->
                    </tbody>
                </table>
            </div>
        </div>
        </main>
    </div>
@endsection
