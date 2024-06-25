@extends('layouts.app')

@section('title', 'Task')
@section('main-heading')
    <h1>{{ $task->title }}</h1>
@endsection

@section('content')
    <a href="{{ route("tasks.index") }}">&larr;Go back to the task list!</a>
    <p>{{ $task->body }}</p>
    <p>Created {{ $task->created_at->diffForHumans() }} &sdot; Updated {{ $task->updated_at->diffForHumans() }}</p> 

    @if ($task->completed)
        <h3>Completed</h3>
    @else
        <h3>Not Completed</h3>
    @endif

    <button>Edit</button>
    
    <button>Mark as completed</button>
    
    <form action="{{ route("tasks.destroy", ["task" => $task->id]) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>

@endsection