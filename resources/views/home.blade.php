@extends('layouts.app')

@section('title', 'All Tasks')
@section('main-heading')
    <h1>The list if tasks</h1>
@endsection

@section('content')
    <a href="{{ route("tasks.create") }}">Add Task!</a>

    @foreach($tasks as $task)
        <p><a href="{{ route("tasks.show", ["task" => $task->id]) }}">{{ $task->title }}</a></p>
    @endforeach
@endsection