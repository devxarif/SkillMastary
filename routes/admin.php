<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\AdminController;

Route::prefix('admin')->group(function () {

    // Authentication Controller
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/logout', 'logout')->name('logout');
    });

    // Admin Controller
    Route::controller(AdminController::class)->name('admin.')->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});
