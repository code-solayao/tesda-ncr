<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'login_view')->name('login');
    Route::get('/register', 'register_view')->name('register');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});