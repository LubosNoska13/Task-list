@extends('layouts.app')

@section('title', 'Task')
@section('main-heading', $task->title)

@section('content')
    <div class="mb-4">
        <a href="{{ route("tasks.index") }}" class="font-medium underline text-gray-700 decoration-pink-500">&larr;Go back to the task list!</a>
    </div>

    <p class="mb-4 text-slate-700">{{ $task->body }}</p>
    <p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} &sdot; Updated {{ $task->updated_at->diffForHumans() }}</p> 

    <div class="mb-4">
        @if ($task->completed)
            <h3 class="font-medium text-green-500">Completed</h3>
        @else
            <h3 class="font-medium text-red-500">Not Completed</h3>
        @endif
    </div>

    <div class="flex gap-2">
        <button>
            <a href="{{ route("tasks.edit", ["task" => $task->id]) }}" class="rounded-md px-2 py-1 text-center text-slate-700 shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-50">Edit</a>
        </button>
        
        <form action="{{ route("tasks.mark", ["task" => $task->id]) }}" method="POST">
            @csrf
            @method("PUT")
            <button type="submit" class="rounded-md px-2 py-1 text-center text-slate-700 shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-50">Mark as {{ $task->completed ? "not completed" : "completed" }}</button>
        </form>
        
        <form action="{{ route("tasks.destroy", ["task" => $task->id]) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="rounded-md px-2 py-1 text-center text-slate-700 shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-50">Delete</button>
        </form>
    </div>

@endsection