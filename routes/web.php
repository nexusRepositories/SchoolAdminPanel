<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SchoolSubjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([auth::class, 'verified'])->group(function()
{
    // Dashboard
    Route::get('/')->name('home');
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Settings
    Route::controller(SettingsController::class)->group(function()
    {
        Route::get('/settings', 'settingsPage')->name('settings_page');
        Route::post('settings/change-email', 'changeEmail')->name('change_email');
        Route::post('settings/change-password', 'changePassword')->name('change_password');
    });
    
    // Profile
    Route::controller(ProfileController::class)->group(function()
    {
        Route::get('/profile', 'profilePage')->name('profile_page');
        Route::get('/profile/edit-page', 'profileEditPage')->name('profile_edit_page');
        Route::post('/profile/update/{user}', 'profileUpdate')->name('profile_update');
    });

    // Head teacher
    Route::get('/school-subjects', [SchoolSubjectController::class, 'index'])->name('school_subjects');

    // Groups
    Route::controller(GroupController::class)->group(function()
    {
        Route::get('/groups', 'index')->name('groups.index');
        Route::post('/groups/delete/{group}', 'groupDelete')->name('group.delete');
    });

    // Teachers
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
    
    // Students
    Route::get('/students', [StudentController::class, 'index'])->name('students');

    // Roles
    Route::resource('roles', RoleController::class);

    // Permissions
    Route::resource('permissions', PermissionController::class);
});

require __DIR__.'/auth.php';
