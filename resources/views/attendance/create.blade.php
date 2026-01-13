@extends('backend.layouts.app')

@section('content')
<div class="p-6 bg-gray-950 min-h-screen">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-white mb-2">Mark New Attendance</h1>
                    <p class="text-gray-400">Add attendance record for a developer</p>
                </div>
                <a href="{{ route('attendance.index') }}" 
                   class="bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Attendance
                </a>
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
        
        @if(session('error'))
            <div class="mb-6 bg-red-900/50 border border-red-700 text-red-100 px-4 py-3 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session('error') }}
                </div>
            </div>
        @endif

        <!-- Attendance Form -->
        <div class="bg-gray-900 rounded-xl overflow-hidden">
            <div class="p-6 border-b border-gray-800">
                <h2 class="text-xl font-semibold text-white">Attendance Details</h2>
                <p class="text-gray-400 text-sm mt-1">Fill in all required fields to mark attendance</p>
            </div>
            
            <form action="{{ route('attendance.store') }}" method="POST" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Developer Selection -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Select Developer <span class="text-red-500">*</span>
                        </label>
                        <select name="user_id" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="">-- Select a Developer --</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} 
                                    @if($user->email)
                                        - {{ $user->email }}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" 
                               name="date" 
                               value="{{ old('date', $today->format('Y-m-d')) }}"
                               class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                               required>
                        @error('date')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select name="status" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="">-- Select Status --</option>
                            <option value="present" {{ old('status') == 'present' ? 'selected' : '' }}>Present</option>
                            <option value="absent" {{ old('status') == 'absent' ? 'selected' : '' }}>Absent</option>
                            <option value="half_day" {{ old('status') == 'half_day' ? 'selected' : '' }}>Half Day</option>
                            <option value="late" {{ old('status') == 'late' ? 'selected' : '' }}>Late</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Work Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Work Type <span class="text-red-500">*</span>
                        </label>
                        <select name="work_type" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="">-- Select Work Type --</option>
                            <option value="work_from_home" {{ old('work_type') == 'work_from_home' ? 'selected' : '' }}>Work from Home</option>
                            <option value="on_site" {{ old('work_type') == 'on_site' ? 'selected' : '' }}>On-site</option>
                        </select>
                        @error('work_type')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Developer Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Developer Type <span class="text-red-500">*</span>
                        </label>
                        <select name="developer_type" 
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors"
                                required>
                            <option value="">-- Select Developer Type --</option>
                            <option value="backend" {{ old('developer_type') == 'backend' ? 'selected' : '' }}>Backend Developer</option>
                            <option value="frontend" {{ old('developer_type') == 'frontend' ? 'selected' : '' }}>Frontend Developer</option>
                            <option value="fullstack" {{ old('developer_type') == 'fullstack' ? 'selected' : '' }}>Fullstack Developer</option>
                        </select>
                        @error('developer_type')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
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
                                       value="{{ old('check_in') }}"
                                       class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors">
                                <p class="mt-1 text-xs text-gray-400">Leave empty if not applicable</p>
                                @error('check_in')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Check Out -->
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    Check Out Time
                                </label>
                                <input type="time" 
                                       name="check_out" 
                                       value="{{ old('check_out') }}"
                                       class="w-full bg-gray-800 text-white rounded-lg px-4 py-3 border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-500/20 transition-colors">
                                <p class="mt-1 text-xs text-gray-400">Leave empty if not applicable</p>
                                @error('check_out')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
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
                                  placeholder="Any additional notes or remarks...">{{ old('notes') }}</textarea>
                        @error('notes')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Form Actions -->
                    <div class="md:col-span-2 pt-4 border-t border-gray-800">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div class="text-sm text-gray-400">
                                <p><span class="text-red-500">*</span> Required fields</p>
                                <p class="mt-1">Working hours will be automatically calculated based on check-in/check-out times.</p>
                            </div>
                            <div class="flex space-x-4">
                                <a href="{{ route('attendance.index') }}" 
                                   class="bg-gray-800 hover:bg-gray-700 text-white font-medium py-3 px-6 rounded-lg transition-colors flex items-center">
                                    <i class="fas fa-times mr-2"></i> Cancel
                                </a>
                                <button type="submit" 
                                        class="bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-lg transition-colors flex items-center">
                                    <i class="fas fa-save mr-2"></i> Mark Attendance
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Quick Tips -->
        <div class="mt-8 bg-gray-900 rounded-xl p-6">
            <h3 class="text-lg font-semibold text-white mb-4">Quick Tips</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start">
                    <div class="bg-blue-900/30 p-2 rounded-lg mr-3">
                        <i class="fas fa-info-circle text-blue-400"></i>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-white mb-1">Status Guidelines</h4>
                        <p class="text-sm text-gray-400">
                            • <span class="text-green-400">Present</span>: Full day attendance<br>
                            • <span class="text-yellow-400">Half Day</span>: Less than 4 hours<br>
                            • <span class="text-orange-400">Late</span>: Arrived after scheduled time<br>
                            • <span class="text-red-400">Absent</span>: No attendance
                        </p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-purple-900/30 p-2 rounded-lg mr-3">
                        <i class="fas fa-clock text-purple-400"></i>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-white mb-1">Time Guidelines</h4>
                        <p class="text-sm text-gray-400">
                            • Regular hours: 9:00 AM - 6:00 PM<br>
                            • Check-in required for Present/Late status<br>
                            • Check-out optional for Half Day<br>
                            • Both times required for working hours calculation
                        </p>
                    </div>
                </div>
            </div>
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
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Saving...';
            }
            
            return true;
        });
    }

    // Set today's date as default if not already set
    const dateInput = document.querySelector('input[name="date"]');
    if (dateInput && !dateInput.value) {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        dateInput.value = `${year}-${month}-${day}`;
    }

    // Status change handler to show/hide time inputs
    const statusSelect = document.querySelector('select[name="status"]');
    const checkInInput = document.querySelector('input[name="check_in"]');
    const checkOutInput = document.querySelector('input[name="check_out"]');
    
    if (statusSelect) {
        statusSelect.addEventListener('change', function() {
            if (this.value === 'absent') {
                checkInInput.required = false;
                checkOutInput.required = false;
                // Clear time inputs for absent
                if (checkInInput) checkInInput.value = '';
                if (checkOutInput) checkOutInput.value = '';
            } else {
                checkInInput.required = true;
            }
        });
    }
});
</script>

<style>
select option {
    background-color: #1f2937; /* bg-gray-800 */
    color: white;
}

select:focus option:checked {
    background-color: #dc2626; /* bg-red-600 */
}
</style>
@endsection