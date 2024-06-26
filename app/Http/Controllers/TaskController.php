<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function showHome() {
        $tasks = Task::latest()->paginate();
        // return $tasks;
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

        return redirect()->route("tasks.index")->with("success", "Task successfully created.");
    }

    public function showTask(Task $task) {
        return view("show-task", ["task" => $task]);
    } 

    public function deleteTask(Task $task) {
        $task->delete();
        return redirect()->route("tasks.index")->with("success", "Task successfully deleted.");
    }

    public function showEditTask(Task $task) {
        return view("edit-task", ["task" => $task]);
    }

    public function editTask(Request $request, Task $task) {
        $data = $request->validate([
            "title" => "required|min:4",
            "body" => "required|min:8"
        ]);

        $task->update($data);
        return redirect()->back()->with("success", "Task successfully updated.");
    }

    public function markTask(Task $task) {
        $task->toggleComplete();
        $text = $task->completed ? "complete" : "not complete";
        return redirect()->back()->with("success", "Task mark as " . $text);
    }
}
