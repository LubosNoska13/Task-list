<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Tasks related routes
Route::get('/', [TaskController::class, "showHome"])
    ->name("tasks.index");

Route::get('/create', [TaskController::class, "showCreateTask"])
    ->name("tasks.create");

Route::post('/create', [TaskController::class, "createTask"]);