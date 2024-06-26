@extends('layouts.app')

@section('title', 'All Tasks')
@section('main-heading', 'The list of tasks')

@section('content')
    <div class="mb-4">
        <a href="{{ route("tasks.create") }}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task!</a>
    </div>

    @foreach($tasks as $task)
        <p class="mb-1">
            <a href="{{ route("tasks.show", ["task" => $task->id]) }}" @class(['underline decoration-sky-400','line-through decoration-gray-600' => $task->completed]) class="">{{ $task->title }}</a>
        </p>
    @endforeach

    @if ($tasks->hasPages())
        <div class="mt-8">{{ $tasks->links() }}</div>
    @endif
@endsection