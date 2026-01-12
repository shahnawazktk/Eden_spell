<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

<div class="space-y-4">
    <p class="text-sm text-gray-400">
        Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
    </p>

    <button type="button" 
            onclick="openDeleteModal()" 
            class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors">
        Delete Account
    </button>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black bg-opacity-50" onclick="closeDeleteModal()"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md">
        <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-white mb-4">
                    Are you sure you want to delete your account?
                </h2>

                <p class="text-sm text-gray-400 mb-6">
                    Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                </p>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input id="password" name="password" type="password" 
                           class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent text-white" 
                           placeholder="Enter your password">
                    @error('password', 'userDeletion')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-3">
                    <button type="button" onclick="closeDeleteModal()" 
                            class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors">
                        Delete Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openDeleteModal() {
    document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
}
</script>
</section>
