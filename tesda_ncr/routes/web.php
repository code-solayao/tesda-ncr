<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransparencyController;
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

Route::controller(TransparencyController::class)->group(function () {
    Route::get('/transparency-seal', 'transparency_seal')->name('transparency.seal');
});

Route::controller(ContactsController::class)->group(function () {
    Route::get('/regional-district-offices', 'regional_district_offices')->name('regional-district.offices');
    Route::get('/technology-institute', 'technology_institute')->name('technology.institute');
});
