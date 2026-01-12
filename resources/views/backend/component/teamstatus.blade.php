<div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-white">Team Status</h3>
                        <div class="flex items-center space-x-3">
                            <div class="relative group">
                                <button class="px-3 py-1 text-sm bg-gray-800 rounded-lg hover:bg-gray-700 flex items-center space-x-2 team-filter-btn">
                                    <i class="fas fa-filter"></i>
                                    <span>Filter</span>
                                </button>
                                <div class="hidden absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl p-3 z-50 team-filter-dropdown">
                                    <div class="space-y-2">
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 team-status-filter" data-status="online" checked>
                                            <span class="text-sm">Online Only</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 team-status-filter" data-status="busy" checked>
                                            <span class="text-sm">Busy</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 team-status-filter" data-status="away">
                                            <span class="text-sm">On Leave</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="px-3 py-1 text-sm bg-red-600 rounded-lg hover:bg-red-700 flex items-center space-x-2 team-refresh-btn">
                                <i class="fas fa-sync-alt"></i>
                                <span>Refresh</span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Team Statistics -->
                    <div class="grid grid-cols-4 gap-4 mb-6">
                        <div class="text-center p-3 bg-gray-800/50 rounded-lg">
                            <p class="text-2xl font-bold text-white">12</p>
                            <p class="text-xs text-gray-400">Total</p>
                        </div>
                        <div class="text-center p-3 bg-green-900/20 rounded-lg">
                            <p class="text-2xl font-bold text-green-400">8</p>
                            <p class="text-xs text-gray-400">Online</p>
                        </div>
                        <div class="text-center p-3 bg-yellow-900/20 rounded-lg">
                            <p class="text-2xl font-bold text-yellow-400">3</p>
                            <p class="text-xs text-gray-400">Busy</p>
                        </div>
                        <div class="text-center p-3 bg-red-900/20 rounded-lg">
                            <p class="text-2xl font-bold text-red-400">1</p>
                            <p class="text-xs text-gray-400">Away</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Team Member 1 -->
                        <div class="bg-gray-800/50 rounded-xl p-4 hover:bg-gray-800 transition-all cursor-pointer group team-member-card" data-status="online">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                                            <span class="font-bold text-white">AC</span>
                                        </div>
                                        <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 rounded-full border-2 border-gray-900"></div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2 mb-1">
                                            <h4 class="font-semibold text-white">Alex Chen</h4>
                                            <span class="px-2 py-1 bg-blue-900/50 text-blue-300 text-xs rounded-full">Lead Dev</span>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-laptop-code text-gray-500 text-xs"></i>
                                                <span class="text-xs text-gray-400">Frontend</span>
                                            </div>
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-clock text-blue-400 text-xs"></i>
                                                <span class="text-xs text-blue-400">Active Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex flex-col items-end">
                                    <div class="flex items-center space-x-3">
                                        <div class="text-right hidden lg:block">
                                            <p class="text-sm text-white">Current Task</p>
                                            <p class="text-xs text-gray-400 truncate max-w-[150px]">E-Commerce Checkout</p>
                                        </div>
                                        <div class="relative group">
                                            <div class="w-16 h-2 bg-gray-700 rounded-full overflow-hidden">
                                                <div class="h-full bg-gradient-to-r from-green-500 to-blue-500 rounded-full" style="width: 85%"></div>
                                            </div>
                                            <div class="hidden absolute bottom-full mb-2 right-0 w-48 bg-gray-800 border border-gray-700 rounded-xl p-3 z-50 group-hover:block">
                                                <p class="text-sm text-gray-300">Progress: 85%</p>
                                                <p class="text-xs text-gray-400 mt-1">Deadline: Tomorrow</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 mt-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg team-action-btn" title="Message">
                                            <i class="fas fa-comment text-blue-500 text-sm"></i>
                                        </button>
                                        <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg team-action-btn" title="View Tasks">
                                            <i class="fas fa-tasks text-green-500 text-sm"></i>
                                        </button>
                                        <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg team-action-btn" title="Schedule Meeting">
                                            <i class="fas fa-calendar-alt text-purple-500 text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Workload Indicator -->
                            <div class="mt-4">
                                <div class="flex justify-between text-xs text-gray-400 mb-1">
                                    <span>Workload</span>
                                    <span>High</span>
                                </div>
                                <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-red-500 via-yellow-500 to-green-500 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team Member 2 -->
                        <div class="bg-gray-800/50 rounded-xl p-4 hover:bg-gray-800 transition-all cursor-pointer group team-member-card" data-status="busy">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                                            <span class="font-bold text-white">SJ</span>
                                        </div>
                                        <div class="absolute bottom-0 right-0 w-4 h-4 bg-yellow-500 rounded-full border-2 border-gray-900 animate-pulse"></div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2 mb-1">
                                            <h4 class="font-semibold text-white">Sarah Johnson</h4>
                                            <span class="px-2 py-1 bg-purple-900/50 text-purple-300 text-xs rounded-full">Backend</span>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-database text-gray-500 text-xs"></i>
                                                <span class="text-xs text-gray-400">API Development</span>
                                            </div>
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-clock text-yellow-400 text-xs"></i>
                                                <span class="text-xs text-yellow-400">In Meeting</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex flex-col items-end">
                                    <div class="flex items-center space-x-3">
                                        <div class="text-right hidden lg:block">
                                            <p class="text-sm text-white">Current Task</p>
                                            <p class="text-xs text-gray-400 truncate max-w-[150px]">Analytics Dashboard API</p>
                                        </div>
                                        <div class="relative group">
                                            <div class="w-16 h-2 bg-gray-700 rounded-full overflow-hidden">
                                                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: 45%"></div>
                                            </div>
                                            <div class="hidden absolute bottom-full mb-2 right-0 w-48 bg-gray-800 border border-gray-700 rounded-xl p-3 z-50 group-hover:block">
                                                <p class="text-sm text-gray-300">Progress: 45%</p>
                                                <p class="text-xs text-red-400 mt-1">Delayed: 2 days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 mt-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg team-action-btn" title="Message">
                                            <i class="fas fa-comment text-blue-500 text-sm"></i>
                                        </button>
                                        <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg team-action-btn" title="Request Support">
                                            <i class="fas fa-hands-helping text-red-500 text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Workload Indicator -->
                            <div class="mt-4">
                                <div class="flex justify-between text-xs text-gray-400 mb-1">
                                    <span>Workload</span>
                                    <span>Critical</span>
                                </div>
                                <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-red-600 to-red-400 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Performance Summary -->
                    <div class="mt-6 pt-4 border-t border-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    <span class="text-sm text-gray-300">Productivity: 82%</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-sm text-gray-300">Collaboration: 76%</span>
                                </div>
                            </div>
                            <button class="text-sm text-blue-400 hover:text-blue-300 flex items-center space-x-1 view-team-btn">
                                <i class="fas fa-users"></i>
                                <span>View Full Team</span>
                            </button>
                        </div>
                    </div>
                </div>