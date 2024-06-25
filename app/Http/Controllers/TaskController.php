<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function showHome() {
        return view("home");
    }

    public function showCreateTask() {
        return view("create-task");
    }

    public function createTask(Request $request) {
        // Validate data
        $data = $request->validate([
            "title" => "required|min:4",
            "body" => "required|min:8"
        ]);
        
        Task::create($data);

        return redirect('/');
    }
}
