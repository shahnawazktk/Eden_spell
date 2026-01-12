<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

<form method="post" action="{{ route('password.update') }}" class="space-y-6">
    @csrf
    @method('put')

    <div>
        <label for="update_password_current_password" class="block text-sm font-medium text-gray-300 mb-2">Current Password</label>
        <input id="update_password_current_password" name="current_password" type="password" 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-white" 
               autocomplete="current-password">
        @error('current_password', 'updatePassword')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="update_password_password" class="block text-sm font-medium text-gray-300 mb-2">New Password</label>
        <input id="update_password_password" name="password" type="password" 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-white" 
               autocomplete="new-password">
        @error('password', 'updatePassword')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
        <input id="update_password_password_confirmation" name="password_confirmation" type="password" 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-white" 
               autocomplete="new-password">
        @error('password_confirmation', 'updatePassword')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="px-6 py-3 bg-yellow-600 hover:bg-yellow-700 text-white font-medium rounded-lg transition-colors">
            Update Password
        </button>

        @if (session('status') === 'password-updated')
            <p class="text-sm text-green-400 animate-fade-in">
                Password updated successfully!
            </p>
        @endif
    </div>
</form>
</section>
