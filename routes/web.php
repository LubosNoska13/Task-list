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
Route::get('/', function(){
    return redirect()->route("tasks.index");
});

Route::get('/tasks', [TaskController::class, "showHome"])
    ->name("tasks.index");

Route::get('/tasks/create', [TaskController::class, "showCreateTask"])
    ->name("tasks.create");

Route::post('/tasks/create', [TaskController::class, "createTask"])
    ->name("tasks.store");

Route::get('/tasks/{task:id}', [TaskController::class, "showTask"])
    ->name("tasks.show");