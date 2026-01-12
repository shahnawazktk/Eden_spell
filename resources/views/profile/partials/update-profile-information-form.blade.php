<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="space-y-6">
    @csrf
    @method('patch')

    <div>
        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
        <input id="name" name="name" type="text" 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-white" 
               value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        @error('name')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
        <input id="email" name="email" type="email" 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-white" 
               value="{{ old('email', $user->email) }}" required autocomplete="username">
        @error('email')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-3 p-3 bg-yellow-900/30 border border-yellow-800 rounded-lg">
                <p class="text-sm text-yellow-300">
                    Your email address is unverified.
                    <button form="send-verification" class="underline text-yellow-400 hover:text-yellow-300 ml-1">
                        Click here to re-send the verification email.
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 text-sm text-green-400">
                        A new verification link has been sent to your email address.
                    </p>
                @endif
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors">
            Save Changes
        </button>

        @if (session('status') === 'profile-updated')
            <p class="text-sm text-green-400 animate-fade-in">
                Profile updated successfully!
            </p>
        @endif
    </div>
</form>
</section>
