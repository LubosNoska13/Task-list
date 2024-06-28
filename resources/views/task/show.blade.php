@extends('layouts.app')

@section('title', 'Task')
@section('main-heading', $task->title)

@section('content')
    <div class="mb-4">
        <a href="{{ route("tasks.index") }}" class="font-medium underline text-gray-700 decoration-pink-500">&larr;Go back to the task list!</a>
    </div>

    <p class="mb-4 text-slate-700">{{ $task->description }}</p>
    <p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} &sdot; Updated {{ $task->updated_at->diffForHumans() }}</p> 

    <div class="mb-8">
        @if ($task->completed)
            <h3 class="font-medium text-green-600">Completed</h3>
        @else
            <h3 class="font-medium text-red-600">Not Completed</h3>
        @endif
    </div>

    <div class="flex gap-2">
        <x-button>
            <a href="{{ route("tasks.edit", ["task" => $task->id]) }}">Edit</a>
        </x-button>
        
        <form action="{{ route("tasks.mark", ["task" => $task->id]) }}" method="POST">
            @csrf
            @method("PUT")
            <x-button>Mark as {{ $task->completed ? "not completed" : "completed" }}</x-button>
        </form>
        
        <form action="{{ route("tasks.destroy", ["task" => $task->id]) }}" method="POST">
            @csrf
            @method("DELETE")
            <x-button-danger>Delete</x-button-danger>
        </form>
    </div>

@endsection