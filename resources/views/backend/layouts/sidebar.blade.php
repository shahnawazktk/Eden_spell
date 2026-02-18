@php
    $isDashboard = request()->routeIs('dashboard');
    $isProjectsSection = request()->routeIs('projects.*');
@endphp

<aside id="sidebar" class="w-64 bg-gray-900 border-r border-gray-800 flex-shrink-0 lg:block hidden h-full overflow-y-auto">
    <nav class="p-4 space-y-2">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all {{ $isDashboard ? 'bg-gradient-to-r from-red-600/20 to-transparent border-l-4 border-red-600 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
            <i class="fas fa-tachometer-alt w-5"></i>
            <span>Dashboard</span>
        </a>

        <div>
            <button type="button" data-project-toggle data-target="projectSubmenuDesktop"
                aria-expanded="{{ $isProjectsSection ? 'true' : 'false' }}"
                class="w-full flex items-center justify-between px-4 py-3 rounded-lg transition-all {{ $isProjectsSection ? 'text-white bg-gray-800/70 border border-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-folder w-5"></i>
                    <span>Projects</span>
                    <span class="text-xs px-2 py-0.5 rounded-full bg-red-600 text-white">24</span>
                </div>
                <i data-project-chevron
                    class="fas fa-chevron-down text-xs transition-transform {{ $isProjectsSection ? 'rotate-180' : '' }}"></i>
            </button>
            <div id="projectSubmenuDesktop" class="ml-8 mt-1 space-y-1 {{ $isProjectsSection ? '' : 'hidden' }}">
                <a href="{{ route('projects.index') }}"
                    class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.index') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                    All Projects
                </a>
                <a href="{{ route('projects.active') }}"
                    class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.active') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                    Active Projects
                </a>
                <a href="{{ route('projects.archived') }}"
                    class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.archived') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                    Archived
                </a>
                <a href="{{ route('projects.templates') }}"
                    class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.templates') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                    Templates
                </a>
            </div>
        </div>

        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-tasks w-5"></i>
            <span>Tasks</span>
            <span class="ml-auto bg-red-600 text-white text-xs px-2 py-1 rounded-full">12</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-users w-5"></i>
            <span>Clients</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-calendar-alt w-5"></i>
            <span>Calendar</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-user-friends w-5"></i>
            <span>Team</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-user-check w-5"></i>
            <span>Attendance</span>
        </a>

        <a href="#"
            class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all">
            <i class="fas fa-briefcase w-5"></i>
            <span>Career</span>
        </a>

        <a href="{{ route('help.support') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all {{ request()->routeIs('help.support') ? 'bg-red-600/20 border-l-4 border-red-600 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
            <i class="fas fa-life-ring w-5"></i>
            <span>Help & Support</span>
        </a>

        <div class="border-t border-gray-800 my-4"></div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center w-full px-4 py-3 hover:bg-gray-800 transition-all text-red-400 rounded-lg">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="ml-3">Logout</span>
            </button>
        </form>
    </nav>
</aside>

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
                <a href="{{ route('dashboard') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all {{ $isDashboard ? 'bg-gradient-to-r from-red-600/20 to-transparent border-l-4 border-red-600 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                    <i class="fas fa-tachometer-alt w-5"></i>
                    <span>Dashboard</span>
                </a>

                <div>
                    <button type="button" data-project-toggle data-target="projectSubmenuMobile"
                        aria-expanded="{{ $isProjectsSection ? 'true' : 'false' }}"
                        class="w-full flex items-center justify-between px-4 py-3 rounded-lg transition-all {{ $isProjectsSection ? 'text-white bg-gray-800/70 border border-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-folder w-5"></i>
                            <span>Projects</span>
                        </div>
                        <i data-project-chevron
                            class="fas fa-chevron-down text-xs transition-transform {{ $isProjectsSection ? 'rotate-180' : '' }}"></i>
                    </button>
                    <div id="projectSubmenuMobile" class="ml-8 mt-1 space-y-1 {{ $isProjectsSection ? '' : 'hidden' }}">
                        <a href="{{ route('projects.index') }}"
                            class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.index') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                            All Projects
                        </a>
                        <a href="{{ route('projects.active') }}"
                            class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.active') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                            Active Projects
                        </a>
                        <a href="{{ route('projects.archived') }}"
                            class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.archived') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                            Archived
                        </a>
                        <a href="{{ route('projects.templates') }}"
                            class="block px-4 py-2 text-sm rounded-lg transition-all {{ request()->routeIs('projects.templates') ? 'bg-red-600/20 text-white border-l-2 border-red-600' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                            Templates
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-project-toggle]').forEach(function (toggle) {
            toggle.addEventListener('click', function () {
                const targetId = toggle.getAttribute('data-target');
                const menu = document.getElementById(targetId);
                if (!menu) {
                    return;
                }

                const isHidden = menu.classList.toggle('hidden');
                const expanded = !isHidden;
                toggle.setAttribute('aria-expanded', String(expanded));

                const chevron = toggle.querySelector('[data-project-chevron]');
                if (chevron) {
                    chevron.classList.toggle('rotate-180', expanded);
                }
            });
        });
    });
</script>
