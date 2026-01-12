<section class="relative min-h-screen overflow-hidden bg-black flex items-center">
    
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-red-900"></div>

    <!-- Animated Glow Orbs -->
    <div class="absolute w-[500px] h-[500px] bg-red-600/20 blur-[120px] rounded-full top-[-10%] left-[-10%] animate-pulse"></div>
    <div class="absolute w-[400px] h-[400px] bg-red-800/20 blur-[100px] rounded-full bottom-[-10%] right-[-10%] animate-pulse delay-300"></div>

    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:40px_40px]"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="space-y-8 text-center lg:text-left">

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 text-sm text-red-400 font-semibold animate-fade-in">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-ping"></span>
                    Enterprise Software Solutions
                </div>

                <!-- Heading -->
                <h1 class="text-4xl sm:text-5xl xl:text-7xl font-extrabold leading-tight text-white animate-slide-up">
                    We Build
                    <span class="block bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-red-600">
                        Scalable Digital Products
                    </span>
                </h1>

                <!-- Description -->
                <p class="text-gray-300 max-w-xl text-lg leading-relaxed animate-slide-up delay-100">
                    <span class="text-red-400 font-semibold">Eden Spell</span> delivers
                    enterprise-grade web & mobile solutions that accelerate growth,
                    improve performance, and scale with your business.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-slide-up delay-200">
                    <a href="#contact"
                       class="px-8 py-4 rounded-xl bg-gradient-to-r from-red-600 to-red-800 text-white font-semibold text-lg shadow-lg hover:scale-105 transition-all duration-300">
                        Start a Project
                    </a>
                    <a href="#portfolio"
                       class="px-8 py-4 rounded-xl border border-red-600/50 text-white font-semibold text-lg hover:bg-red-600/10 transition-all duration-300">
                        View Work
                    </a>
                </div>

                <!-- Trust Stats -->
                <div class="flex flex-wrap gap-6 justify-center lg:justify-start pt-6 animate-slide-up delay-300">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-red-500">100+</h3>
                        <p class="text-sm text-gray-400">Projects</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-red-500">99.9%</h3>
                        <p class="text-sm text-gray-400">Uptime</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-red-500">24/7</h3>
                        <p class="text-sm text-gray-400">Support</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT CONTENT -->
            <div class="relative hidden lg:block animate-fade-in delay-300">

                <!-- Glass Card -->
                <div class="relative backdrop-blur-xl bg-white/5 border border-white/10 rounded-3xl p-8 shadow-2xl">

                    <h4 class="text-white font-semibold mb-6">Our Technology Stack</h4>

                    <div class="space-y-5">
                        <div>
                            <p class="text-sm text-red-400 mb-1">Backend</p>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full w-[80%] bg-gradient-to-r from-red-500 to-red-700 animate-progress"></div>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm text-red-400 mb-1">Frontend</p>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full w-[90%] bg-gradient-to-r from-red-500 to-red-700 animate-progress delay-100"></div>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm text-red-400 mb-1">Mobile</p>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full w-[70%] bg-gradient-to-r from-red-500 to-red-700 animate-progress delay-200"></div>
                            </div>
                        </div>

                        <div>
                            <p class="text-sm text-red-400 mb-1">DevOps</p>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full w-[75%] bg-gradient-to-r from-red-500 to-red-700 animate-progress delay-300"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Shapes -->
                <div class="absolute -top-6 -right-6 w-16 h-16 bg-red-600 rounded-2xl rotate-12 animate-float"></div>
                <div class="absolute -bottom-6 -left-6 w-12 h-12 bg-red-800 rounded-xl -rotate-12 animate-float delay-200"></div>

            </div>
        </div>
    </div>
</section>
<style>
    @keyframes slide-up {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-slide-up {
  animation: slide-up 0.8s ease forwards;
}

@keyframes fade-in {
  from { opacity: 0; }
  to { opacity: 1; }
}
.animate-fade-in {
  animation: fade-in 1s ease forwards;
}

@keyframes progress {
  from { width: 0; }
}
.animate-progress {
  animation: progress 1.5s ease forwards;
}

@keyframes float {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.animate-float {
  animation: float 4s ease-in-out infinite;
}

</style>