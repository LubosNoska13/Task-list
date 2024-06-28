@extends('layouts.app')

@section('title', 'All Tasks')
@section('main-heading', 'The list of tasks')

@section('content')
    <div class="mb-4">
        <a href="{{ route("tasks.create") }}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task!</a>
    </div>
    <p>{{ auth()->user()->name }}</p>
    @forelse($tasks as $task)
        <p class="mb-1">
            <a href="{{ route("tasks.show", ["task" => $task->id]) }}" @class(['underline decoration-sky-400','italic line-through decoration-slate-600' => $task->completed])>{{ $task->title }}</a>
        </p>
    @empty
        <p class="text-gray-700 italic">No tasks!</p>
    @endforelse

    @if ($tasks->hasPages())
        <div class="mt-8">{{ $tasks->links() }}</div>
    @endif
@endsection