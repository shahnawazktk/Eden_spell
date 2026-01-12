@extends('backend.layouts.app')

@section('title', 'Profile Settings')

@section('content')
    <div class="h-full overflow-y-auto">
        <div class="p-6">
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Profile Settings</h1>
                        <p class="text-gray-400">Manage your account settings and preferences</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                <!-- Profile Information -->
                <div class="xl:col-span-2">
                    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 bg-blue-900/30 rounded-lg flex items-center justify-center">
                                <i class="fas fa-user text-blue-400"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-white">Profile Information</h2>
                                <p class="text-sm text-gray-400">Update your account's profile information and email address</p>
                            </div>
                        </div>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="space-y-6">
                    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-white mb-4">Account Overview</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Member Since</span>
                                <span class="text-white">{{ Auth::user()->created_at->format('M Y') }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Last Login</span>
                                <span class="text-white">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Account Status</span>
                                <span class="px-2 py-1 bg-green-900/30 text-green-400 text-xs rounded-full">Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                <!-- Update Password -->
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-yellow-900/30 rounded-lg flex items-center justify-center">
                            <i class="fas fa-lock text-yellow-400"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-white">Update Password</h2>
                            <p class="text-sm text-gray-400">Ensure your account is using a long, random password</p>
                        </div>
                    </div>
                    @include('profile.partials.update-password-form')
                </div>

                <!-- Delete Account -->
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-red-900/30 rounded-lg flex items-center justify-center">
                            <i class="fas fa-trash text-red-400"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-white">Delete Account</h2>
                            <p class="text-sm text-gray-400">Permanently delete your account and all data</p>
                        </div>
                    </div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
