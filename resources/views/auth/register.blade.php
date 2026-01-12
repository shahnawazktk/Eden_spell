<x-guest-layout>
    <style>
        body {
            background-color: #000000; /* Deep Black Background */
        }
        .eden-card {
            background: #111111; /* Dark Gray Card */
            border: 1px solid #7f1d1d; /* Dark Red Border */
            box-shadow: 0 0 20px rgba(153, 27, 27, 0.2);
        }
        .eden-input {
            background-color: #1a1a1a !important;
            border-color: #450a0a !important;
            color: #ffffff !important;
        }
        .eden-input:focus {
            border-color: #dc2626 !important;
            --tw-ring-color: #dc2626 !important;
        }
        .eden-text-red {
            color: #ef4444; /* Bright Red for headings/links */
        }
        .eden-btn-red {
            background-color: #991b1b !important; /* Crimson Red */
            transition: all 0.3s ease;
        }
        .eden-btn-red:hover {
            background-color: #dc2626 !important; /* Brighter Red on hover */
            box-shadow: 0 0 15px rgba(220, 38, 38, 0.5);
        }
    </style>

    <div class="p-6 eden-card rounded-lg">
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-bold uppercase tracking-widest eden-text-red">Eden Spell</h2>
            <p class="text-gray-400 text-sm italic">Join the mystery</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Name')" class="text-gray-300" />
                <x-text-input id="name" class="eden-input block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
                <x-text-input id="email" class="eden-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
                <x-text-input id="password" class="eden-input block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-300" />
                <x-text-input id="password_confirmation" class="eden-input block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="underline text-sm text-gray-400 hover:eden-text-red rounded-md focus:outline-none" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4 eden-btn-red">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>