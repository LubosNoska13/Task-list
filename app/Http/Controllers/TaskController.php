<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function showHome() {
        $tasks = Task::orderBy("created_at", "desc")->get();
        return view("home", ["tasks" => $tasks]);
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
        
        $data["title"] = strip_tags($data["title"]);
        $data["body"] = strip_tags($data["body"]);

        Task::create($data);

        return redirect()->route("tasks.index");
    }

    public function showTask(Task $task) {
        return view("show-task", ["task" => $task]);
    } 
}
