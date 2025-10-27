<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramsAndServices;
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

Route::controller(AboutController::class)->group(function () {
    Route::get('/history', 'history')->name('history');
    Route::get('/vision-mission-value-statement-and-quality-policy', 'vision_mission')->name('vision.mission');
    Route::get('/organizational-chart', 'organisational_chart')->name('organisational.chart');
});

Route::controller(TransparencyController::class)->group(function () {
    Route::get('/transparency-seal', 'transparency_seal')->name('transparency.seal');
    Route::get('/citizens-charter', 'citizens_charter')->name('citizens.charter');
    Route::get('/philgeps-posting', 'philgeps_posting')->name('philgeps.posting');
    Route::get('/committee-on-anti-red-tape', 'tesda_cart')->name('tesda.cart');
});

Route::controller(ProgramsAndServices::class)->group(function () {
    Route::get('/tvet-programs', 'tvet_programs')->name('tvet.programs');
});

Route::controller(ContactsController::class)->group(function () {
    Route::get('/regional-district-offices', 'regional_district_offices')->name('regional-district.offices');
    Route::get('/technology-institute', 'technology_institute')->name('technology.institute');
});
