<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eden Spell | @yield('title', 'Dashboard')</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23dc2626'/><text x='50' y='65' font-family='Arial,sans-serif' font-size='40' font-weight='bold' text-anchor='middle' fill='white'>ES</text></svg>" type="image/svg+xml">
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
<body class="bg-gray-950 text-gray-100 h-screen flex flex-col overflow-hidden">
    
    <!-- Header -->
    @include('backend.layouts.header')
    
    <div class="flex flex-1 h-full overflow-hidden">
        <!-- Sidebar -->
        @include('backend.layouts.sidebar')
        
        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto h-full">
            @yield('content')
        </main>
    </div>
    
    <!-- Footer -->
    {{-- @include('backend.layouts.footer') --}}
    
    <script>
        // Mobile sidebar toggle
        function toggleMobileSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            sidebar.classList.toggle('hidden');
        }

        // Initialize dropdowns
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle mobile menu
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', toggleMobileSidebar);
            }

            // Close mobile sidebar when clicking outside
            const mobileSidebar = document.getElementById('mobileSidebar');
            if (mobileSidebar) {
                mobileSidebar.addEventListener('click', function(e) {
                    if (e.target === this) {
                        toggleMobileSidebar();
                    }
                });
            }

            // Toggle notification dropdown
            const notificationBtn = document.getElementById('notificationBtn');
            if (notificationBtn) {
                notificationBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const dropdown = this.nextElementSibling;
                    if (dropdown) {
                        dropdown.classList.toggle('hidden');
                    }
                });
            }

            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.dropdown-content').forEach(el => {
                    if (!el.classList.contains('hidden')) {
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

        // Dark mode toggle
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