<!-- Hero About Section -->
<section class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-black">
    <!-- Particle Background -->
    <div class="particles-container" id="particles"></div>
    
    <!-- Background Gradients -->
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-900/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-red-900/10 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-slide-left">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-red-900/20 to-black border border-red-800/30 mb-8">
                    <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                    <span class="text-sm font-semibold text-red-400">ABOUT US</span>
                </div>
                
                <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black mb-6 leading-tight">
                    <span class="block">We Are</span>
                    <span class="text-gradient">Digital</span>
                    <span class="block">Architects</span>
                </h1>
                
                <div class="typewriter text-xl text-gray-400 mb-8 max-w-xl">
                    Crafting digital experiences that transform businesses
                </div>
                
                <p class="text-lg text-gray-400 mb-10 leading-relaxed">
                    At <span class="text-red-500 font-semibold">Eden Spell</span>, we don't just write code—we architect digital solutions that drive innovation, growth, and competitive advantage for enterprises worldwide. Our team of experts combines cutting-edge technology with strategic thinking to deliver exceptional results.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="#story" class="group px-8 py-4 bg-gradient-to-r from-red-600 to-red-800 text-white font-semibold rounded-xl hover:from-red-700 hover:to-red-900 transition-all duration-300 hover:scale-105">
                        <span class="flex items-center gap-3">
                            Explore Our Journey
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </span>
                    </a>
                    <a href="#team" class="group px-8 py-4 border-2 border-red-800 text-white font-semibold rounded-xl hover:bg-red-900/20 transition-all duration-300">
                        <span class="flex items-center gap-3">
                            Meet Our Team
                            <i class="fas fa-users group-hover:scale-110 transition-transform"></i>
                        </span>
                    </a>
                </div>
            </div>
            
            <div class="relative animate-slide-right">
                <div class="relative card-3d">
                    <div class="card-inner bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm">
                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-6 mb-10">
                            <div class="text-center p-6 bg-gradient-to-br from-red-900/10 to-black/50 rounded-2xl border border-red-800/20">
                                <div class="text-4xl font-bold text-red-500 mb-2 count-up" data-target="150">0</div>
                                <div class="text-sm text-gray-400">Projects Delivered</div>
                            </div>
                            <div class="text-center p-6 bg-gradient-to-br from-red-900/10 to-black/50 rounded-2xl border border-red-800/20">
                                <div class="text-4xl font-bold text-red-500 mb-2 count-up" data-target="99">0</div>
                                <div class="text-sm text-gray-400">Client Satisfaction</div>
                            </div>
                            <div class="text-center p-6 bg-gradient-to-br from-red-900/10 to-black/50 rounded-2xl border border-red-800/20">
                                <div class="text-4xl font-bold text-red-500 mb-2 count-up" data-target="50">0</div>
                                <div class="text-sm text-gray-400">Team Members</div>
                            </div>
                            <div class="text-center p-6 bg-gradient-to-br from-red-900/10 to-black/50 rounded-2xl border border-red-800/20">
                                <div class="text-4xl font-bold text-red-500 mb-2 count-up" data-target="8">0</div>
                                <div class="text-sm text-gray-400">Years Experience</div>
                            </div>
                        </div>
                        
                        <!-- Tech Stack Visualization -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-white mb-4">Our Tech Expertise</h3>
                            <div class="space-y-3">
                                <div>
                                    <div class="flex justify-between text-sm text-gray-400 mb-1">
                                        <span>Frontend Development</span>
                                        <span>95%</span>
                                    </div>
                                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-0 animate-progress" data-width="95%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm text-gray-400 mb-1">
                                        <span>Backend Architecture</span>
                                        <span>92%</span>
                                    </div>
                                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-0 animate-progress" data-width="92%" style="animation-delay: 0.2s;"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm text-gray-400 mb-1">
                                        <span>Cloud & DevOps</span>
                                        <span>88%</span>
                                    </div>
                                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-0 animate-progress" data-width="88%" style="animation-delay: 0.4s;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-6 -right-6 w-20 h-20 rounded-2xl bg-gradient-to-br from-red-700/20 to-transparent border border-red-800/30 animate-float"></div>
                    <div class="absolute -bottom-6 -left-6 w-16 h-16 rounded-2xl bg-gradient-to-br from-red-900/20 to-transparent border border-red-800/30 animate-float" style="animation-delay: 0.5s;"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-red-800/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-gradient-to-b from-red-600 to-transparent rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section id="story" class="relative py-32 overflow-hidden bg-black">
    <div class="absolute inset-0 bg-grid-pattern"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-slide-up">
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-red-900/20 to-black border border-red-800/30 mb-6">
                <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                <span class="text-sm font-semibold text-red-400">OUR JOURNEY</span>
            </div>
            
            <h2 class="text-4xl md:text-6xl font-black mb-6">
                <span class="text-white">Our</span>
                <span class="text-gradient"> Story</span>
            </h2>
            
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                From a small startup to a leading digital solutions provider, our journey has been marked by innovation, dedication, and relentless pursuit of excellence.
            </p>
        </div>
        
        <!-- Interactive Timeline -->
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-transparent via-red-600/50 to-transparent transform -translate-x-1/2"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-32">
                <!-- 2016 -->
                <div class="relative animate-slide-up" style="animation-delay: 0.2s;">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <div class="text-right lg:pr-16 mb-8 lg:mb-0">
                            <div class="inline-flex items-center gap-3 mb-4">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center border-2 border-red-600 animate-pulse-glow">
                                    <span class="text-2xl font-black text-white">2016</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-white">The Beginning</h3>
                                    <p class="text-red-500 font-semibold">Founding Year</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-400">
                                Eden Spell was founded with a vision to revolutionize digital solutions. Started as a small team of passionate developers working from a garage.
                            </p>
                            
                            <div class="mt-6 flex flex-wrap gap-2 justify-end">
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">Startup</span>
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">First Client</span>
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">MVP Launch</span>
                            </div>
                        </div>
                        
                        <div class="lg:pl-16">
                            <div class="bg-gradient-to-br from-gray-900/50 to-black/80 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm">
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-red-900/30 flex items-center justify-center">
                                            <i class="fas fa-rocket text-red-500"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-white">First Major Project</h4>
                                            <p class="text-sm text-gray-400">E-commerce platform for retail client</p>
                                        </div>
                                    </div>
                                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-16"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 2018 -->
                <div class="relative animate-slide-up" style="animation-delay: 0.4s;">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <div class="lg:order-2 text-left lg:pl-16 mb-8 lg:mb-0">
                            <div class="inline-flex items-center gap-3 mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-white">Growth Phase</h3>
                                    <p class="text-red-500 font-semibold">Expansion Year</p>
                                </div>
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center border-2 border-red-600 animate-pulse-glow">
                                    <span class="text-2xl font-black text-white">2018</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-400">
                                Expanded team to 20+ members. Started serving enterprise clients. Opened our first office in downtown.
                            </p>
                            
                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">Team Growth</span>
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">Enterprise Clients</span>
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">Office Expansion</span>
                            </div>
                        </div>
                        
                        <div class="lg:order-1 lg:pr-16">
                            <div class="bg-gradient-to-br from-gray-900/50 to-black/80 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm">
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-red-900/30 flex items-center justify-center">
                                            <i class="fas fa-chart-line text-red-500"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-white">Revenue Growth</h4>
                                            <p class="text-sm text-gray-400">300% year-over-year growth</p>
                                        </div>
                                    </div>
                                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-3/4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 2021 -->
                <div class="relative animate-slide-up" style="animation-delay: 0.6s;">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                        <div class="text-right lg:pr-16 mb-8 lg:mb-0">
                            <div class="inline-flex items-center gap-3 mb-4">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center border-2 border-red-600 animate-pulse-glow">
                                    <span class="text-2xl font-black text-white">2021</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-white">Digital Transformation</h3>
                                    <p class="text-red-500 font-semibold">Pandemic Adaptation</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-400">
                                Successfully transitioned to remote work. Launched AI/ML division. Expanded to international markets.
                            </p>
                            
                            <div class="mt-6 flex flex-wrap gap-2 justify-end">
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">Remote Work</span>
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">AI/ML Division</span>
                                <span class="px-3 py-1 bg-red-900/20 text-red-400 rounded-full text-xs">Global Expansion</span>
                            </div>
                        </div>
                        
                        <div class="lg:pl-16">
                            <div class="bg-gradient-to-br from-gray-900/50 to-black/80 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm">
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-red-900/30 flex items-center justify-center">
                                            <i class="fas fa-globe text-red-500"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-white">International Reach</h4>
                                            <p class="text-sm text-gray-400">Serving clients in 15+ countries</p>
                                        </div>
                                    </div>
                                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="relative py-32 bg-gradient-to-b from-black to-gray-900 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 50%, rgba(220, 38, 38, 0.2) 0%, transparent 50%);"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 80% 20%, rgba(220, 38, 38, 0.2) 0%, transparent 50%);"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-slide-up">
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-red-900/20 to-black border border-red-800/30 mb-6">
                <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                <span class="text-sm font-semibold text-red-400">OUR PHILOSOPHY</span>
            </div>
            
            <h2 class="text-4xl md:text-6xl font-black mb-6">
                <span class="text-white">Core</span>
                <span class="text-gradient"> Values</span>
            </h2>
            
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                The principles that guide every decision we make and every solution we build
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Innovation -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.2s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fas fa-lightbulb text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-red-500 transition-colors">Innovation</h3>
                    <p class="text-gray-400 leading-relaxed">
                        We constantly push boundaries and explore new technologies to deliver cutting-edge solutions that give our clients a competitive edge.
                    </p>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>
            </div>
            
            <!-- Excellence -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.3s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fas fa-trophy text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-red-500 transition-colors">Excellence</h3>
                    <p class="text-gray-400 leading-relaxed">
                        We believe in delivering nothing but the best. Every line of code, every design element, and every interaction is crafted with precision.
                    </p>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>
            </div>
            
            <!-- Collaboration -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.4s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-red-500 transition-colors">Collaboration</h3>
                    <p class="text-gray-400 leading-relaxed">
                        We work closely with our clients as partners, ensuring their vision is fully realized and their goals are achieved through transparent communication.
                    </p>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>
            </div>
            
            <!-- Integrity -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.5s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl p-8 border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fas fa-shield-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-red-500 transition-colors">Integrity</h3>
                    <p class="text-gray-400 leading-relaxed">
                        We maintain the highest ethical standards in everything we do, building trust through transparency, honesty, and reliability.
                    </p>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="relative py-32 bg-black overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-900/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-900/5 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 animate-slide-up">
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-red-900/20 to-black border border-red-800/30 mb-6">
                <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                <span class="text-sm font-semibold text-red-400">MEET THE TEAM</span>
            </div>
            
            <h2 class="text-4xl md:text-6xl font-black mb-6">
                <span class="text-white">Our</span>
                <span class="text-gradient"> Experts</span>
            </h2>
            
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                A diverse team of passionate professionals dedicated to transforming ideas into exceptional digital solutions
            </p>
        </div>
        
        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Team Member 1 -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.2s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl overflow-hidden border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="h-64 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-900/20 to-black"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Alex Morgan</h3>
                            <p class="text-red-500">Chief Technology Officer</p>
                        </div>
                        <!-- Team Member Photo Placeholder -->
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-full bg-gradient-to-br from-red-700 to-red-900 opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-400 mb-6">
                            15+ years of experience in software architecture and enterprise solutions. Leads our technical strategy and innovation initiatives.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-red-400"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <i class="fab fa-twitter text-red-400"></i>
                                </a>
                            </div>
                            <span class="text-sm text-gray-500">Specializes in: Cloud, AI, Architecture</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.3s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl overflow-hidden border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="h-64 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-900/20 to-black"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Sarah Chen</h3>
                            <p class="text-red-500">Head of Product Design</p>
                        </div>
                        <!-- Team Member Photo Placeholder -->
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-full bg-gradient-to-br from-red-700 to-red-900 opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-400 mb-6">
                            Expert in UX/UI design with a focus on human-centered design principles. Creates intuitive and beautiful digital experiences.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-red-400"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <i class="fab fa-dribbble text-red-400"></i>
                                </a>
                            </div>
                            <span class="text-sm text-gray-500">Specializes in: UX, UI, Product Strategy</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="group relative animate-slide-up hover-lift" style="animation-delay: 0.4s;">
                <div class="bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 rounded-3xl overflow-hidden border border-red-800/30 backdrop-blur-sm h-full">
                    <div class="h-64 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-900/20 to-black"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white">Marcus Johnson</h3>
                            <p class="text-red-500">Lead DevOps Engineer</p>
                        </div>
                        <!-- Team Member Photo Placeholder -->
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-full bg-gradient-to-br from-red-700 to-red-900 opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-400 mb-6">
                            Infrastructure and automation expert. Builds scalable, reliable systems that handle millions of requests with 99.99% uptime.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-red-400"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center hover:bg-red-700 transition-colors">
                                    <i class="fab fa-github text-red-400"></i>
                                </a>
                            </div>
                            <span class="text-sm text-gray-500">Specializes in: AWS, Kubernetes, CI/CD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center animate-slide-up" style="animation-delay: 0.6s;">
            <div class="inline-block relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-red-600 to-red-800 rounded-3xl blur opacity-30 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative px-8 py-12 bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 backdrop-blur-sm rounded-3xl border border-gray-800/50">
                    <h3 class="text-3xl font-bold text-white mb-6">Join Our Team</h3>
                    <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                        We're always looking for talented individuals who are passionate about technology and innovation.
                    </p>
                    <a href="#contact" class="inline-flex items-center gap-4 px-10 py-5 bg-gradient-to-r from-red-700 to-red-900 text-white font-bold text-lg rounded-xl hover:from-red-800 hover:to-red-950 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-red-900/30">
                        <span>View Open Positions</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes slide-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slide-in-left {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slide-in-right {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(220, 38, 38, 0.3); }
        50% { box-shadow: 0 0 40px rgba(220, 38, 38, 0.6); }
    }
    
    @keyframes typing {
        from { width: 0; }
        to { width: 100%; }
    }
    
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
    
    /* Animation Classes */
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-slide-up {
        opacity: 0;
        animation: slide-up 0.8s ease-out forwards;
    }
    
    .animate-slide-left {
        opacity: 0;
        animation: slide-in-left 0.8s ease-out forwards;
    }
    
    .animate-slide-right {
        opacity: 0;
        animation: slide-in-right 0.8s ease-out forwards;
    }
    
    .animate-pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
    }
    
    /* Particle Background */
    .particles-container {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
    }
    
    .particle {
        position: absolute;
        background: rgba(220, 38, 38, 0.1);
        border-radius: 50%;
    }
    
    /* Custom Utility Classes */
    .text-gradient {
        background: linear-gradient(135deg, #dc2626 0%, #ef4444 50%, #f87171 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .bg-grid-pattern {
        background-image: 
            linear-gradient(to right, rgba(239, 68, 68, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(239, 68, 68, 0.05) 1px, transparent 1px);
        background-size: 50px 50px;
    }
    
    /* Hover Effects */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.2);
    }
    
    /* Typewriter Effect */
    .typewriter {
        overflow: hidden;
        white-space: nowrap;
        border-right: 2px solid #dc2626;
        animation: typing 3.5s steps(40, end), blink 0.75s step-end infinite;
    }
    
    /* 3D Card Effect */
    .card-3d {
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    
    .card-3d:hover .card-inner {
        transform: rotateY(10deg) rotateX(5deg);
    }
    
    .card-inner {
        transition: transform 0.5s ease;
    }
</style>

<script>
    // Initialize particles
    function initParticles() {
        const container = document.getElementById('particles');
        if (!container) return;
        
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            // Random properties
            const size = Math.random() * 4 + 1;
            const posX = Math.random() * 100;
            const posY = Math.random() * 100;
            const opacity = Math.random() * 0.3 + 0.1;
            const duration = Math.random() * 20 + 10;
            const delay = Math.random() * 5;
            
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${posX}%`;
            particle.style.top = `${posY}%`;
            particle.style.opacity = opacity;
            particle.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
            
            container.appendChild(particle);
        }
    }
    
    // Count up animation
    function initCountUp() {
        const elements = document.querySelectorAll('.count-up');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.getAttribute('data-target'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            clearInterval(timer);
                            element.textContent = target;
                        } else {
                            element.textContent = Math.floor(current);
                        }
                    }, 16);
                    
                    observer.unobserve(element);
                }
            });
        }, { threshold: 0.5 });
        
        elements.forEach(element => observer.observe(element));
    }
    
    // Progress bar animation
    function initProgressBars() {
        const bars = document.querySelectorAll('.animate-progress');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const width = bar.getAttribute('data-width');
                    setTimeout(() => {
                        bar.style.width = width;
                    }, bar.style.animationDelay ? parseFloat(bar.style.animationDelay) * 1000 : 0);
                    observer.unobserve(bar);
                }
            });
        }, { threshold: 0.5 });
        
        bars.forEach(bar => observer.observe(bar));
    }
    
    // Initialize animations on scroll
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.animate-slide-up, .animate-slide-left, .animate-slide-right');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        animatedElements.forEach(element => {
            element.style.opacity = '0';
            observer.observe(element);
        });
    }
    
    // Initialize everything when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initParticles();
        initCountUp();
        initProgressBars();
        initScrollAnimations();
        
        // Add typing effect to typewriter text
        const typewriter = document.querySelector('.typewriter');
        if (typewriter) {
            const text = typewriter.textContent;
            typewriter.textContent = '';
            typewriter.style.width = '0';
            
            setTimeout(() => {
                typewriter.textContent = text;
                typewriter.style.animation = 'typing 3.5s steps(40, end), blink 0.75s step-end infinite';
            }, 500);
        }
    });
    
    // Parallax effect on scroll
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.animate-float');
        
        parallaxElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
</script>