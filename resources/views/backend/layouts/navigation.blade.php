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
