<aside id="sidebar" class="w-64 bg-gray-900 border-r border-gray-800 flex-shrink-0 lg:block hidden overflow-y-auto">
    <nav class="p-4 space-y-2">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-3 px-4 py-3 bg-gradient-to-r from-red-600/20 to-transparent border-l-4 border-red-600 text-white rounded-lg">
            <i class="fas fa-tachometer-alt w-5"></i>
            <span>Dashboard</span>
        </a>

        <!-- Projects -->
        <div class="group">
            <a href="#"
                class="flex items-center justify-between px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-folder w-5"></i>
                    <span>Projects</span>
                </div>
                <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
            </a>
            <div class="ml-8 mt-1 space-y-1 hidden group-hover:block">
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Active
                    Projects</a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Archived</a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Templates</a>
            </div>
        </div>

        <!-- Tasks -->
        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-tasks w-5"></i>
            <span>Tasks</span>
            <span class="ml-auto bg-red-600 text-white text-xs px-2 py-1 rounded-full">12</span>
        </a>

        <!-- Clients -->
        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-users w-5"></i>
            <span>Clients</span>
        </a>

        <!-- Calendar -->
        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-calendar-alt w-5"></i>
            <span>Calendar</span>
        </a>

        <!-- Team -->
        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-user-friends w-5"></i>
            <span>Team</span>
        </a>

        <!-- Reports -->
        <div class="group">
            <a href="#"
                class="flex items-center justify-between px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-chart-bar w-5"></i>
                    <span>Reports</span>
                </div>
                <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
            </a>
            <div class="ml-8 mt-1 space-y-1 hidden group-hover:block">
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Performance</a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Financial</a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg">Client
                    Reports</a>
            </div>
        </div>

        <!-- Settings -->
        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-cog w-5"></i>
            <span>Settings</span>
        </a>

        <!-- Divider -->
        <div class="border-t border-gray-800 my-4"></div>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center w-full px-4 py-3 hover:bg-gray-800 transition-all text-red-400">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="ml-3">Logout</span>
            </button>
        </form>
    </nav>
</aside>

<!-- Mobile Sidebar -->
<div id="mobileSidebar" class="fixed inset-0 z-50 lg:hidden hidden">
    <div class="absolute inset-0 bg-black bg-opacity-50" onclick="toggleMobileSidebar()"></div>
    <div class="absolute left-0 top-0 bottom-0 w-64 bg-gray-900 border-r border-gray-800 animate-slide-in">
        <div class="p-4">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
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
                <!-- Mobile Navigation Items -->
                <a href="{{ route('dashboard') }}"
                    class="flex items-center space-x-3 px-4 py-3 bg-gradient-to-r from-red-600/20 to-transparent border-l-4 border-red-600 text-white rounded-lg">
                    <i class="fas fa-tachometer-alt w-5"></i>
                    <span>Dashboard</span>
                </a>
                <!-- Add other mobile nav items as needed -->
            </nav>
        </div>
    </div>
</div>