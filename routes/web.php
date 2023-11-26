<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', \App\Http\Controllers\ProductController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('users', \App\Http\Controllers\UserController::class);
});

// Rutas adicionales para actualizar perfil y contraseña
Route::put('/users/{user}/update-profile', [UserController::class, 'updateProfile'])->name('users.updateProfile');
Route::put('/users/{user}/update-password', [UserController::class, 'updatePassword'])->name('users.updatePassword');
