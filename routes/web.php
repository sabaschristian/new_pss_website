<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AppointmentController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::view('/blog', 'blog.index')->name('blog.index');
Route::view('/about', 'about.index')->name('about.index');

// Auth
Route::middleware('auth')->group(function (){

    Route::view('/appointment', 'appointment.index')->name('appointment');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
});

// Guest
Route::middleware('guest')->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.login');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.register');
});