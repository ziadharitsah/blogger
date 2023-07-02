<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegiterController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Home\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegiterController::class, 'index'])->name('register');
Route::post('/register', [RegiterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/app', [DashboardController::class, 'index'])->name('app');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blogadd', [BlogController::class, 'viewaddblog'])->name('blogadd');
Route::post('/blogadd', [BlogController::class, 'store']);