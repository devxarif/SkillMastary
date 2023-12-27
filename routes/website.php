<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\WebsiteController;

Route::name('website.')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
    });

    Route::controller(WebsiteController::class)->group(function(){
        Route::get('/', 'index')->name('index');
    });
});

