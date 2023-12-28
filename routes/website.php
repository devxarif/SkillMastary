<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\WebsiteController;

Route::get('/test', function(){

    return App\Enums\UserRoleEnum::ROLE_STUDENT?->value;
    return App\Enums\UserRoleEnum::getValues();
});

Route::name('website.')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
    });

    Route::controller(WebsiteController::class)->group(function(){
        Route::get('/', 'index')->name('index');
    });
});

