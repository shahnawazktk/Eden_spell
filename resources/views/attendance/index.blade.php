@extends('backend.layouts.app')

@section('content')
<div class="p-6 bg-gray-950 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="mb-6 bg-green-900/50 border border-green-700 text-green-100 px-4 py-3 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        
        @if(session('error'))
            <div class="mb-6 bg-red-900/50 border border-red-700 text-red-100 px-4 py-3 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session('error') }}
                </div>
            </div>
        @endif

        <!-- Header with Date Filter and Create Button -->
        <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="mb-4 md:mb-0">
                <h1 class="text-3xl font-bold text-white mb-2">Eden Spell Developer Attendance</h1>
                <p class="text-gray-400">Track attendance for all developers - Work from Home & On-site</p>
            </div>
            
            <div class="flex items-center space-x-3">
                <!-- Date Filter Form -->
                <form method="GET" action="{{ route('attendance.index') }}" class="flex items-center space-x-2">
                    <input type="date" name="date" value="{{ $selectedDate->format('Y-m-d') }}" 
                           class="bg-gray-800 text-white rounded-lg px-4 py-2 border border-gray-700 focus:border-red-500 focus:ring-1 focus:ring-red-500">
                    <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                        <i class="fas fa-filter mr-1"></i> Filter
                    </button>
                    <a href="{{ route('attendance.index') }}" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                        <i class="fas fa-redo mr-1"></i> Today
                    </a>
                </form>
                
                <!-- Create New Attendance Button -->
                <a href="{{ route('attendance.create') }}" 
                   class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                    <i class="fas fa-plus mr-2"></i> New Attendance
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-r from-green-600 to-green-700 p-6 rounded-xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm">Present Today</p>
                        <p class="text-white text-2xl font-bold">{{ $attendances->where('status', 'present')->count() }}</p>
                    </div>
                    <i class="fas fa-user-check text-green-200 text-2xl"></i>
                </div>
            </div>
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-6 rounded-xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm">Work from Home</p>
                        <p class="text-white text-2xl font-bold">{{ $attendances->where('work_type', 'work_from_home')->count() }}</p>
                    </div>
                    <i class="fas fa-home text-blue-200 text-2xl"></i>
                </div>
            </div>
            <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-6 rounded-xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm">On-site</p>
                        <p class="text-white text-2xl font-bold">{{ $attendances->where('work_type', 'on_site')->count() }}</p>
                    </div>
                    <i class="fas fa-building text-purple-200 text-2xl"></i>
                </div>
            </div>
            <div class="bg-gradient-to-r from-red-600 to-red-700 p-6 rounded-xl">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-red-100 text-sm">Absent</p>
                        <p class="text-white text-2xl font-bold">{{ $attendances->where('status', 'absent')->count() }}</p>
                    </div>
                    <i class="fas fa-user-times text-red-200 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Attendance Table -->
        <div class="bg-gray-900 rounded-xl overflow-hidden">
            <div class="p-6 border-b border-gray-800 flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-semibold text-white">
                        @if($selectedDate->isToday())
                            Today's Attendance - {{ $selectedDate->format('d M Y') }}
                        @else
                            Attendance - {{ $selectedDate->format('d M Y') }}
                        @endif
                    </h2>
                    <p class="text-gray-400 text-sm mt-1">{{ $attendances->count() }} record(s) found</p>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-400">
                        <i class="fas fa-clock mr-1"></i>
                        Last updated: {{ now()->format('h:i A') }}
                    </span>
                    <button onclick="window.location.reload()" 
                            class="bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm transition-colors">
                        <i class="fas fa-sync-alt mr-1"></i> Refresh
                    </button>
                    <a href="{{ route('attendance.create') }}" 
                       class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm transition-colors flex items-center">
                        <i class="fas fa-plus mr-1"></i> Add New
                    </a>
                </div>
            </div>
            
            @if($attendances->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Developer</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Work Mode</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Check In</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Check Out</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Hours</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            @foreach($attendances as $attendance)
                            <tr class="hover:bg-gray-800/50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-white font-semibold text-sm">
                                                {{ strtoupper(substr($attendance->user->name ?? 'NA', 0, 2)) }}
                                            </span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-white">{{ $attendance->user->name ?? 'N/A' }}</div>
                                            <div class="text-xs text-gray-400">{{ $attendance->user->email ?? '' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($attendance->developer_type == 'backend') bg-blue-900 text-blue-100 border border-blue-700
                                        @elseif($attendance->developer_type == 'frontend') bg-green-900 text-green-100 border border-green-700
                                        @else bg-purple-900 text-purple-100 border border-purple-700 @endif">
                                        @if($attendance->developer_type == 'backend')
                                            <i class="fas fa-server mr-1"></i>
                                        @elseif($attendance->developer_type == 'frontend')
                                            <i class="fas fa-desktop mr-1"></i>
                                        @else
                                            <i class="fas fa-layer-group mr-1"></i>
                                        @endif
                                        {{ ucfirst($attendance->developer_type) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($attendance->work_type == 'work_from_home') bg-yellow-900 text-yellow-100 border border-yellow-700
                                        @else bg-gray-800 text-gray-100 border border-gray-700 @endif">
                                        <i class="fas @if($attendance->work_type == 'work_from_home') fa-home @else fa-building @endif mr-1"></i>
                                        {{ $attendance->work_type == 'work_from_home' ? 'WFH' : 'On-site' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($attendance->check_in)
                                        <span class="text-sm font-medium text-white bg-gray-800 px-2 py-1 rounded">
                                            {{ \Carbon\Carbon::parse($attendance->check_in)->format('h:i A') }}
                                        </span>
                                    @else
                                        <span class="text-sm text-gray-500">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($attendance->check_out)
                                        <span class="text-sm font-medium text-white bg-gray-800 px-2 py-1 rounded">
                                            {{ \Carbon\Carbon::parse($attendance->check_out)->format('h:i A') }}
                                        </span>
                                    @else
                                        <span class="text-sm text-gray-500">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-medium 
                                        @if($attendance->working_hours >= 8) text-green-400
                                        @elseif($attendance->working_hours >= 4) text-yellow-400
                                        @else text-red-400 @endif">
                                        @if($attendance->working_hours > 0)
                                            {{ number_format($attendance->working_hours, 1) }}h
                                        @else
                                            -
                                        @endif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($attendance->status == 'present') bg-green-900 text-green-100 border border-green-700
                                        @elseif($attendance->status == 'absent') bg-red-900 text-red-100 border border-red-700
                                        @elseif($attendance->status == 'late') bg-orange-900 text-orange-100 border border-orange-700
                                        @else bg-yellow-900 text-yellow-100 border border-yellow-700 @endif">
                                        @if($attendance->status == 'present')
                                            <i class="fas fa-check mr-1"></i>
                                        @elseif($attendance->status == 'absent')
                                            <i class="fas fa-times mr-1"></i>
                                        @elseif($attendance->status == 'late')
                                            <i class="fas fa-clock mr-1"></i>
                                        @else
                                            <i class="fas fa-adjust mr-1"></i>
                                        @endif
                                        {{ ucfirst(str_replace('_', ' ', $attendance->status)) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex space-x-3">
                                        <a href="{{ route('attendance.edit', $attendance->id) }}" 
                                           class="text-blue-400 hover:text-blue-300 transition-colors p-1.5 bg-blue-900/20 hover:bg-blue-900/40 rounded"
                                           title="Edit">
                                            <i class="fas fa-edit text-sm"></i>
                                        </a>
                                        <form action="{{ route('attendance.destroy', $attendance->id) }}" 
                                              method="POST" 
                                              class="inline"
                                              onsubmit="return confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-400 hover:text-red-300 transition-colors p-1.5 bg-red-900/20 hover:bg-red-900/40 rounded"
                                                    title="Delete">
                                                <i class="fas fa-trash text-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="px-6 py-16 text-center text-gray-400">
                    <i class="fas fa-calendar-times text-5xl mb-4"></i>
                    <p class="text-xl font-medium text-gray-300 mb-2">No attendance records found</p>
                    <p class="text-gray-500">No attendance has been marked for {{ $selectedDate->format('d M Y') }}</p>
                    <div class="mt-6">
                        <a href="{{ route('attendance.create') }}" 
                           class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg transition-colors flex items-center mx-auto inline-flex">
                            <i class="fas fa-plus mr-2"></i> Mark First Attendance
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-refresh page every 60 seconds
    setTimeout(function() {
        window.location.reload();
    }, 60000);
});

function confirmDelete(event) {
    if (!confirm('Are you sure you want to delete this attendance record? This action cannot be undone.')) {
        event.preventDefault();
        return false;
    }
    return true;
}
</script>

<style>
/* Custom scrollbar for table */
.overflow-x-auto::-webkit-scrollbar {
    height: 6px;
}

.overflow-x-auto::-webkit-scrollbar-track {
    background: #1f2937; /* bg-gray-800 */
    border-radius: 3px;
}

.overflow-x-auto::-webkit-scrollbar-thumb {
    background: #4b5563; /* bg-gray-600 */
    border-radius: 3px;
}

.overflow-x-auto::-webkit-scrollbar-thumb:hover {
    background: #6b7280; /* bg-gray-500 */
}

/* Smooth transitions */
* {
    transition: background-color 0.2s ease, border-color 0.2s ease;
}
</style>
@endsection