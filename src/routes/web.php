<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup', function(){ return view('Auth.signup');})->name('signup')->middleware('guest');
Route::post('/signup', [App\Http\Controllers\AuthController::class, 'signup']);

Route::get('/login', function(){ return view('Auth.login');})->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('posts', App\Http\Controllers\PostController::class)->middleware('auth');

Route::resource('comments',App\Http\Controllers\CommentController::class)->middleware('auth');

Route::resource('likes',App\Http\Controllers\LikeController::class)->middleware('auth');

Route::get('/profil',[App\Http\Controllers\ProfileController::class])->middleware('auth');
