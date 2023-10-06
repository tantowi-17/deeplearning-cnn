<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [DashboardController::class, 'index']);
Route::get('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/login-process', [AuthController::class, 'loginprocess'])->name('loginprocess');
//Route::post('/loginprocess', [AuthController::class, 'loginProcess'])->name('loginprocess');

