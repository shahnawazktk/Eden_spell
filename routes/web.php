<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/help-support', function () {
        return view('backend.help-support');
    })->name('help.support');
});
// Route::resource('attendance', AttendanceController::class);
// Route::middleware(['auth'])->group(function () {
//     // Attendance Routes
//     Route::resource('attendance', App\Http\Controllers\AttendanceController::class);
    
//     // Ya agar individual routes banana chahte hain:
//     Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
//     Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');
//     Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
//     Route::get('/attendance/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');
//     Route::put('/attendance/{attendance}', [AttendanceController::class, 'update'])->name('attendance.update');
//     Route::delete('/attendance/{attendance}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');
// });
Route::middleware(['auth'])->group(function () {
    Route::resource('attendance', App\Http\Controllers\AttendanceController::class);
});


require __DIR__.'/auth.php';
