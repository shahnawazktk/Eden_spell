<!-- Welcome Banner with Close Button -->
<div class="mb-6" id="welcomeBanner">
    <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 border border-gray-800 rounded-2xl p-6 relative">
        <!-- Close Button -->
        <button id="closeWelcomeBanner" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors">
            <i class="fas fa-times text-xl"></i>
        </button>
        
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                @auth
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" 
                             alt="{{ Auth::user()->name }}"
                             class="w-12 h-12 rounded-full border-2 border-red-500">
                    @else
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                            <span class="text-lg font-bold text-white">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </span>
                        </div>
                    @endif
                @endauth
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2">
                        @auth
                            Welcome back, {{ Auth::user()->name }}! 👋
                        @else
                            Welcome, Guest! 👋
                        @endauth
                    </h2>
                    <p class="text-gray-400">
                        @auth
                            @if(Auth::user()->role === 'admin')
                                Admin Dashboard • {{ Auth::user()->email }}
                            @else
                                {{ Auth::user()->position ?? 'Member Dashboard' }} • {{ Auth::user()->email }}
                            @endif
                        @else
                            Please login to access all features
                        @endauth
                    </p>
                </div>
            </div>
            <div class="hidden lg:flex items-center space-x-4">
                <div class="text-right">
                    <p class="text-sm text-gray-400">Current Sprint</p>
                    <p class="text-lg font-semibold text-white">
                        Sprint {{ \Carbon\Carbon::now()->weekOfYear }} • 
                        Week {{ ceil(\Carbon\Carbon::now()->day / 7) }}
                    </p>
                </div>
                <div
                    class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">85%</span>
                </div>
            </div>
        </div>
        
        <!-- Additional User Info -->
        @auth
        <div class="mt-4 pt-4 border-t border-gray-800">
            <div class="flex items-center space-x-6">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar text-red-400"></i>
                    <span class="text-sm text-gray-300">
                        Last login: {{ Auth::user()->last_login_at ? \Carbon\Carbon::parse(Auth::user()->last_login_at)->diffForHumans() : 'First time' }}
                    </span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-user-tag text-blue-400"></i>
                    <span class="text-sm text-gray-300">
                        Role: 
                        <span class="px-2 py-1 bg-gray-800 rounded-full text-xs">
                            {{ ucfirst(Auth::user()->role ?? 'user') }}
                        </span>
                    </span>
                </div>
                @if(Auth::user()->department)
                <div class="flex items-center space-x-2">
                    <i class="fas fa-building text-green-400"></i>
                    <span class="text-sm text-gray-300">
                        {{ Auth::user()->department }}
                    </span>
                </div>
                @endif
            </div>
        </div>
        @endauth
    </div>
</div>
<style>
/* Add to your existing CSS */
.animate-fade-out {
    animation: fadeOut 0.5s ease forwards;
}

@keyframes fadeOut {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-10px);
    }
}

.animate-slide-in {
    animation: slideIn 0.3s ease;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const welcomeBanner = document.getElementById('welcomeBanner');
    const closeButton = document.getElementById('closeWelcomeBanner');
    
    // Check if user has already closed the banner
    const isBannerClosed = localStorage.getItem('welcomeBannerClosed');
    const currentUserId = '{{ Auth::id() ?? "guest" }}';
    const bannerKey = `welcomeBannerClosed_${currentUserId}`;
    
    // Check if banner was closed for this specific user
    if (localStorage.getItem(bannerKey) === 'true') {
        welcomeBanner.style.display = 'none';
    }
    
    // Close button click handler
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            // Add fade-out animation
            welcomeBanner.style.opacity = '1';
            welcomeBanner.style.transition = 'opacity 0.3s ease';
            
            setTimeout(() => {
                welcomeBanner.style.opacity = '0';
            }, 10);
            
            setTimeout(() => {
                welcomeBanner.style.display = 'none';
                // Save to localStorage for this user
                localStorage.setItem(bannerKey, 'true');
                
                // Show notification
                showNotification('Welcome banner minimized. It will reappear after 24 hours.', 'info');
            }, 300);
        });
    }
    
    // Auto-hide after 10 seconds (optional)
    setTimeout(() => {
        if (!localStorage.getItem(bannerKey)) {
            welcomeBanner.classList.add('animate-fade-out');
            setTimeout(() => {
                if (welcomeBanner.style.display !== 'none') {
                    welcomeBanner.style.display = 'none';
                    localStorage.setItem(bannerKey, 'true');
                }
            }, 500);
        }
    }, 10000);
    
    // Function to show notification
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 px-4 py-3 rounded-lg shadow-lg z-50 animate-slide-in ${
            type === 'success' ? 'bg-green-900 text-green-100' :
            type === 'error' ? 'bg-red-900 text-red-100' :
            type === 'warning' ? 'bg-yellow-900 text-yellow-100' :
            'bg-blue-900 text-blue-100'
        }`;
        notification.innerHTML = `
            <div class="flex items-center space-x-3">
                <i class="fas fa-info-circle"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.add('opacity-0', 'transition-opacity', 'duration-300');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }
    
    // Show banner again button (if needed elsewhere)
    window.showWelcomeBanner = function() {
        localStorage.removeItem(bannerKey);
        welcomeBanner.style.display = 'block';
        welcomeBanner.style.opacity = '0';
        
        setTimeout(() => {
            welcomeBanner.style.transition = 'opacity 0.3s ease';
            welcomeBanner.style.opacity = '1';
        }, 10);
    };
});
</script>
@endpush