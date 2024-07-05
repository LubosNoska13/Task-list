<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function() {

    Route::resource('tasks', TaskController::class);
    
    Route::put('/tasks/{task:id}/mark', [TaskController::class, "mark"])
        ->name("tasks.mark");
    
    Route::get('/profile', [ProfileController::class, 'edit']);
});


require __DIR__.'\auth.php';