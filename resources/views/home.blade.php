@extends('frontend.app')
@section('content')
<!-- Hero Section with Particle Background -->
@include('frontend.partial.herosec')

<!-- Services Section - Advanced -->
@include('frontend.partial.service')

<!-- Real Projects Showcase -->
@include('frontend.partial.project')

<!-- Career section-->
@include('frontend.partial.career')

<!-- About section -->
@include('frontend.partial.about')

<!-- Development Process -->
@include('frontend.partial.development')

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
                <div class="text-white font-semibold">Mid City Mall Near Rehmanabad Metro Station, RawalPindi</div>
                
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