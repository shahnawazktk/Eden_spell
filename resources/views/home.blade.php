@extends('frontend.app')
@section('content')
<!-- Hero Section with Particle Background -->
<section class="relative overflow-hidden bg-black py-12 sm:py-16 lg:py-20 xl:py-24">
    <!-- Particle Background -->
    <div id="particles-js" class="absolute inset-0 opacity-20"></div>
    
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-red-900 opacity-90"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left text-white">
                <!-- Animated Badge -->
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-red-600 to-red-800 text-white text-sm font-semibold mb-6 animate-pulse">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                    </svg>
                    Enterprise-Grade Software Solutions
                </div>
                
                <!-- Main Heading with Typing Effect -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-red-300 to-red-500">
                        Transform Your
                    </span>
                    <br>
                    <span class="typewriter-text bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-red-700">
                        Digital Vision
                    </span>
                </h1>
                
                <p class="text-lg sm:text-xl text-gray-300 mb-8 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    At <span class="text-red-400 font-semibold">Eden Spell</span>, we architect cutting-edge software solutions that drive business growth, enhance user experiences, and deliver measurable ROI for enterprises worldwide.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-12 justify-center lg:justify-start">
                    <a href="#contact" class="group px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-red-600 to-red-800 rounded-lg hover:from-red-700 hover:to-red-900 transition-all duration-300 shadow-lg hover:shadow-xl hover-lift flex items-center justify-center gap-2">
                        <span>Start Your Project</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#portfolio" class="px-8 py-4 text-lg font-semibold text-white border-2 border-red-600 rounded-lg hover:bg-red-900/20 transition-all duration-300 text-center group">
                        <span class="flex items-center justify-center gap-2">
                            View Case Studies
                            <svg class="w-5 h-5 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </span>
                    </a>
                </div>
                
                <!-- Trust Badges -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 mb-8">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                        <span class="text-sm text-gray-400">24/7 Support</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></div>
                        <span class="text-sm text-gray-400">NDA Protected</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></div>
                        <span class="text-sm text-gray-400">ISO Certified</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Animated Tech Stack Visualization -->
            <div class="relative">
                <!-- Animated Tech Stack -->
                <div class="relative bg-gradient-to-b from-gray-900 to-black rounded-2xl p-6 border border-gray-800 shadow-2xl">
                    <!-- Terminal Header -->
                    <div class="flex items-center mb-6">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="ml-4 text-sm text-gray-400">tech-stack.yml</div>
                    </div>
                    
                    <!-- Tech Stack Visualization -->
                    <div class="space-y-6">
                        <!-- Backend Stack -->
                        <div class="group">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-red-400 font-mono text-sm">backend:</span>
                                <span class="text-xs text-gray-500">php |Laravel | JavaScript</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-3/4 animate-progress"></div>
                            </div>
                        </div>
                        
                        <!-- Frontend Stack -->
                        <div class="group">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-red-400 font-mono text-sm">frontend:</span>
                                <span class="text-xs text-gray-500">React | Vue | Angular</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-4/5 animate-progress animation-delay-100"></div>
                            </div>
                        </div>
                        
                        <!-- Mobile Stack -->
                        <div class="group">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-red-400 font-mono text-sm">mobile:</span>
                                <span class="text-xs text-gray-500">React Native | Flutter</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-2/3 animate-progress animation-delay-200"></div>
                            </div>
                        </div>
                        
                        <!-- DevOps Stack -->
                        <div class="group">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-red-400 font-mono text-sm">devops:</span>
                                <span class="text-xs text-gray-500">Docker | AWS | Kubernetes</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-red-600 to-red-800 rounded-full w-2/3 animate-progress animation-delay-300"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Live Stats -->
                    <div class="mt-8 pt-6 border-t border-gray-800">
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-red-500 mb-1">99.9%</div>
                                <div class="text-xs text-gray-500">Uptime</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-red-500 mb-1">&lt;100ms</div>
                                <div class="text-xs text-gray-500">Response Time</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-red-500 mb-1">100%</div>
                                <div class="text-xs text-gray-500">SLA Compliance</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute -top-4 -right-4 w-16 h-16 bg-gradient-to-br from-red-600 to-red-800 rounded-2xl rotate-12 animate-float hidden lg:block"></div>
                <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-gradient-to-br from-red-800 to-black rounded-xl -rotate-12 animate-float hidden lg:block" style="animation-delay: 0.2s;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section - Advanced -->
<section id="services" class="py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-white">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-red-700">
                    Enterprise Software Services
                </span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto">
                We deliver comprehensive software solutions that scale with your business, from concept to deployment and beyond.
            </p>
        </div>
        
        <!-- Services Grid with Tabs -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Service 1: Custom Development -->
            <div class="group relative bg-gradient-to-b from-gray-900 to-black rounded-2xl p-6 lg:p-8 border border-gray-800 hover:border-red-600 transition-all duration-300 hover-lift">
                <div class="absolute -top-3 -right-3">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-red-400 transition-colors">Custom Software Development</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Bespoke solutions tailored to your specific business requirements, built with scalable architecture and enterprise-grade security.
                </p>
                
                <!-- Tech Stack -->
                <div class="mb-6">
                    <h4 class="text-sm font-semibold text-gray-500 mb-2">TECH STACK</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">.NET Core</span>
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">Java Spring</span>
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">Python Django</span>
                    </div>
                </div>
                
                <!-- Feature List -->
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">Microservices Architecture</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">API-First Development</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">CI/CD Pipeline Setup</span>
                    </li>
                </ul>
                
                <a href="#" class="inline-flex items-center text-red-400 font-medium group-hover:text-red-300 transition-colors">
                    View Case Studies
                    <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
            
            <!-- Service 2: Mobile Solutions -->
            <div class="group relative bg-gradient-to-b from-gray-900 to-black rounded-2xl p-6 lg:p-8 border border-gray-800 hover:border-red-600 transition-all duration-300 hover-lift">
                <div class="absolute -top-3 -right-3">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-red-400 transition-colors">Enterprise Mobile Solutions</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Cross-platform mobile applications with native performance, offline capabilities, and seamless backend integration.
                </p>
                
                <!-- Tech Stack -->
                <div class="mb-6">
                    <h4 class="text-sm font-semibold text-gray-500 mb-2">TECH STACK</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">React Native</span>
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">Flutter</span>
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">Swift/Kotlin</span>
                    </div>
                </div>
                
                <!-- Feature List -->
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">Offline-First Architecture</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">Push Notifications</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">Biometric Authentication</span>
                    </li>
                </ul>
                
                <a href="#" class="inline-flex items-center text-red-400 font-medium group-hover:text-red-300 transition-colors">
                    View Case Studies
                    <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
            
            <!-- Service 3: DevOps & Cloud -->
            <div class="group relative bg-gradient-to-b from-gray-900 to-black rounded-2xl p-6 lg:p-8 border border-gray-800 hover:border-red-600 transition-all duration-300 hover-lift">
                <div class="absolute -top-3 -right-3">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-white group-hover:text-red-400 transition-colors">DevOps & Cloud Infrastructure</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Scalable cloud architecture, containerization, and automated deployment pipelines for maximum reliability.
                </p>
                
                <!-- Tech Stack -->
                <div class="mb-6">
                    <h4 class="text-sm font-semibold text-gray-500 mb-2">TECH STACK</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">AWS/Azure</span>
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">Docker</span>
                        <span class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-xs border border-red-800">Kubernetes</span>
                    </div>
                </div>
                
                <!-- Feature List -->
                <ul class="space-y-2 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">Auto-scaling Infrastructure</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">Disaster Recovery</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-400">24/7 Monitoring</span>
                    </li>
                </ul>
                
                <a href="#" class="inline-flex items-center text-red-400 font-medium group-hover:text-red-300 transition-colors">
                    View Case Studies
                    <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Real Projects Showcase -->
<section id="portfolio" class="py-16 sm:py-20 lg:py-24 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-white">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-red-700">
                    Real-World Projects
                </span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto">
                See how we've transformed businesses across industries with our technical expertise
            </p>
        </div>
        
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Project 1: FinTech -->
            <div class="group relative bg-gradient-to-b from-gray-900 to-black rounded-2xl overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-500 hover-lift">
                <!-- Project Image -->
                <div class="h-48 bg-gradient-to-r from-red-900/20 to-black relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><rect width="100" height="100" fill="%231a1a1a"/><path d="M0,50 L100,50 M50,0 L50,100" stroke="%23404040" stroke-width="1"/></svg>')] opacity-30"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-4xl font-bold text-red-500/20">FINTECH</div>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <div class="text-xs text-red-500 font-semibold uppercase tracking-wider mb-1">BANKING & FINANCE</div>
                            <h3 class="text-xl lg:text-2xl font-bold text-white">Digital Banking Platform</h3>
                        </div>
                        <div class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-sm">
                            6 Months
                        </div>
                    </div>
                    
                    <p class="text-gray-400 mb-6">
                        Complete digital transformation for a major bank, processing 1M+ transactions daily with 99.99% uptime.
                    </p>
                    
                    <!-- Tech Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">Java Spring</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">React</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">PostgreSQL</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">Kubernetes</span>
                    </div>
                    
                    <!-- Results -->
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-900/50 rounded-lg p-3">
                            <div class="text-2xl font-bold text-red-500">40%</div>
                            <div class="text-xs text-gray-400">Cost Reduction</div>
                        </div>
                        <div class="bg-gray-900/50 rounded-lg p-3">
                            <div class="text-2xl font-bold text-red-500">300%</div>
                            <div class="text-xs text-gray-400">Performance Gain</div>
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-red-400 font-medium hover:text-red-300 transition-colors">
                        View Case Study
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Project 2: Healthcare -->
            <div class="group relative bg-gradient-to-b from-gray-900 to-black rounded-2xl overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-500 hover-lift">
                <!-- Project Image -->
                <div class="h-48 bg-gradient-to-r from-black to-red-900/20 relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><rect width="100" height="100" fill="%231a1a1a"/><circle cx="50" cy="50" r="40" stroke="%23404040" stroke-width="1" fill="none"/></svg>')] opacity-30"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-4xl font-bold text-red-500/20">HEALTHCARE</div>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <div class="text-xs text-red-500 font-semibold uppercase tracking-wider mb-1">MEDICAL TECHNOLOGY</div>
                            <h3 class="text-xl lg:text-2xl font-bold text-white">Telemedicine Platform</h3>
                        </div>
                        <div class="px-3 py-1 bg-red-900/30 text-red-400 rounded-full text-sm">
                            8 Months
                        </div>
                    </div>
                    
                    <p class="text-gray-400 mb-6">
                        HIPAA-compliant telemedicine solution serving 500+ clinics with video consultations and EHR integration.
                    </p>
                    
                    <!-- Tech Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">Python Django</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">Vue.js</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">WebRTC</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 rounded-full text-xs">AWS</span>
                    </div>
                    
                    <!-- Results -->
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-900/50 rounded-lg p-3">
                            <div class="text-2xl font-bold text-red-500">60%</div>
                            <div class="text-xs text-gray-400">Access Improvement</div>
                        </div>
                        <div class="bg-gray-900/50 rounded-lg p-3">
                            <div class="text-2xl font-bold text-red-500">99.5%</div>
                            <div class="text-xs text-gray-400">Uptime</div>
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-red-400 font-medium hover:text-red-300 transition-colors">
                        View Case Study
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Client Logos -->
        <div class="mt-16 pt-8 border-t border-gray-800">
            <h3 class="text-center text-lg font-semibold text-gray-400 mb-8">Trusted by Industry Leaders</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-8">
                <div class="h-12 bg-gray-900/50 rounded-lg flex items-center justify-center text-gray-500 text-sm font-semibold">FINANCE CORP</div>
                <div class="h-12 bg-gray-900/50 rounded-lg flex items-center justify-center text-gray-500 text-sm font-semibold">HEALTH SYSTEMS</div>
                <div class="h-12 bg-gray-900/50 rounded-lg flex items-center justify-center text-gray-500 text-sm font-semibold">TECH GIANT</div>
                <div class="h-12 bg-gray-900/50 rounded-lg flex items-center justify-center text-gray-500 text-sm font-semibold">RETAIL CHAIN</div>
                <div class="h-12 bg-gray-900/50 rounded-lg flex items-center justify-center text-gray-500 text-sm font-semibold">EDUCATION</div>
                <div class="h-12 bg-gray-900/50 rounded-lg flex items-center justify-center text-gray-500 text-sm font-semibold">MANUFACTURING</div>
            </div>
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-white">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-red-700">
                    Our Development Methodology
                </span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto">
                A structured approach ensuring quality, transparency, and timely delivery
            </p>
        </div>
        
        <!-- Process Timeline -->
        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-0 lg:left-1/2 transform lg:-translate-x-1/2 h-full w-1 bg-gradient-to-b from-red-600 to-red-800 hidden lg:block"></div>
            
            <!-- Process Steps -->
            <div class="space-y-8 lg:space-y-12">
                <!-- Step 1 -->
                <div class="relative lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                    <div class="lg:text-right lg:pr-12 mb-6 lg:mb-0">
                        <div class="inline-flex items-center px-4 py-2 rounded-full bg-red-900/30 text-red-400 text-sm font-semibold mb-2">
                            Phase 01
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Discovery & Planning</h3>
                        <p class="text-gray-400">
                            Comprehensive requirements analysis, feasibility study, and project roadmap creation.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center text-white font-bold text-lg absolute left-1/2 transform -translate-x-1/2 lg:translate-x-0 lg:left-auto lg:right-0 lg:-translate-x-1/2 z-10">
                            1
                        </div>
                        <div class="bg-gradient-to-b from-gray-900 to-black rounded-2xl p-6 border border-gray-800 ml-0 lg:ml-12">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm text-gray-400">Business Requirements Document</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm text-gray-400">Technical Architecture Planning</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                    <div class="lg:col-start-2 lg:pl-12 mb-6 lg:mb-0 lg:order-2">
                        <div class="inline-flex items-center px-4 py-2 rounded-full bg-red-900/30 text-red-400 text-sm font-semibold mb-2">
                            Phase 02
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Design & Prototyping</h3>
                        <p class="text-gray-400">
                            UI/UX design, wireframing, and interactive prototypes for stakeholder approval.
                        </p>
                    </div>
                    <div class="relative lg:order-1">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center text-white font-bold text-lg absolute left-1/2 transform -translate-x-1/2 lg:translate-x-0 lg:left-0 lg:translate-x-1/2 z-10">
                            2
                        </div>
                        <div class="bg-gradient-to-b from-gray-900 to-black rounded-2xl p-6 border border-gray-800 mr-0 lg:mr-12">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm text-gray-400">Interactive Wireframes</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm text-gray-400">Design System Creation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section - Contact -->
<section id="contact" class="py-16 sm:py-20 lg:py-24 bg-black relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-black via-red-900/20 to-black"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><defs><pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse"><path d="M 20 0 L 0 0 0 20" fill="none" stroke="%23404040" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>')] opacity-10"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-b from-gray-900 to-black rounded-3xl p-8 sm:p-12 lg:p-16 border border-gray-800 shadow-2xl">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-white">
                    Ready to Start Your Project?
                </h2>
                <p class="text-lg sm:text-xl text-gray-400 max-w-2xl mx-auto">
                    Get a comprehensive project analysis and proposal within 48 hours
                </p>
            </div>
            
            <!-- Contact Form -->
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Your Name</label>
                        <input type="text" class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-colors" placeholder="Your Name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Company</label>
                        <input type="text" class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-colors" placeholder="Eden Spell">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Email Address</label>
                        <input type="email" class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-colors" placeholder="edenspell123@gmail.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Phone Number</label>
                        <input type="tel" class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-colors" placeholder="+1 (555) 000-0000">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Project Description</label>
                    <textarea rows="4" class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-colors" placeholder="Tell us about your project requirements, timeline, and budget..."></textarea>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="nda" class="w-4 h-4 text-red-600 bg-gray-900 border-gray-800 rounded focus:ring-red-600 focus:ring-2">
                    <label for="nda" class="ml-2 text-sm text-gray-400">
                        I require an NDA before sharing project details
                    </label>
                </div>
                
                <div class="text-center pt-4">
                    <button type="submit" class="group px-10 py-4 text-lg font-semibold text-white bg-gradient-to-r from-red-600 to-red-800 rounded-lg hover:from-red-700 hover:to-red-900 transition-all duration-300 shadow-lg hover:shadow-xl hover-lift inline-flex items-center gap-2">
                        <span>Request Proposal</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                    <p class="text-sm text-gray-500 mt-4">
                        We'll contact you within 24 hours to discuss your project
                    </p>
                </div>
            </form>
        </div>
        
        <!-- Quick Contact -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                <div class="w-12 h-12 rounded-lg bg-red-900/30 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div class="text-white font-semibold">+1 (555) 123-4567</div>
                <div class="text-sm text-gray-400">Mon-Fri, 8:30 AM-5 PM EST</div>
            </div>
            
            <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                <div class="w-12 h-12 rounded-lg bg-red-900/30 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="text-white font-semibold">contact@edenspell.dev</div>
                <div class="text-sm text-gray-400">Response within 2 hours</div>
            </div>
            
            <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                <div class="w-12 h-12 rounded-lg bg-red-900/30 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="text-white font-semibold">New York, NY</div>
                <div class="text-sm text-gray-400">Global Remote Teams</div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for Animations -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(12deg); }
        50% { transform: translateY(-10px) rotate(12deg); }
    }
    
    @keyframes progress {
        0% { width: 0%; }
        100% { width: 100%; }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    
    .animate-progress {
        animation: progress 2s ease-out forwards;
    }
    
    .animate-pulse {
        animation: pulse 2s ease-in-out infinite;
    }
    
    .animation-delay-100 {
        animation-delay: 0.1s;
    }
    
    .animation-delay-200 {
        animation-delay: 0.2s;
    }
    
    .animation-delay-300 {
        animation-delay: 0.3s;
    }
    
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.2);
    }
    
    .text-gradient {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    /* Typewriter effect */
    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
    }
    
    @keyframes blink {
        50% { border-color: transparent }
    }
    
    .typewriter-text {
        overflow: hidden;
        border-right: 2px solid #dc2626;
        white-space: nowrap;
        animation: typing 3.5s steps(40, end), blink 0.75s step-end infinite;
    }
</style>

<!-- JavaScript for Particles -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize particles.js
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                particles: {
                    number: { value: 80, density: { enable: true, value_area: 800 } },
                    color: { value: "#dc2626" },
                    shape: { type: "circle" },
                    opacity: { value: 0.3, random: true },
                    size: { value: 3, random: true },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#dc2626",
                        opacity: 0.2,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: "none",
                        random: true,
                        straight: false,
                        out_mode: "out",
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: { enable: true, mode: "repulse" },
                        onclick: { enable: true, mode: "push" }
                    }
                }
            });
        }
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endsection