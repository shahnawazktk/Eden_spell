<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center text-white font-bold text-lg">
                        ES
                    </div>
                    <div>
                        <h1 class="text-xl font-bold">Eden Spell</h1>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="font-medium text-gray-700 hover:text-primary-600 transition-colors">Home</a>
                    <a href="#services" class="font-medium text-gray-700 hover:text-primary-600 transition-colors">Services</a>
                    <a href="#portfolio" class="font-medium text-gray-700 hover:text-primary-600 transition-colors">Portfolio</a>
                    <a href="#career" class="font-medium text-gray-700 hover:text-primary-600 transition-colors">Career</a>
                    <a href="#about" class="font-medium text-gray-700 hover:text-primary-600 transition-colors">About</a>
                    <a href="#contact" class="font-medium text-gray-700 hover:text-primary-600 transition-colors">Contact</a>
                </nav>
                
                <!-- Auth Buttons -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" class="hidden sm:block px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-colors">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 transition-all shadow-md hover:shadow-lg">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </header>