<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminAuthController;
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

Route::get('/', [UserAuthController::class, 'index'])->name('user.home')->middleware("auth:web");
Route::get('/login', [UserAuthController::class, 'login'])->name('user.login');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
Route::post('/login', [UserAuthController::class, 'handleLogin'])->name('user.handleLogin');

Route::get('/admin', [AdminAuthController::class, 'index'])->name('admin.home')->middleware("auth:webadmin");
Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login', [AdminAuthController::class, 'handleLogin'])->name('admin.handleLogin');
