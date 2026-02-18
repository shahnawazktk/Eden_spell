@extends('backend.layouts.app')

@section('content')
<div class="p-6 bg-gray-950 min-h-screen">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-white mb-2">Edit Attendance</h1>
                    <p class="text-gray-400">Update attendance record for {{ $attendance->user->name }}</p>
                </div>
                <a href="{{ route('attendance.index') }}" 
                   class="bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Attendance
                </a>
            </div>
            
            <!-- Breadcrumb -->
            <div class="flex items-center text-sm text-gray-400 mb-6">
                <a href="{{ route('dashboard') }}" class="hover:text-white transition-colors">Dashboard</a>
                <i class="fas fa-chevron-right mx-2 text-xs"></i>
                <a href="{{ route('attendance.index') }}" class="hover:text-white transition-colors">Attendance</a>
                <i class="fas fa-chevron-right mx-2 text-xs"></i>
                <span class="text-white">Edit Attendance</span>
            </div>
        </div>

        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="mb-6 bg-green-900/50 border border-green-700 text-green-100 px-4 py-3 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        
        @if($errors->any())
            <div class="mb-6 bg-red-900/50 border border-red-700 text-red-100 px-4 py-3 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    Please fix the following errors:
                </div>
                <ul class="mt-2 ml-6 list-disc text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Attendance Form -->
        <div class="bg-gray-900 rounded-xl overflow-hidden">
            <div class="p-6 border-b border-gray-800">
                <h2 class="text-xl font-semibold text-white">Edit Attendance Details</h2>
                <p class="text-gray-400 text-sm mt-1">Last updated: {{ $attendance->updated_at->format('d M Y, h:i A') }}</p>
            </div>
            
            <form action="{{ route('attendance.update', $attendance->id) }}" method="POST" class="p-6">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Developer Selection -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Developer <span class="text-red-500">*</span>
                        </label>
                        <select name="user_id" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id', $attendance->user_id) == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} 
                                    @if($user->email)
                                        - {{ $user->email }}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Date -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" 
                               name="date" 
                               value="{{ old('date', $attendance->date->format('Y-m-d')) }}"
                               class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                               required>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select name="status" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="present" {{ old('status', $attendance->status) == 'present' ? 'selected' : '' }}>Present</option>
                            <option value="absent" {{ old('status', $attendance->status) == 'absent' ? 'selected' : '' }}>Absent</option>
                            <option value="half_day" {{ old('status', $attendance->status) == 'half_day' ? 'selected' : '' }}>Half Day</option>
                            <option value="late" {{ old('status', $attendance->status) == 'late' ? 'selected' : '' }}>Late</option>
                        </select>
                    </div>

                    <!-- Work Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Work Type <span class="text-red-500">*</span>
                        </label>
                        <select name="work_type" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="work_from_home" {{ old('work_type', $attendance->work_type) == 'work_from_home' ? 'selected' : '' }}>Work from Home</option>
                            <option value="on_site" {{ old('work_type', $attendance->work_type) == 'on_site' ? 'selected' : '' }}>On-site</option>
                        </select>
                    </div>

                    <!-- Developer Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Developer Type <span class="text-red-500">*</span>
                        </label>
                        <select name="developer_type" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="backend" {{ old('developer_type', $attendance->developer_type) == 'backend' ? 'selected' : '' }}>Backend Developer</option>
                            <option value="frontend" {{ old('developer_type', $attendance->developer_type) == 'frontend' ? 'selected' : '' }}>Frontend Developer</option>
                            <option value="fullstack" {{ old('developer_type', $attendance->developer_type) == 'fullstack' ? 'selected' : '' }}>Fullstack Developer</option>
                        </select>
                    </div>

                    <!-- Time Information -->
                    <div class="md:col-span-2">
                        <h3 class="text-lg font-semibold text-white mb-4">Time Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Check In -->
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Check In Time
                                </label>
                                <input type="time" 
                                       name="check_in" 
                                       value="{{ old('check_in', $attendance->check_in ? \Carbon\Carbon::parse($attendance->check_in)->format('H:i') : '') }}"
                                       class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors">
                            </div>

                            <!-- Check Out -->
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Check Out Time
                                </label>
                                <input type="time" 
                                       name="check_out" 
                                       value="{{ old('check_out', $attendance->check_out ? \Carbon\Carbon::parse($attendance->check_out)->format('H:i') : '') }}"
                                       class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors">
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Notes (Optional)
                        </label>
                        <textarea name="notes" 
                                  rows="3"
                                  class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                  placeholder="Any additional notes or remarks...">{{ old('notes', $attendance->notes) }}</textarea>
                    </div>

                    <!-- Form Actions -->
                    <div class="md:col-span-2 pt-4 border-t border-gray-800">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div class="text-sm text-gray-400">
                                <p><span class="text-red-500">*</span> Required fields</p>
                                <p class="mt-1">Current working hours: 
                                    <span class="font-medium text-white">
                                        {{ $attendance->working_hours ? number_format($attendance->working_hours, 1) . 'h' : 'Not calculated' }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex space-x-4">
                                <a href="{{ route('attendance.index') }}" 
                                   class="bg-gray-800 hover:bg-gray-700 text-white font-medium py-3 px-6 rounded-lg transition-colors flex items-center">
                                    <i class="fas fa-times mr-2"></i> Cancel
                                </a>
                                <button type="submit" 
                                        class="bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-lg transition-colors flex items-center">
                                    <i class="fas fa-save mr-2"></i> Update Attendance
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-fill current time for check_in/check_out on focus
    const timeInputs = document.querySelectorAll('input[type="time"]');
    timeInputs.forEach(input => {
        input.addEventListener('focus', function() {
            if (!this.value) {
                const now = new Date();
                const hours = now.getHours().toString().padStart(2, '0');
                const minutes = now.getMinutes().toString().padStart(2, '0');
                this.value = hours + ':' + minutes;
            }
        });
    });

    // Form validation
    const attendanceForm = document.querySelector('form');
    if (attendanceForm) {
        attendanceForm.addEventListener('submit', function(e) {
            const status = this.querySelector('select[name="status"]').value;
            const checkIn = this.querySelector('input[name="check_in"]').value;
            const checkOut = this.querySelector('input[name="check_out"]').value;
            
            // Validation for check-in based on status
            if ((status === 'present' || status === 'late' || status === 'half_day') && !checkIn) {
                e.preventDefault();
                alert('Please enter Check In time for ' + status + ' status');
                return false;
            }
            
            // Check Out time validation
            if (checkIn && checkOut) {
                const checkInTime = new Date('2000-01-01T' + checkIn);
                const checkOutTime = new Date('2000-01-01T' + checkOut);
                
                if (checkOutTime <= checkInTime) {
                    e.preventDefault();
                    alert('Check Out time must be after Check In time');
                    return false;
                }
            }
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Updating...';
            }
            
            return true;
        });
    }
});
</script>
@endsection