<x-guest-layout>
    <style>
        body {
            background-color: #000000; /* Pure Black Background */
        }
        .eden-card {
            background: #111111; /* Dark Gray Card */
            border: 1px solid #7f1d1d; /* Dark Red Border */
            box-shadow: 0 0 25px rgba(153, 27, 27, 0.3);
            padding: 2rem;
            border-radius: 0.75rem;
        }
        .eden-input {
            background-color: #1a1a1a !important;
            border-color: #450a0a !important;
            color: #ffffff !important;
            border-radius: 0.375rem;
        }
        .eden-input:focus {
            border-color: #dc2626 !important;
            --tw-ring-color: #dc2626 !important;
            box-shadow: 0 0 5px rgba(220, 38, 38, 0.5);
        }
        .eden-text-red {
            color: #ef4444; /* Bright Red */
        }
        .eden-btn-red {
            background-color: #991b1b !important;
            color: white !important;
            font-weight: bold;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
        }
        .eden-btn-red:hover {
            background-color: #dc2626 !important;
            box-shadow: 0 0 15px rgba(220, 38, 38, 0.6);
        }
        .eden-checkbox {
            color: #991b1b !important;
            border-color: #450a0a !important;
            background-color: #1a1a1a !important;
        }
        .eden-checkbox:focus {
            --tw-ring-color: #dc2626 !important;
        }
    </style>

    <div class="eden-card">
        <div class="mb-8 text-center">
            <h2 class="text-4xl font-extrabold uppercase tracking-tighter eden-text-red" style="font-family: serif;">
                Eden Spell
            </h2>
            <p class="text-gray-500 text-xs tracking-widest uppercase mt-1">Unlock the Magic</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
                <x-text-input id="email" class="eden-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
                <x-text-input id="password" class="eden-input block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="eden-checkbox rounded shadow-sm focus:ring-offset-black" name="remember">
                    <span class="ms-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-500 hover:eden-text-red transition-colors duration-200" href="{{ route('password.request') }}">
                        {{ __('Lost your spell?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3 eden-btn-red">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>