 <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gray-800 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-3">
                            <h3 class="text-lg font-semibold text-white">Quick Actions</h3>
                            <span class="px-2 py-1 bg-gray-800 rounded-lg text-xs text-gray-300 flex items-center">
                                <i class="fas fa-bolt text-yellow-500 mr-1"></i>
                                Instant Access
                            </span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="px-3 py-1 text-sm bg-gray-800 rounded-lg hover:bg-gray-700 flex items-center space-x-1 customize-actions-btn">
                                <i class="fas fa-cog text-xs"></i>
                                <span>Customize</span>
                            </button>
                            <button class="px-3 py-1 text-sm bg-red-600 rounded-lg hover:bg-red-700 quick-action-refresh">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Horizontal Actions Grid -->
                    <div class="flex flex-wrap gap-4 mb-6">
                        <!-- New Task -->
                        <div class="relative group flex-1 min-w-[200px]">
                            <button class="w-full p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group-hover:shadow-lg group-hover:shadow-red-500/10 hover-lift quick-action-btn flex items-center space-x-4" data-action="new-task">
                                <div class="relative">
                                    <div class="w-14 h-14 bg-red-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-plus text-red-500 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-6 h-6 bg-red-600 rounded-full flex items-center justify-center animate-gentle-pulse">
                                        <i class="fas fa-star text-xs text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-1 text-left">
                                    <p class="text-base font-medium text-white">New Task</p>
                                    <p class="text-sm text-gray-400">Create & assign tasks instantly</p>
                                    <div class="flex items-center space-x-2 mt-1">
                                        <span class="text-xs text-gray-500">Template available</span>
                                        <i class="fas fa-chevron-right text-xs text-gray-500"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                        
                        <!-- Generate Report -->
                        <div class="relative group flex-1 min-w-[200px]">
                            <button class="w-full p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group-hover:shadow-lg group-hover:shadow-blue-500/10 hover-lift quick-action-btn flex items-center space-x-4" data-action="generate-report">
                                <div class="relative">
                                    <div class="w-14 h-14 bg-blue-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-file-alt text-blue-500 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                        <span class="text-xs text-white font-bold">AI</span>
                                    </div>
                                </div>
                                <div class="flex-1 text-left">
                                    <p class="text-base font-medium text-white">Generate Report</p>
                                    <p class="text-sm text-gray-400">AI-powered insights</p>
                                    <div class="flex items-center space-x-2 mt-1">
                                        <span class="text-xs text-gray-500">3 templates</span>
                                        <i class="fas fa-chevron-right text-xs text-gray-500"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                        
                        <!-- Schedule Meeting -->
                        <div class="relative group flex-1 min-w-[200px]">
                            <button class="w-full p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group-hover:shadow-lg group-hover:shadow-green-500/10 hover-lift quick-action-btn flex items-center space-x-4" data-action="schedule-meeting">
                                <div class="relative">
                                    <div class="w-14 h-14 bg-green-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-calendar-check text-green-500 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-bolt text-xs text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-1 text-left">
                                    <p class="text-base font-medium text-white">Schedule Meeting</p>
                                    <p class="text-sm text-gray-400">Smart scheduling</p>
                                    <div class="flex items-center space-x-2 mt-1">
                                        <span class="text-xs text-gray-500">Find optimal time</span>
                                        <i class="fas fa-chevron-right text-xs text-gray-500"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                        
                        <!-- View Analytics -->
                        <div class="relative group flex-1 min-w-[200px]">
                            <button class="w-full p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group-hover:shadow-lg group-hover:shadow-purple-500/10 hover-lift quick-action-btn flex items-center space-x-4" data-action="view-analytics">
                                <div class="relative">
                                    <div class="w-14 h-14 bg-purple-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-chart-line text-purple-500 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-6 h-6 bg-purple-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-fire text-xs text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-1 text-left">
                                    <p class="text-base font-medium text-white">View Analytics</p>
                                    <p class="text-sm text-gray-400">Real-time data dashboards</p>
                                    <div class="flex items-center space-x-2 mt-1">
                                        <span class="text-xs text-gray-500">Updated 5m ago</span>
                                        <i class="fas fa-chevron-right text-xs text-gray-500"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Recent Actions & AI Suggestions -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <!-- Recent Actions -->
                        <div class="bg-gray-800/50 rounded-xl p-4">
                            <div class="flex items-center justify-between mb-3">
                                <h4 class="text-sm font-semibold text-white flex items-center">
                                    <i class="fas fa-history mr-2 text-gray-400"></i>
                                    Recent Actions
                                </h4>
                                <button class="text-xs text-gray-400 hover:text-gray-300 clear-recent-actions">Clear All</button>
                            </div>
                            <div class="space-y-2 recent-actions-list">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-red-900/30 rounded flex items-center justify-center">
                                            <i class="fas fa-plus text-red-500 text-xs"></i>
                                        </div>
                                        <span class="text-gray-300">Created "Checkout Redesign" task</span>
                                    </div>
                                    <span class="text-xs text-gray-400">5m ago</span>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-blue-900/30 rounded flex items-center justify-center">
                                            <i class="fas fa-file-alt text-blue-500 text-xs"></i>
                                        </div>
                                        <span class="text-gray-300">Generated Q3 Report</span>
                                    </div>
                                    <span class="text-xs text-gray-500">2h ago</span>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-green-900/30 rounded flex items-center justify-center">
                                            <i class="fas fa-calendar-check text-green-500 text-xs"></i>
                                        </div>
                                        <span class="text-gray-300">Scheduled team sync</span>
                                    </div>
                                    <span class="text-xs text-gray-500">Yesterday</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- AI Suggestions -->
                        <div class="p-4 bg-gradient-to-r from-purple-900/20 to-blue-900/20 border border-purple-800/30 rounded-xl cursor-pointer ai-suggestion hover:from-purple-900/30 hover:to-blue-900/30 transition-all">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-purple-600 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-robot text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-sm font-semibold text-white">AI Assistant</p>
                                        <span class="text-xs bg-purple-600/30 text-purple-300 px-2 py-1 rounded">Pro Tip</span>
                                    </div>
                                    <p class="text-xs text-gray-300 mb-3">Based on your recent activity, consider:</p>
                                    <ul class="space-y-1 mb-3">
                                        <li class="text-xs text-gray-300 flex items-center">
                                            <i class="fas fa-check-circle text-green-500 mr-2 text-xs"></i>
                                            Schedule a team sync to discuss Analytics Dashboard delay
                                        </li>
                                        <li class="text-xs text-gray-300 flex items-center">
                                            <i class="fas fa-check-circle text-green-500 mr-2 text-xs"></i>
                                            Review pending tasks before weekend
                                        </li>
                                    </ul>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 px-3 py-1 text-xs bg-purple-700 hover:bg-purple-600 rounded-lg text-white transition-colors">
                                            Implement Suggestions
                                        </button>
                                        <button class="px-3 py-1 text-xs bg-gray-700 hover:bg-gray-600 rounded-lg text-gray-300 transition-colors">
                                            Dismiss
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>