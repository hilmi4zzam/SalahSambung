<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/buka-peran', function () {
    return view('buka-peran');
});


// 1. GET: Nampilin form HTML register, login

Route::get('/daftar', function () {
    return view('auth.register');
});

Route::get('/masuk', function () {
    return view('auth.login');
});

// Rute buat tombol "Login with Google"
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');

// Rute buat nangkep data balik dari Google
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);


    
// 2. POST: Nangkep data pas user register, login, logout

Route::post('/daftar', [AuthController::class, 'register'])->name('register.submit');
    
Route::post('/masuk', [AuthController::class, 'login'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');