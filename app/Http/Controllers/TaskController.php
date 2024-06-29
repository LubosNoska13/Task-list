<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->paginate(12);
        return view("task.index", ["tasks" => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("task.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $data = $request->validate([
            "title" => "required|min:4",
            "description" => "required|min:8"
        ]);
        
        $data["title"] = strip_tags($data["title"]);
        $data["description"] = strip_tags($data["description"]);

        Task::create($data);

        return redirect()->route("tasks.index")->with("success", "Task successfully created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view("task.show", ["task" => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("task.edit", ["task" => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            "title" => "required|min:4",
            "description" => "required|min:8"
        ]);

        $task->update($data);
        return redirect()->back()->with("success", "Task successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route("tasks.index")->with("success", "Task successfully deleted.");
    }

    /**
     * Toggle completed state of the task.
     */
    public function mark(Task $task) {
        $task->toggleComplete();
        $text = $task->completed ? "complete" : "not complete";
        return redirect()->back()->with("success", "Task mark as " . $text);
    }
}
