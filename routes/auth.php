<?php

use App\Http\Controllers\Auth\RegisterUserController;

Route::get('/register', [RegisterUserController::class, 'create'])
    ->name('register');
    
Route::post('/register', [RegisterUserController::class, 'store']);