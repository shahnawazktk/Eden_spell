@extends('backend.layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white">Help & Support</h1>
        <p class="text-gray-400">Get assistance and find answers to common questions</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- FAQ Section -->
        <div class="lg:col-span-2 bg-gray-800 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-white mb-4">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <div class="border-b border-gray-700 pb-4">
                    <h3 class="font-medium text-white mb-2">How do I reset my password?</h3>
                    <p class="text-gray-400 text-sm">Go to Settings > Account > Change Password to update your credentials.</p>
                </div>
                <div class="border-b border-gray-700 pb-4">
                    <h3 class="font-medium text-white mb-2">How do I create a new project?</h3>
                    <p class="text-gray-400 text-sm">Navigate to Projects and click the "New Project" button to get started.</p>
                </div>
                <div class="border-b border-gray-700 pb-4">
                    <h3 class="font-medium text-white mb-2">Can I export my data?</h3>
                    <p class="text-gray-400 text-sm">Yes, you can export data from Reports > Export Data section.</p>
                </div>
            </div>
        </div>

        <!-- Contact Support -->
        <div class="bg-gray-800 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-white mb-4">Contact Support</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                    <input type="text" class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-red-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                    <textarea rows="4" class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-red-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg transition-colors">
                    Send Message
                </button>
            </form>
            
            <div class="mt-6 pt-6 border-t border-gray-700">
                <h3 class="font-medium text-white mb-3">Other Ways to Reach Us</h3>
                <div class="space-y-2 text-sm text-gray-400">
                    <p><i class="fas fa-envelope mr-2"></i> support@edenspell.com</p>
                    <p><i class="fas fa-phone mr-2"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-clock mr-2"></i> Mon-Fri 9AM-6PM EST</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="mt-6 bg-gray-800 rounded-lg p-6">
        <h2 class="text-xl font-semibold text-white mb-4">Quick Links</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-book"></i>
                <span>Documentation</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-video"></i>
                <span>Video Tutorials</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-comments"></i>
                <span>Community Forum</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-bug"></i>
                <span>Report Bug</span>
            </a>
        </div>
    </div>
</div>
@endsection