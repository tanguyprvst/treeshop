<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
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

Route::post('/logout', LogoutController::class)->name('auth.logout');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('auth.login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('auth.login.store');
});

Route::middleware('auth')->group(function () {
    Route::domain('admin.'.env('APP_URL'))
    ->as('admin.')
    ->group(function () {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('/products',  [ProductController::class, 'index'])->name('products.index');
        Route::put('/products',  [ProductController::class, 'update'])->name('products.update');

    });

    Route::get('/', HomeController::class)->name('home');
});
