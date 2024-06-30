<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
});


// Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::post('/login', [UserController::class, 'loginDb'])->name('loginDb');
// Route::get('/register', [UserController::class, 'register'])->name('register');
// Route::post('/register', [UserController::class, 'registerDb'])->name('registerDb');
// Route::get('/logout', [UserController::class, 'logout']);

require __DIR__.'\auth.php';