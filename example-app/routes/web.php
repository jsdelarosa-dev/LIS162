<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\VSTAttendanceRecordController;
use App\Http\Controllers\VSTannouncementController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ArecordController;
use App\Http\Controllers\TournamentController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('college', CollegeController::class);
Route::resource('attendance', VSTAttendanceRecordController::class);
Route::resource('announcement', VSTAnnouncementController::class)->parameters([
    'announcement' => 'vst_announcement',
]);
Route::resource('userprofile', UserProfileController::class);
Route::resource('userrole', UserRoleController::class);
Route::resource('arecord', ArecordController::class);
Route::resource('tournament', TournamentController::class);



require __DIR__.'/auth.php';
