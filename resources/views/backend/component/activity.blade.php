<div class="lg:col-span-2 space-y-6">
                <!-- Activity Timeline -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-white">Activity Timeline</h3>
                        <div class="flex items-center space-x-3">
                            <div class="relative">
                                <button class="px-3 py-1 text-sm bg-gray-800 rounded-lg hover:bg-gray-700 flex items-center space-x-2 activity-filter-btn">
                                    <i class="fas fa-filter"></i>
                                    <span>Activity Type</span>
                                </button>
                                <div class="hidden absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl p-3 z-50 filter-dropdown">
                                    <div class="space-y-2">
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 activity-filter" data-type="all" checked>
                                            <span class="text-sm">All Activities</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 activity-filter" data-type="project" checked>
                                            <span class="text-sm">Project Updates</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 activity-filter" data-type="task" checked>
                                            <span class="text-sm">Task Completions</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="checkbox" class="rounded bg-gray-700 border-gray-600 activity-filter" data-type="system" checked>
                                            <span class="text-sm">System Alerts</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="px-3 py-1 text-sm bg-red-600 rounded-lg hover:bg-red-700 live-feed-btn">
                                <i class="fas fa-sync-alt mr-2"></i>
                                Live Feed
                            </button>
                        </div>
                    </div>
                    
                    <!-- Timeline Container -->
                    <div class="space-y-6 max-h-[500px] overflow-y-auto pr-2 timeline-container">
                        <!-- Timeline Item 1 -->
                        <div class="timeline-item relative pl-8 pb-6 activity-item" data-type="project">
                            <div class="absolute left-0 top-0 w-6 h-6 rounded-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                                <i class="fas fa-project-diagram text-xs text-white"></i>
                            </div>
                            <div class="absolute left-3 top-6 bottom-0 w-0.5 bg-gradient-to-b from-blue-500 to-transparent"></div>
                            
                            <div class="bg-gray-800/50 rounded-xl p-4 hover:bg-gray-800 transition-all group">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <span class="font-semibold text-white">Project Milestone Completed</span>
                                            <span class="px-2 py-1 bg-green-900/30 text-green-300 text-xs rounded-full">Completed</span>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-1">E-Commerce checkout redesign phase 2 has been completed ahead of schedule</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="text-xs text-gray-400">2 min ago</span>
                                        <button class="p-2 hover:bg-gray-700 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity timeline-action-btn">
                                            <i class="fas fa-ellipsis-h text-gray-400"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between mt-3">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                                                <span class="text-xs font-bold text-white">AC</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-white">Alex Chen</p>
                                                <p class="text-xs text-gray-400">Lead Developer</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-clock text-blue-400"></i>
                                            <span class="text-xs text-blue-400">Early by 2 days</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center space-x-3">
                                        <button class="px-3 py-1 bg-blue-900/30 hover:bg-blue-900/50 text-blue-300 rounded-lg text-sm transition-all timeline-detail-btn">
                                            <i class="fas fa-external-link-alt mr-1"></i>
                                            View Details
                                        </button>
                                        <div class="flex items-center space-x-2">
                                            <button class="p-2 hover:bg-gray-700 rounded-lg reaction-btn" data-reaction="like">
                                                <i class="fas fa-thumbs-up text-gray-400 hover:text-blue-400"></i>
                                            </button>
                                            <button class="p-2 hover:bg-gray-700 rounded-lg reaction-btn" data-reaction="celebrate">
                                                <i class="fas fa-party-horn text-gray-400 hover:text-yellow-400"></i>
                                            </button>
                                            <span class="text-xs text-gray-400">12</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Timeline Item 2 -->
                        <div class="timeline-item relative pl-8 pb-6 activity-item" data-type="system">
                            <div class="absolute left-0 top-0 w-6 h-6 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                                <i class="fas fa-exclamation-triangle text-xs text-white"></i>
                            </div>
                            <div class="absolute left-3 top-6 bottom-0 w-0.5 bg-gradient-to-b from-red-500 to-transparent"></div>
                            
                            <div class="bg-gray-800/50 rounded-xl p-4 hover:bg-gray-800 transition-all">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <span class="font-semibold text-white">System Alert</span>
                                            <span class="px-2 py-1 bg-red-900/30 text-red-300 text-xs rounded-full">Warning</span>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-1">Server load exceeded 85% for 10 minutes. Consider scaling resources</p>
                                    </div>
                                    <span class="text-xs text-gray-400">15 min ago</span>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center space-x-2">
                                                <i class="fas fa-server text-gray-400"></i>
                                                <span class="text-sm text-gray-300">Production Server 03</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-32 h-2 bg-gray-700 rounded-full overflow-hidden">
                                                    <div class="h-full bg-gradient-to-r from-red-500 to-orange-500 rounded-full" style="width: 85%"></div>
                                                </div>
                                                <span class="text-sm text-red-400">85%</span>
                                            </div>
                                        </div>
                                        <button class="px-3 py-1 bg-red-900/30 hover:bg-red-900/50 text-red-300 rounded-lg text-sm transition-all">
                                            <i class="fas fa-cog mr-1"></i>
                                            Adjust Settings
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Timeline Item 3 -->
                        <div class="timeline-item relative pl-8 pb-6 activity-item" data-type="ai">
                            <div class="absolute left-0 top-0 w-6 h-6 rounded-full bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                                <i class="fas fa-robot text-xs text-white"></i>
                            </div>
                            <div class="absolute left-3 top-6 bottom-0 w-0.5 bg-gradient-to-b from-purple-500 to-transparent"></div>
                            
                            <div class="bg-gray-800/50 rounded-xl p-4 hover:bg-gray-800 transition-all">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <span class="font-semibold text-white">AI Insight</span>
                                            <span class="px-2 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full">Recommendation</span>
                                        </div>
                                        <p class="text-sm text-gray-400 mt-1">Based on team velocity, consider reassigning 2 developers to Analytics Dashboard project to meet deadline</p>
                                    </div>
                                    <span class="text-xs text-gray-400">1 hour ago</span>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="grid grid-cols-3 gap-4">
                                        <div class="text-center p-3 bg-gray-800/50 rounded-lg">
                                            <p class="text-lg font-bold text-white">72%</p>
                                            <p class="text-xs text-gray-400">Team Capacity</p>
                                        </div>
                                        <div class="text-center p-3 bg-gray-800/50 rounded-lg">
                                            <p class="text-lg font-bold text-yellow-400">2</p>
                                            <p class="text-xs text-gray-400">Devs Available</p>
                                        </div>
                                        <div class="text-center p-3 bg-gray-800/50 rounded-lg">
                                            <p class="text-lg font-bold text-green-400">92%</p>
                                            <p class="text-xs text-gray-400">Success Chance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Activity Summary -->
                    <div class="mt-6 pt-4 border-t border-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                    <span class="text-sm text-gray-300">Active: 8</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <span class="text-sm text-gray-300">Alerts: 2</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-sm text-gray-300">Updates: 15</span>
                                </div>
                            </div>
                            <button class="text-sm text-blue-400 hover:text-blue-300 flex items-center space-x-1 load-more-btn">
                                <i class="fas fa-history"></i>
                                <span>Load More Activities</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>