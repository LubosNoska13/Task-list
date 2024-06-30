<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\AuthenticateController;

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisterUserController::class, 'create'])
        ->name('register');

    Route::post('/register', [RegisterUserController::class, 'store']);
    
    Route::get('/login', [AuthenticateController::class, 'create'])
        ->name('login');

    Route::post('/login', [AuthenticateController::class, 'store']);
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthenticateController::class, 'destroy'])
        ->name('logout');
});