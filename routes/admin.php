<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {

    // Authentication Controller
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::post('/logout', 'logout')->name('logout');
    });

    // Admin Controller
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});
