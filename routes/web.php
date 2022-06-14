<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolSubjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

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

// Dashboard
Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware([auth::class])->group(function()
{
    // User
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::post('profile/change-email', [UserController::class, 'changeEmail'])->name('change_email');
    Route::post('profile/change-password', [UserController::class, 'changePassword'])->name('change_password');

    // Head teacher
    Route::get('/school-subjects', [SchoolSubjectController::class, 'index'])->name('school_subjects');

});


// Teachers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');

// Students
Route::get('/students', [StudentController::class, 'index'])->name('students');


require __DIR__.'/auth.php';
