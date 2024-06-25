@extends('layouts.app')

@section('title', 'Edit task')
@section('main-heading')
    <h1>Edit Task</h1>
@endsection

@section('content')
    <form action="{{ route("tasks.update", ["task" => $task->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label for="text">Title</label> <br />
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" /> 
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="body">Desciption</label> <br />
            <textarea name="body" id="body">{{ old('body', $task->body) }}</textarea> 
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Edit Task</button>
        <a href="{{ route("tasks.index") }}">Cancel</a>
    </form>
@endsection