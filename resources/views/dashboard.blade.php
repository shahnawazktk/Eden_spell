<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Software House Control Center') }}
            </h2>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition">
                + New Project
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Active Projects</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white">12</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border-l-4 border-green-500">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Completed Tasks</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white">148</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border-l-4 border-yellow-500">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Pending Reviews</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white">05</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border-l-4 border-purple-500">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Team Velocity</p>
                    <p class="text-2xl font-bold text-gray-800 dark:text-white">94%</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <div class="lg:col-span-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Ongoing Projects</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-gray-400 text-sm uppercase">
                                        <th class="pb-3 italic">Project Name</th>
                                        <th class="pb-3">Lead</th>
                                        <th class="pb-3">Deadline</th>
                                        <th class="pb-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 dark:text-gray-300">
                                    <tr class="border-t border-gray-100 dark:border-gray-700">
                                        <td class="py-4 font-semibold">E-Commerce App</td>
                                        <td class="py-4">Ali Khan</td>
                                        <td class="py-4">25 Jan, 2024</td>
                                        <td class="py-4">
                                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">On Track</span>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-gray-100 dark:border-gray-700">
                                        <td class="py-4 font-semibold">CRM System</td>
                                        <td class="py-4">Zainab S.</td>
                                        <td class="py-4">02 Feb, 2024</td>
                                        <td class="py-4">
                                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">In Review</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Recent Activity</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 mt-2 rounded-full bg-blue-500"></div>
                            <div>
                                <p class="text-sm dark:text-gray-300"><b>Usman</b> pushed code to <span class="text-blue-500">API-Gateway</span></p>
                                <span class="text-xs text-gray-400">2 mins ago</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 mt-2 rounded-full bg-green-500"></div>
                            <div>
                                <p class="text-sm dark:text-gray-300">Project <b>LMS</b> marked as completed</p>
                                <span class="text-xs text-gray-400">1 hour ago</span>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>