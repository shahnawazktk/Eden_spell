<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eden Spell | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1f2937;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #dc2626, #7f1d1d);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #ef4444, #dc2626);
        }
        
        /* Animations */
        @keyframes slideIn {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slide-in {
            animation: slideIn 0.3s ease-out;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        
        /* Smooth transitions */
        .transition-all {
            transition: all 0.3s ease;
        }
        
        /* Glass effect */
        .glass-effect {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Hide scrollbar but keep functionality */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen flex flex-col">
    <!-- Top Navigation Bar -->
    <header class="glass-effect border-b border-gray-800 sticky top-0 z-50">
        <div class="flex items-center justify-between px-6 py-4">
            <!-- Left: Logo & Search -->
            <div class="flex items-center space-x-6">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                        <span class="font-bold text-white">ES</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-white">Eden Spell</h1>
                        <p class="text-xs text-gray-400">Digital Solutions</p>
                    </div>
                </div>
                
                <!-- Search Bar -->
                <div class="hidden lg:block relative w-96">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-500"></i>
                    </div>
                    <input type="text" 
                           placeholder="Search projects, clients, tasks..." 
                           class="w-full pl-10 pr-4 py-2 bg-gray-900 border border-gray-800 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-sm">
                </div>
            </div>
            
            <!-- Right: User Menu & Notifications -->
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button class="relative p-2 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                    </button>
                    <!-- Notification Dropdown -->
                    <div class="hidden absolute right-0 mt-2 w-80 bg-gray-900 border border-gray-800 rounded-xl shadow-2xl p-4 z-50">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-semibold">Notifications</h3>
                            <span class="text-xs text-red-400 bg-red-900/30 px-2 py-1 rounded-full">5 new</span>
                        </div>
                        <div class="space-y-3 max-h-96 overflow-y-auto">
                            <div class="p-3 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition-all cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-tasks text-blue-500"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm">New task assigned to you</p>
                                        <p class="text-xs text-gray-400 mt-1">2 minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition-all cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-check-circle text-green-500"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm">Project milestone completed</p>
                                        <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- User Profile -->
                <div class="relative group">
                    <button class="flex items-center space-x-3 p-2 rounded-xl hover:bg-gray-800 transition-all">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                            <span class="font-bold text-white">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
                        </div>
                        <div class="hidden lg:block text-left">
                            <p class="font-medium text-sm">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                        </div>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    
                    <!-- User Dropdown -->
                    <div class="hidden absolute right-0 mt-2 w-48 bg-gray-900 border border-gray-800 rounded-xl shadow-2xl py-2 z-50 group-hover:block hover:block">
                        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 hover:bg-gray-800 transition-all">
                            <i class="fas fa-user text-gray-400 w-5"></i>
                            <span class="ml-3">Profile</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-800 transition-all">
                            <i class="fas fa-cog text-gray-400 w-5"></i>
                            <span class="ml-3">Settings</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-800 transition-all">
                            <i class="fas fa-question-circle text-gray-400 w-5"></i>
                            <span class="ml-3">Help & Support</span>
                        </a>
                        <div class="border-t border-gray-800 my-2"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center w-full px-4 py-3 hover:bg-gray-800 transition-all text-red-400">
                                <i class="fas fa-sign-out-alt w-5"></i>
                                <span class="ml-3">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <button id="mobileMenuToggle" class="lg:hidden p-2 text-gray-400 hover:text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <div class="flex flex-1 overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-900 border-r border-gray-800 flex-shrink-0 lg:block hidden overflow-y-auto">
            <nav class="p-4 space-y-2">
                <!-- Dashboard -->
                <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-gradient-to-r from-red-600/20 to-transparent border-l-4 border-red-600 text-white rounded-lg">
                    <i class="fas fa-tachometer-alt w-5"></i>
                    <span>Dashboard</span>
                </a>
                
                <!-- Projects -->
                <div class="group">
                    <a href="#" class="flex items-center justify-between px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-folder w-5"></i>
                            <span>Projects</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                    </a>
                    <div class="ml-8 mt-1 space-y-1 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Active Projects</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Archived</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Templates</a>
                    </div>
                </div>
                
                <!-- Tasks -->
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                    <i class="fas fa-tasks w-5"></i>
                    <span>Tasks</span>
                    <span class="ml-auto bg-red-600 text-white text-xs px-2 py-1 rounded-full">12</span>
                </a>
                
                <!-- Clients -->
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                    <i class="fas fa-users w-5"></i>
                    <span>Clients</span>
                </a>
                
                <!-- Calendar -->
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                    <i class="fas fa-calendar-alt w-5"></i>
                    <span>Calendar</span>
                </a>
                
                <!-- Team -->
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                    <i class="fas fa-user-friends w-5"></i>
                    <span>Team</span>
                </a>
                
                <!-- Reports -->
                <div class="group">
                    <a href="#" class="flex items-center justify-between px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-chart-bar w-5"></i>
                            <span>Reports</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                    </a>
                    <div class="ml-8 mt-1 space-y-1 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Performance</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Financial</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Client Reports</a>
                    </div>
                </div>
                
                <!-- Settings -->
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                    <i class="fas fa-cog w-5"></i>
                    <span>Settings</span>
                </a>
                
                <!-- Divider -->
                <div class="border-t border-gray-800 my-4"></div>
                
                <!-- Quick Add -->
                <button class="w-full flex items-center justify-center space-x-2 px-4 py-3 bg-gradient-to-r from-red-600 to-red-800 text-white rounded-lg hover:from-red-700 hover:to-red-900 transition-all">
                    <i class="fas fa-plus"></i>
                    <span>New Project</span>
                </button>
            </nav>
            
            <!-- Recent Projects -->
            <div class="p-4 border-t border-gray-800">
                <h3 class="text-sm font-semibold text-gray-400 mb-3">RECENT PROJECTS</h3>
                <div class="space-y-2">
                    <a href="#" class="flex items-center space-x-3 p-2 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                        <span class="text-sm truncate">E-commerce Platform</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-2 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        <span class="text-sm truncate">Healthcare Portal</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-2 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                        <span class="text-sm truncate">CRM System</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Mobile Sidebar -->
        <div id="mobileSidebar" class="fixed inset-0 z-50 lg:hidden hidden">
            <div class="absolute inset-0 bg-black bg-opacity-50" onclick="toggleMobileSidebar()"></div>
            <div class="absolute left-0 top-0 bottom-0 w-64 bg-gray-900 border-r border-gray-800 animate-slide-in">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                                <span class="font-bold text-white">ES</span>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold text-white">Eden Spell</h1>
                                <p class="text-xs text-gray-400">Dashboard</p>
                            </div>
                        </div>
                        <button onclick="toggleMobileSidebar()" class="p-2 text-gray-400 hover:text-white">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <nav class="space-y-2">
                        <!-- Mobile Navigation Items (same as sidebar) -->
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-gradient-to-r from-red-600/20 to-transparent border-l-4 border-red-600 text-white rounded-lg">
                            <i class="fas fa-tachometer-alt w-5"></i>
                            <span>Dashboard</span>
                        </a>
                        <!-- Add other mobile nav items here -->
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6 animate-fade-in">
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
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                                <span class="text-2xl font-bold text-white">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
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

                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
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
                            <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 12%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
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
                            <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 94%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-red-800/50 transition-all hover:scale-[1.02]">
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
                            <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-full h-2" style="width: 75%"></div>
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
                                <div class="w-12 h-12 bg-red-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                    <i class="fas fa-plus text-red-500 text-xl"></i>
                                </div>
                                <p class="text-sm text-center text-gray-300">New Task</p>
                            </button>
                            <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                                <div class="w-12 h-12 bg-blue-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                    <i class="fas fa-file-alt text-blue-500 text-xl"></i>
                                </div>
                                <p class="text-sm text-center text-gray-300">Generate Report</p>
                            </button>
                            <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                                <div class="w-12 h-12 bg-green-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
                                    <i class="fas fa-calendar-check text-green-500 text-xl"></i>
                                </div>
                                <p class="text-sm text-center text-gray-300">Schedule Meeting</p>
                            </button>
                            <button class="p-4 bg-gray-800 hover:bg-gray-700 rounded-xl transition-all group">
                                <div class="w-12 h-12 bg-purple-900/30 rounded-lg flex items-center justify-center mb-3 mx-auto group-hover:scale-110 transition-transform">
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

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                            <span class="font-bold text-white text-sm">ES</span>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">© 2024 Eden Spell Technologies</p>
                            <p class="text-xs text-gray-500">All rights reserved</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Support</a>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile sidebar toggle
        function toggleMobileSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            sidebar.classList.toggle('hidden');
        }

        // Initialize dropdowns
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle mobile menu
            document.getElementById('mobileMenuToggle').addEventListener('click', toggleMobileSidebar);

            // Close mobile sidebar when clicking outside
            document.getElementById('mobileSidebar').addEventListener('click', function(e) {
                if (e.target === this) {
                    toggleMobileSidebar();
                }
            });

            // Toggle notification dropdown
            const notificationBtn = document.querySelector('button.relative');
            notificationBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                const dropdown = this.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.hidden[class*="absolute"]').forEach(el => {
                    if (!el.classList.contains('group-hover:block')) {
                        el.classList.add('hidden');
                    }
                });
            });

            // Animate stats cards on hover
            const statCards = document.querySelectorAll('.hover\\:scale-\\[1\\.02\\]');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });

            // Update time dynamically
            function updateTime() {
                const now = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                const timeElement = document.createElement('div');
                timeElement.className = 'text-sm text-gray-400';
                timeElement.textContent = now.toLocaleDateString('en-US', options);
                
                const existingTime = document.querySelector('.text-sm.text-gray-400');
                if (existingTime) {
                    existingTime.parentNode.replaceChild(timeElement, existingTime);
                }
            }

            // Update time every minute
            updateTime();
            setInterval(updateTime, 60000);
        });

        // Dark mode toggle (example)
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }
    </script>
</body>
</html>