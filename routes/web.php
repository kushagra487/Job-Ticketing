<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthanticationController;
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


Route::get('/', [AuthanticationController::class, 'login'])->name('login');
Route::match(['get','post'],'/loginAuth', [AuthanticationController::class, 'loginAuth'])->name('loginAuth');

Route::get('/register', [AuthanticationController::class, 'register'])->name('register');
Route::post('/register', [AuthanticationController::class, 'register_data'])->name('register_data');

Route::post('/forgot_password', [AuthanticationController::class, 'forgot_password'])->name('forgot_password');

Route::get('/dashboard', [AuthanticationController::class, 'dashboard']);