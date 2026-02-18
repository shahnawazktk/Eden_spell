<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // Show all attendances (list)
    public function index(Request $request)
    {
        $today = Carbon::today();
        
        // Date filter ke liye
        $selectedDate = $request->has('date') ? Carbon::parse($request->date) : $today;
        
        $attendances = Attendance::with('user')
            ->whereDate('date', $selectedDate)
            ->orderBy('check_in', 'asc')
            ->get();

        $users = User::all();

        return view('attendance.index', compact('attendances', 'users', 'today', 'selectedDate'));
    }

    // Store new attendance
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'check_in' => 'nullable|date_format:H:i',
            'check_out' => 'nullable|date_format:H:i',
            'work_type' => 'required|in:work_from_home,on_site',
            'developer_type' => 'required|in:backend,frontend,fullstack',
            'status' => 'required|in:present,absent,half_day,late',
        ]);

        // Calculate working hours
        $workingHours = $this->calculateWorkingHours(
            $validated['check_in'], 
            $validated['check_out'],
            $validated['date']
        );

        // Check if attendance already exists
        $existingAttendance = Attendance::where('user_id', $validated['user_id'])
            ->whereDate('date', $validated['date'])
            ->first();

        if ($existingAttendance) {
            return redirect()->route('attendance.index', ['date' => $validated['date']])
                ->with('error', 'Attendance already marked for this developer on selected date!');
        }

        // Create new attendance
        Attendance::create([
            'user_id' => $validated['user_id'],
            'date' => $validated['date'],
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'work_type' => $validated['work_type'],
            'developer_type' => $validated['developer_type'],
            'status' => $validated['status'],
            'working_hours' => $workingHours,
        ]);

        return redirect()->route('attendance.index', ['date' => $validated['date']])
            ->with('success', 'Attendance marked successfully!');
    }

    // Helper function to calculate working hours
    private function calculateWorkingHours($checkIn, $checkOut, $date)
    {
        if (!$checkIn || !$checkOut) {
            return 0;
        }

        try {
            $checkInTime = Carbon::parse($date . ' ' . $checkIn);
            $checkOutTime = Carbon::parse($date . ' ' . $checkOut);
            
            // If check_out is earlier than check_in (overnight shift)
            if ($checkOutTime < $checkInTime) {
                $checkOutTime->addDay();
            }
            
            $diffInMinutes = $checkOutTime->diffInMinutes($checkInTime);
            return round($diffInMinutes / 60, 2); // Convert minutes to hours
        } catch (\Exception $e) {
            return 0;
        }
    }

    // Edit attendance
    public function edit(Attendance $attendance)
    {
        $users = User::all();
        return view('attendance.edit', compact('attendance', 'users'));
    }

    // Update attendance
    public function update(Request $request, Attendance $attendance)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'check_in' => 'nullable|date_format:H:i',
            'check_out' => 'nullable|date_format:H:i',
            'work_type' => 'required|in:work_from_home,on_site',
            'developer_type' => 'required|in:backend,frontend,fullstack',
            'status' => 'required|in:present,absent,half_day,late',
        ]);

        // Calculate working hours
        $workingHours = $this->calculateWorkingHours(
            $validated['check_in'], 
            $validated['check_out'],
            $validated['date']
        );

        $attendance->update([
            'user_id' => $validated['user_id'],
            'date' => $validated['date'],
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'work_type' => $validated['work_type'],
            'developer_type' => $validated['developer_type'],
            'status' => $validated['status'],
            'working_hours' => $workingHours,
        ]);

        return redirect()->route('attendance.index', ['date' => $validated['date']])
            ->with('success', 'Attendance updated successfully!');
    }

    // Delete attendance
    public function destroy(Attendance $attendance)
    {
        $date = $attendance->date;
        $attendance->delete();
        
        return redirect()->route('attendance.index', ['date' => $date])
            ->with('success', 'Attendance deleted successfully!');
    }

    // Create attendance (if needed)
    public function create()
    {
        $users = User::all();
        $today = Carbon::today();
        return view('attendance.create', compact('users', 'today'));
    }
}