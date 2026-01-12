<section id="portfolio" class="relative py-20 lg:py-28 bg-gradient-to-b from-black via-gray-900 to-black overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/3 left-1/4 w-96 h-96 bg-red-900/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-red-900/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 lg:mb-20 animate-slide-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-red-900/30 to-black border border-red-800/50 mb-6">
                <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                <span class="text-sm font-semibold text-red-400 tracking-wide">SUCCESS STORIES</span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-gray-300 via-red-400 to-red-600">
                    Impactful
                </span>
                <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-red-500 to-red-400">
                    Portfolio
                </span>
            </h2>
            
            <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
                Discover how we've transformed businesses across industries with <span class="text-red-400 font-semibold">cutting-edge solutions</span> that drive real results and measurable ROI.
            </p>
            
            <!-- Portfolio Filter -->
            <div class="flex flex-wrap justify-center gap-3 mt-12 animate-slide-up" style="animation-delay: 0.2s;">
                <button class="portfolio-filter active px-5 py-2.5 rounded-lg bg-gradient-to-r from-red-700 to-red-900 text-white font-medium text-sm transition-all duration-300 hover:scale-105" data-filter="all">
                    All Projects
                </button>
                <button class="portfolio-filter px-5 py-2.5 rounded-lg bg-gray-900 text-gray-400 font-medium text-sm border border-gray-800 hover:border-red-700 hover:text-white transition-all duration-300 hover:scale-105" data-filter="fintech">
                    FinTech
                </button>
                <button class="portfolio-filter px-5 py-2.5 rounded-lg bg-gray-900 text-gray-400 font-medium text-sm border border-gray-800 hover:border-red-700 hover:text-white transition-all duration-300 hover:scale-105" data-filter="healthcare">
                    Healthcare
                </button>
                <button class="portfolio-filter px-5 py-2.5 rounded-lg bg-gray-900 text-gray-400 font-medium text-sm border border-gray-800 hover:border-red-700 hover:text-white transition-all duration-300 hover:scale-105" data-filter="ecommerce">
                    E-commerce
                </button>
                <button class="portfolio-filter px-5 py-2.5 rounded-lg bg-gray-900 text-gray-400 font-medium text-sm border border-gray-800 hover:border-red-700 hover:text-white transition-all duration-300 hover:scale-105" data-filter="enterprise">
                    Enterprise
                </button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="portfolio-grid grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 mb-12">
            <!-- Project 1: FinTech -->
            <div class="portfolio-item fintech group relative overflow-hidden bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 backdrop-blur-sm rounded-3xl border border-gray-800/50 hover:border-red-700 transition-all duration-500 animate-slide-up hover-lift" style="animation-delay: 0.3s;">
                <!-- Project Image with Overlay -->
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-900/30 via-black/70 to-red-900/20"></div>
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22 preserveAspectRatio=%22none%22><rect width=%22100%22 height=%22100%22 fill=%221a1a1a%22/><path d=%22M0,20 Q50,0 100,20 L100,80 Q50,100 0,80 Z%22 fill=%22dc2626%22 opacity=%220.1%22/></svg>')] opacity-30"></div>
                    
                    <!-- Animated Elements -->
                    <div class="absolute top-4 right-4">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="absolute -inset-2 bg-red-600/20 rounded-xl blur-lg group-hover:opacity-100 opacity-0 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Project Category -->
                    <div class="absolute bottom-4 left-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-black/70 backdrop-blur-sm border border-red-800/50">
                            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-xs font-semibold text-red-400 tracking-wide">FINTECH</span>
                        </div>
                    </div>
                    
                    <!-- Project Title -->
                    <div class="absolute bottom-4 right-4 text-right">
                        <h3 class="text-2xl font-bold text-white group-hover:text-red-300 transition-colors">Digital Banking Platform</h3>
                        <p class="text-sm text-gray-300">Enterprise Transformation</p>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-6 lg:p-8">
                    <!-- Project Description -->
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Complete digital banking transformation for a major financial institution, processing <span class="text-red-400 font-semibold">1M+ transactions daily</span> with 99.99% uptime and military-grade security.
                    </p>
                    
                    <!-- Tech Stack with Hover Effects -->
                    <div class="mb-8">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3 tracking-wider">TECHNOLOGY STACK</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-stack-tag">Java Spring Boot</span>
                            <span class="tech-stack-tag">React + TypeScript</span>
                            <span class="tech-stack-tag">PostgreSQL</span>
                            <span class="tech-stack-tag">Kubernetes</span>
                            <span class="tech-stack-tag">Apache Kafka</span>
                            <span class="tech-stack-tag">Redis</span>
                        </div>
                    </div>
                    
                    <!-- Results with Animated Progress -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">40%</div>
                            <div class="text-xs text-gray-400 tracking-wide">OPERATIONAL COST REDUCTION</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">300%</div>
                            <div class="text-xs text-gray-400 tracking-wide">PERFORMANCE IMPROVEMENT</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">99.99%</div>
                            <div class="text-xs text-gray-400 tracking-wide">SYSTEM UPTIME</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">6M</div>
                            <div class="text-xs text-gray-400 tracking-wide">USERS SERVED</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Completed in 6 months</span>
                        </div>
                        <a href="#" class="group/link inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gradient-to-r from-red-700 to-red-900 text-white font-medium hover:from-red-800 hover:to-red-950 transition-all duration-300 hover:scale-105">
                            <span>View Case Study</span>
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2: Healthcare -->
            <div class="portfolio-item healthcare group relative overflow-hidden bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 backdrop-blur-sm rounded-3xl border border-gray-800/50 hover:border-red-700 transition-all duration-500 animate-slide-up hover-lift" style="animation-delay: 0.4s;">
                <!-- Project Image with Overlay -->
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-900/20 via-black/70 to-red-900/30"></div>
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22 preserveAspectRatio=%22none%22><rect width=%22100%22 height=%22100%22 fill=%221a1a1a%22/><circle cx=%2250%22 cy=%2250%22 r=%2240%22 fill=%22dc2626%22 opacity=%220.1%22/></svg>')] opacity-30"></div>
                    
                    <!-- Animated Elements -->
                    <div class="absolute top-4 right-4">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <div class="absolute -inset-2 bg-red-600/20 rounded-xl blur-lg group-hover:opacity-100 opacity-0 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Project Category -->
                    <div class="absolute bottom-4 left-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-black/70 backdrop-blur-sm border border-red-800/50">
                            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-xs font-semibold text-red-400 tracking-wide">HEALTHCARE</span>
                        </div>
                    </div>
                    
                    <!-- Project Title -->
                    <div class="absolute bottom-4 right-4 text-right">
                        <h3 class="text-2xl font-bold text-white group-hover:text-red-300 transition-colors">Telemedicine Platform</h3>
                        <p class="text-sm text-gray-300">Medical Technology</p>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-6 lg:p-8">
                    <!-- Project Description -->
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        HIPAA-compliant telemedicine solution serving <span class="text-red-400 font-semibold">500+ healthcare facilities</span> with real-time video consultations, EHR integration, and AI-powered diagnostics.
                    </p>
                    
                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3 tracking-wider">TECHNOLOGY STACK</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-stack-tag">Python Django</span>
                            <span class="tech-stack-tag">Vue.js + TypeScript</span>
                            <span class="tech-stack-tag">WebRTC</span>
                            <span class="tech-stack-tag">AWS EC2</span>
                            <span class="tech-stack-tag">PostgreSQL</span>
                            <span class="tech-stack-tag">Docker</span>
                        </div>
                    </div>
                    
                    <!-- Results -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">60%</div>
                            <div class="text-xs text-gray-400 tracking-wide">PATIENT ACCESS IMPROVED</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">99.5%</div>
                            <div class="text-xs text-gray-400 tracking-wide">PLATFORM UPTIME</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">2.5M</div>
                            <div class="text-xs text-gray-400 tracking-wide">CONSULTATIONS MONTHLY</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">45%</div>
                            <div class="text-xs text-gray-400 tracking-wide">OPERATIONAL EFFICIENCY</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Completed in 8 months</span>
                        </div>
                        <a href="#" class="group/link inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gradient-to-r from-red-700 to-red-900 text-white font-medium hover:from-red-800 hover:to-red-950 transition-all duration-300 hover:scale-105">
                            <span>View Case Study</span>
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3: E-commerce -->
            <div class="portfolio-item ecommerce group relative overflow-hidden bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 backdrop-blur-sm rounded-3xl border border-gray-800/50 hover:border-red-700 transition-all duration-500 animate-slide-up hover-lift" style="animation-delay: 0.5s;">
                <!-- Project Image with Overlay -->
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-900/25 via-black/70 to-red-900/15"></div>
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22 preserveAspectRatio=%22none%22><rect width=%22100%22 height=%22100%22 fill=%221a1a1a%22/><path d=%22M20,20 L80,20 L90,50 L80,80 L20,80 L10,50 Z%22 fill=%22dc2626%22 opacity=%220.1%22/></svg>')] opacity-30"></div>
                    
                    <!-- Animated Elements -->
                    <div class="absolute top-4 right-4">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                            <div class="absolute -inset-2 bg-red-600/20 rounded-xl blur-lg group-hover:opacity-100 opacity-0 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Project Category -->
                    <div class="absolute bottom-4 left-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-black/70 backdrop-blur-sm border border-red-800/50">
                            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-xs font-semibold text-red-400 tracking-wide">E-COMMERCE</span>
                        </div>
                    </div>
                    
                    <!-- Project Title -->
                    <div class="absolute bottom-4 right-4 text-right">
                        <h3 class="text-2xl font-bold text-white group-hover:text-red-300 transition-colors">Enterprise Marketplace</h3>
                        <p class="text-sm text-gray-300">B2B Platform</p>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-6 lg:p-8">
                    <!-- Project Description -->
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Scalable B2B marketplace platform processing <span class="text-red-400 font-semibold">$50M+ monthly transactions</span> with real-time inventory management and AI-powered recommendations.
                    </p>
                    
                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3 tracking-wider">TECHNOLOGY STACK</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-stack-tag">Node.js + Express</span>
                            <span class="tech-stack-tag">React + Next.js</span>
                            <span class="tech-stack-tag">MongoDB</span>
                            <span class="tech-stack-tag">Redis</span>
                            <span class="tech-stack-tag">Elasticsearch</span>
                            <span class="tech-stack-tag">Docker Swarm</span>
                        </div>
                    </div>
                    
                    <!-- Results -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">200%</div>
                            <div class="text-xs text-gray-400 tracking-wide">REVENUE GROWTH</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">5M</div>
                            <div class="text-xs text-gray-400 tracking-wide">MONTHLY VISITORS</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">99.9%</div>
                            <div class="text-xs text-gray-400 tracking-wide">UPTIME</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">0.8s</div>
                            <div class="text-xs text-gray-400 tracking-wide">AVG LOAD TIME</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Completed in 9 months</span>
                        </div>
                        <a href="#" class="group/link inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gradient-to-r from-red-700 to-red-900 text-white font-medium hover:from-red-800 hover:to-red-950 transition-all duration-300 hover:scale-105">
                            <span>View Case Study</span>
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4: Enterprise -->
            <div class="portfolio-item enterprise group relative overflow-hidden bg-gradient-to-br from-gray-900/50 via-black/80 to-gray-900/50 backdrop-blur-sm rounded-3xl border border-gray-800/50 hover:border-red-700 transition-all duration-500 animate-slide-up hover-lift" style="animation-delay: 0.6s;">
                <!-- Project Image with Overlay -->
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-900/15 via-black/70 to-red-900/25"></div>
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22 preserveAspectRatio=%22none%22><rect width=%22100%22 height=%22100%22 fill=%221a1a1a%22/><polygon points=%2250,10 90,30 90,70 50,90 10,70 10,30%22 fill=%22dc2626%22 opacity=%220.1%22/></svg>')] opacity-30"></div>
                    
                    <!-- Animated Elements -->
                    <div class="absolute top-4 right-4">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-700 to-red-900 flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="absolute -inset-2 bg-red-600/20 rounded-xl blur-lg group-hover:opacity-100 opacity-0 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Project Category -->
                    <div class="absolute bottom-4 left-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-black/70 backdrop-blur-sm border border-red-800/50">
                            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-xs font-semibold text-red-400 tracking-wide">ENTERPRISE</span>
                        </div>
                    </div>
                    
                    <!-- Project Title -->
                    <div class="absolute bottom-4 right-4 text-right">
                        <h3 class="text-2xl font-bold text-white group-hover:text-red-300 transition-colors">CRM System</h3>
                        <p class="text-sm text-gray-300">Sales Automation</p>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="p-6 lg:p-8">
                    <!-- Project Description -->
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Enterprise-grade CRM system with AI-powered sales forecasting and automation, serving <span class="text-red-400 font-semibold">10,000+ sales professionals</span> globally.
                    </p>
                    
                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3 tracking-wider">TECHNOLOGY STACK</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-stack-tag">.NET Core</span>
                            <span class="tech-stack-tag">Angular</span>
                            <span class="tech-stack-tag">SQL Server</span>
                            <span class="tech-stack-tag">Azure</span>
                            <span class="tech-stack-tag">Machine Learning</span>
                            <span class="tech-stack-tag">Power BI</span>
                        </div>
                    </div>
                    
                    <!-- Results -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">35%</div>
                            <div class="text-xs text-gray-400 tracking-wide">SALES INCREASE</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">50%</div>
                            <div class="text-xs text-gray-400 tracking-wide">TIME SAVED</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">95%</div>
                            <div class="text-xs text-gray-400 tracking-wide">ACCURACY RATE</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                        <div class="relative bg-gradient-to-br from-gray-900/80 to-black/80 rounded-xl p-4 group/stat hover:-translate-y-1 transition-transform duration-300">
                            <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600 mb-2">24/7</div>
                            <div class="text-xs text-gray-400 tracking-wide">SUPPORT</div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-600 to-transparent transform scale-x-0 group-hover/stat:scale-x-100 transition-transform duration-500 origin-left"></div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Completed in 7 months</span>
                        </div>
                        <a href="#" class="group/link inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gradient-to-r from-red-700 to-red-900 text-white font-medium hover:from-red-800 hover:to-red-950 transition-all duration-300 hover:scale-105">
                            <span>View Case Study</span>
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Client Logos -->
        <div class="mt-16 pt-12 border-t border-gray-800/50 animate-slide-up" style="animation-delay: 0.7s;">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold text-white mb-3">Trusted by Industry Leaders</h3>
                <p class="text-gray-400">We partner with forward-thinking organizations to drive digital innovation</p>
            </div>
            
            <!-- Animated Logo Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="group relative h-20 bg-gradient-to-br from-gray-900/50 to-black/80 backdrop-blur-sm rounded-2xl border border-gray-800/50 flex items-center justify-center hover:border-red-700 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600 group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        FINCORP
                    </div>
                    <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-red-600 to-transparent group-hover:w-16 transition-all duration-300"></div>
                </div>
                <div class="group relative h-20 bg-gradient-to-br from-gray-900/50 to-black/80 backdrop-blur-sm rounded-2xl border border-gray-800/50 flex items-center justify-center hover:border-red-700 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600 group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        MEDTECH
                    </div>
                    <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-red-600 to-transparent group-hover:w-16 transition-all duration-300"></div>
                </div>
                <div class="group relative h-20 bg-gradient-to-br from-gray-900/50 to-black/80 backdrop-blur-sm rounded-2xl border border-gray-800/50 flex items-center justify-center hover:border-red-700 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600 group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        TECHNO
                    </div>
                    <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-red-600 to-transparent group-hover:w-16 transition-all duration-300"></div>
                </div>
                <div class="group relative h-20 bg-gradient-to-br from-gray-900/50 to-black/80 backdrop-blur-sm rounded-2xl border border-gray-800/50 flex items-center justify-center hover:border-red-700 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600 group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        RETAILX
                    </div>
                    <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-red-600 to-transparent group-hover:w-16 transition-all duration-300"></div>
                </div>
                <div class="group relative h-20 bg-gradient-to-br from-gray-900/50 to-black/80 backdrop-blur-sm rounded-2xl border border-gray-800/50 flex items-center justify-center hover:border-red-700 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600 group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        EDUMAX
                    </div>
                    <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-red-600 to-transparent group-hover:w-16 transition-all duration-300"></div>
                </div>
                <div class="group relative h-20 bg-gradient-to-br from-gray-900/50 to-black/80 backdrop-blur-sm rounded-2xl border border-gray-800/50 flex items-center justify-center hover:border-red-700 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600 group-hover:from-red-400 group-hover:to-red-600 transition-all duration-300">
                        MANUFACT
                    </div>
                    <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-red-600 to-transparent group-hover:w-16 transition-all duration-300"></div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 text-center animate-slide-up" style="animation-delay: 0.8s;">
            <div class="inline-block relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-red-600 to-red-800 rounded-2xl blur opacity-30 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative px-8 py-8 bg-gradient-to-br from-gray-900 via-black to-gray-900 rounded-2xl border border-gray-800/50">
                    <h3 class="text-2xl font-bold text-white mb-4">Have a Project in Mind?</h3>
                    <p class="text-gray-400 mb-6 max-w-2xl mx-auto">
                        Let's discuss how we can transform your vision into a successful digital solution.
                    </p>
                    <a href="#contact" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-red-600 to-red-800 text-white font-semibold rounded-xl hover:from-red-700 hover:to-red-900 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-red-900/30">
                        <span>Start Your Project</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animations */
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
    
    @keyframes pulse {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.2; }
    }
    
    .animate-slide-up {
        opacity: 0;
        animation: slide-up 0.8s ease-out forwards;
    }
    
    .animate-pulse {
        animation: pulse 4s ease-in-out infinite;
    }
    
    /* Tech Stack Tags */
    .tech-stack-tag {
        @apply px-3 py-1.5 text-xs font-mono bg-gradient-to-r from-gray-900 to-black text-gray-400 rounded-lg border border-gray-800 hover:border-red-700 hover:text-red-400 transition-all duration-300 cursor-default hover:scale-105;
    }
    
    /* Portfolio Filter */
    .portfolio-filter.active {
        @apply bg-gradient-to-r from-red-700 to-red-900 text-white border-red-700 shadow-lg shadow-red-900/30;
    }
    
    /* Card Hover Effects */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(239, 68, 68, 0.15);
    }
    
    /* Portfolio Items */
    .portfolio-item {
        display: block;
        opacity: 1;
        transform: scale(1);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .portfolio-item.hidden {
        display: none;
        opacity: 0;
        transform: scale(0.9);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Portfolio Filter Functionality
        const filters = document.querySelectorAll('.portfolio-filter');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        filters.forEach(filter => {
            filter.addEventListener('click', function() {
                // Update active filter
                filters.forEach(f => f.classList.remove('active'));
                filters.forEach(f => {
                    f.className = f.className.replace('from-red-700 to-red-900', 'bg-gray-900');
                    f.classList.add('border', 'border-gray-800', 'text-gray-400');
                });
                
                this.classList.add('active');
                this.classList.remove('bg-gray-900', 'border-gray-800', 'text-gray-400');
                this.classList.add('from-red-700', 'to-red-900', 'text-white');
                
                // Filter items
                const filterValue = this.dataset.filter;
                
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.classList.remove('hidden');
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.9)';
                        setTimeout(() => {
                            item.classList.add('hidden');
                        }, 300);
                    }
                });
            });
        });
        
        // Animate stats on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const stats = entry.target.querySelectorAll('.group/stat');
                    stats.forEach((stat, index) => {
                        setTimeout(() => {
                            stat.classList.add('animate-stat');
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);
        
        // Observe all portfolio items
        portfolioItems.forEach(item => {
            observer.observe(item);
        });
        
        // Tech stack tag hover animation
        const techTags = document.querySelectorAll('.tech-stack-tag');
        techTags.forEach(tag => {
            tag.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.05)';
                this.style.boxShadow = '0 4px 12px rgba(239, 68, 68, 0.2)';
            });
            
            tag.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = 'none';
            });
        });
        
        // Logo hover effect
        const logos = document.querySelectorAll('.group.relative.h-20');
        logos.forEach(logo => {
            logo.addEventListener('mouseenter', function() {
                const underline = this.querySelector('.absolute.-bottom-1');
                if (underline) {
                    underline.style.width = '4rem';
                }
            });
            
            logo.addEventListener('mouseleave', function() {
                const underline = this.querySelector('.absolute.-bottom-1');
                if (underline) {
                    underline.style.width = '0';
                }
            });
        });
    });
</script>