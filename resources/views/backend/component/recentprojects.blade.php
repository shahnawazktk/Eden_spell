 <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 mb-8">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-3">
                    <h3 class="text-lg font-semibold text-white">Recent Projects</h3>
                    <div class="flex items-center space-x-2">
                        <span class="px-2 py-1 bg-green-900/30 text-green-400 text-xs rounded-full animate-pulse">Live</span>
                        <div class="relative group">
                            <button class="text-gray-400 hover:text-white" title="Table Settings">
                                <i class="fas fa-cog"></i>
                            </button>
                            <div class="hidden absolute left-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl p-3 z-50 group-hover:block">
                                <div class="space-y-2">
                                    <label class="flex items-center justify-between cursor-pointer">
                                        <span class="text-sm text-gray-300">Auto Refresh</span>
                                        <input type="checkbox" class="toggle-switch" checked>
                                    </label>
                                    <label class="flex items-center justify-between cursor-pointer">
                                        <span class="text-sm text-gray-300">Show Archived</span>
                                        <input type="checkbox" class="toggle-switch">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <button class="px-3 py-2 text-sm bg-gray-800 hover:bg-gray-700 rounded-lg flex items-center space-x-2 project-filter-btn">
                            <i class="fas fa-filter"></i>
                            <span>Filter</span>
                        </button>
                        <div class="hidden absolute right-0 mt-2 w-56 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl p-3 z-50 filter-dropdown">
                            <div class="space-y-3">
                                <div>
                                    <p class="text-sm text-gray-300 mb-2">Status</p>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="px-3 py-1 text-xs bg-green-900/30 text-green-400 rounded-full filter-status active" data-status="active">Active</button>
                                        <button class="px-3 py-1 text-xs bg-yellow-900/30 text-yellow-400 rounded-full filter-status" data-status="pending">Pending</button>
                                        <button class="px-3 py-1 text-xs bg-red-900/30 text-red-400 rounded-full filter-status" data-status="delayed">Delayed</button>
                                        <button class="px-3 py-1 text-xs bg-blue-900/30 text-blue-400 rounded-full filter-status" data-status="completed">Completed</button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-300 mb-2">Priority</p>
                                    <div class="flex flex-wrap gap-2">
                                        <button class="px-3 py-1 text-xs bg-red-900/30 text-red-300 rounded-full filter-priority" data-priority="high">High</button>
                                        <button class="px-3 py-1 text-xs bg-yellow-900/30 text-yellow-300 rounded-full filter-priority" data-priority="medium">Medium</button>
                                        <button class="px-3 py-1 text-xs bg-green-900/30 text-green-300 rounded-full filter-priority" data-priority="low">Low</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <button class="px-3 py-2 text-sm bg-gray-800 hover:bg-gray-700 rounded-lg flex items-center space-x-2 project-sort-btn">
                            <i class="fas fa-sort-amount-down"></i>
                            <span>Sort</span>
                        </button>
                        <div class="hidden absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl p-3 z-50 sort-dropdown">
                            <div class="space-y-2">
                                <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm sort-option active" data-sort="deadline">By Deadline</button>
                                <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm sort-option" data-sort="progress">By Progress</button>
                                <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm sort-option" data-sort="priority">By Priority</button>
                                <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm sort-option" data-sort="name">By Name</button>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white text-sm font-medium flex items-center space-x-2 new-project-btn">
                        <i class="fas fa-plus"></i>
                        <span>New Project</span>
                    </a>
                </div>
            </div>
            
            <!-- Search and Stats -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between mb-6 space-y-4 lg:space-y-0">
                <div class="relative w-full lg:w-auto">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-500"></i>
                    </div>
                    <input type="text" 
                           id="projectSearch"
                           placeholder="Search projects..." 
                           class="w-full lg:w-64 pl-10 pr-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-sm">
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        <span class="text-sm text-gray-400">On Track</span>
                        <span class="text-sm font-medium text-white">8</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                        <span class="text-sm text-gray-400">At Risk</span>
                        <span class="text-sm font-medium text-white">3</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <span class="text-sm text-gray-400">Delayed</span>
                        <span class="text-sm font-medium text-white">2</span>
                    </div>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full projects-table">
                    <thead>
                        <tr class="text-left text-gray-400 text-sm border-b border-gray-800">
                            <th class="pb-3 font-medium pl-4">Project</th>
                            <th class="pb-3 font-medium">Client</th>
                            <th class="pb-3 font-medium">Progress</th>
                            <th class="pb-3 font-medium">Deadline</th>
                            <th class="pb-3 font-medium">Budget</th>
                            <th class="pb-3 font-medium">Status</th>
                            <th class="pb-3 font-medium text-right pr-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Project 1 -->
                        <tr class="project-row border-b border-gray-800/50 hover:bg-gray-800/30 transition-all" data-status="active" data-priority="high" data-progress="85">
                            <td class="py-4 pl-4">
                                <div class="flex items-center space-x-3">
                                    <div class="relative">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                                            <i class="fas fa-shopping-cart text-white"></i>
                                        </div>
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full border-2 border-gray-900 flex items-center justify-center">
                                            <i class="fas fa-exclamation text-xs text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <h4 class="font-semibold text-white">E-Commerce Platform</h4>
                                            <span class="px-2 py-1 bg-red-900/30 text-red-300 text-xs rounded-full">High</span>
                                        </div>
                                        <p class="text-xs text-gray-400 mt-1">Version 3.0 Development</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                                        <span class="text-xs font-bold text-white">TS</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">TechStore Inc</p>
                                        <p class="text-xs text-gray-400">Enterprise</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-24">
                                        <div class="flex justify-between text-xs text-gray-400 mb-1">
                                            <span>85%</span>
                                            <span class="text-green-400">+5%</span>
                                        </div>
                                        <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-to-r from-green-500 to-blue-500 rounded-full progress-bar-animate" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-calendar text-gray-500"></i>
                                    <div>
                                        <p class="text-sm text-white">Dec 15, 2024</p>
                                        <p class="text-xs text-green-400">3 days left</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-dollar-sign text-green-500"></i>
                                    <div>
                                        <p class="text-sm text-white">$45,800</p>
                                        <p class="text-xs text-gray-400">85% spent</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                    <span class="text-sm text-green-400">On Track</span>
                                </div>
                            </td>
                            <td class="py-4 pr-4">
                                <div class="flex items-center justify-end space-x-2">
                                    <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg action-btn" title="View Details" data-action="view">
                                        <i class="fas fa-eye text-blue-500"></i>
                                    </button>
                                    <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg action-btn" title="Edit Project" data-action="edit">
                                        <i class="fas fa-edit text-yellow-500"></i>
                                    </button>
                                    <div class="relative group">
                                        <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg" title="More Options">
                                            <i class="fas fa-ellipsis-h text-gray-400"></i>
                                        </button>
                                        <div class="hidden absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl p-2 z-50 group-hover:block">
                                            <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm">Add Milestone</button>
                                            <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm">Share Project</button>
                                            <button class="w-full text-left px-3 py-2 hover:bg-gray-700 rounded-lg text-sm text-red-400">Archive</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Project 2 -->
                        <tr class="project-row border-b border-gray-800/50 hover:bg-gray-800/30 transition-all" data-status="delayed" data-priority="high" data-progress="45">
                            <td class="py-4 pl-4">
                                <div class="flex items-center space-x-3">
                                    <div class="relative">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                                            <i class="fas fa-chart-line text-white"></i>
                                        </div>
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-yellow-500 rounded-full border-2 border-gray-900 flex items-center justify-center">
                                            <i class="fas fa-clock text-xs text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <h4 class="font-semibold text-white">Analytics Dashboard</h4>
                                            <span class="px-2 py-1 bg-yellow-900/30 text-yellow-300 text-xs rounded-full">Critical</span>
                                        </div>
                                        <p class="text-xs text-gray-400 mt-1">Real-time Data Visualization</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                                        <span class="text-xs font-bold text-white">DA</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">DataAnalytics Corp</p>
                                        <p class="text-xs text-gray-400">Premium</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-24">
                                        <div class="flex justify-between text-xs text-gray-400 mb-1">
                                            <span>45%</span>
                                            <span class="text-red-400">-15%</span>
                                        </div>
                                        <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-to-r from-yellow-500 to-red-500 rounded-full" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-calendar text-red-500"></i>
                                    <div>
                                        <p class="text-sm text-white">Nov 30, 2024</p>
                                        <p class="text-xs text-red-400">Overdue: 2 days</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-dollar-sign text-yellow-500"></i>
                                    <div>
                                        <p class="text-sm text-white">$28,500</p>
                                        <p class="text-xs text-gray-400">60% spent</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                                    <span class="text-sm text-red-400">Delayed</span>
                                </div>
                            </td>
                            <td class="py-4 pr-4">
                                <div class="flex items-center justify-end space-x-2">
                                    <button class="p-2 bg-red-900/30 hover:bg-red-900/50 rounded-lg action-btn" title="Urgent Action" data-action="urgent">
                                        <i class="fas fa-exclamation-triangle text-red-400"></i>
                                    </button>
                                    <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg action-btn" title="Add Resources" data-action="resources">
                                        <i class="fas fa-user-plus text-green-500"></i>
                                    </button>
                                    <button class="p-2 bg-gray-700 hover:bg-gray-600 rounded-lg action-btn" title="View Details" data-action="view">
                                        <i class="fas fa-eye text-blue-500"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination and Summary -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between mt-6 pt-4 border-t border-gray-800">
                <div class="text-sm text-gray-400 mb-4 lg:mb-0">
                    Showing <span class="text-white font-medium">5</span> of <span class="text-white font-medium">24</span> projects
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-400">Page</span>
                        <select class="bg-gray-800 border border-gray-700 rounded-lg px-3 py-1 text-sm text-white page-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <span class="text-sm text-gray-400">of 5</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="p-2 bg-gray-800 hover:bg-gray-700 rounded-lg disabled:opacity-50 prev-page-btn" disabled>
                            <i class="fas fa-chevron-left text-gray-400"></i>
                        </button>
                        <button class="p-2 bg-gray-800 hover:bg-gray-700 rounded-lg next-page-btn">
                            <i class="fas fa-chevron-right text-white"></i>
                        </button>
                    </div>
                    <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg text-sm text-gray-300 flex items-center space-x-2 export-csv-btn">
                        <i class="fas fa-download"></i>
                        <span>Export CSV</span>
                    </button>
                </div>
            </div>
            
            <!-- Empty State -->
            <div id="emptyState" class="hidden text-center py-12">
                <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-folder-open text-gray-500 text-2xl"></i>
                </div>
                <h4 class="text-lg font-semibold text-white mb-2">No Projects Found</h4>
                <p class="text-gray-400 mb-6">Try adjusting your filters or search terms</p>
                <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white clear-filters-btn">
                    Clear Filters
                </button>
            </div>
        </div>