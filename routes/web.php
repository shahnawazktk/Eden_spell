<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/dashboard/live', [DashboardController::class, 'live'])
    ->middleware(['auth'])
    ->name('dashboard.live');

Route::middleware(['auth'])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/active', [ProjectController::class, 'active'])->name('projects.active');
    Route::get('/projects/archived', [ProjectController::class, 'archived'])->name('projects.archived');
    Route::get('/projects/templates', [ProjectController::class, 'templates'])->name('projects.templates');
    Route::get('/projects/live', [ProjectController::class, 'live'])->name('projects.live');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

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
