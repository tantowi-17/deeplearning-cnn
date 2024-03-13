<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Dashboard
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/reports', [HomeController::class, 'reports'])->name('home');

//Auth
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/auth/login-process', [AuthController::class, 'login_process'])->name('login-process');

// Users
Route::get('/users', [UserController::class, 'index'])->name('users');

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');

// Reports
Route::get('/report', [ReportController::class, 'index'])->name('report');

// Training
Route::get('/training', [TrainingController::class, 'index'])->name('training');
