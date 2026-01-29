<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup', [App\Http\Controllers\AuthController::class, 'showsignup'])->name('signup');
Route::post('/signup', [App\Http\Controllers\AuthController::class, 'signup']);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
