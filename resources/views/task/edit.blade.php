@extends('layouts.app')

@section('title', 'Edit task')
@section('main-heading', 'Edit Task')

@section('content')
    <form action="{{ route("tasks.update", ["task" => $task->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <x-forms.input name="title">{{ $task->title }}</x-forms.input>

        <x-forms.textarea name="description">{{ $task->description }}</x-forms.textarea>
        
        <x-button class="mr-2">Edit Task</x-button>
        <a href="{{ route("tasks.show", ["task" => $task->id]) }}" class="underline decoration-pink-500">Cancel</a>
    </form>
@endsection