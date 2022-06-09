<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// })->middleware(['auth'])->name('dashboard');

// Dashboard
Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Teachers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');

// Students
Route::get('/students', [StudentController::class, 'index'])->name('students');


require __DIR__.'/auth.php';
