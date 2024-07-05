@extends('layouts.app')

@section('title', 'Edit task')
@section('main-heading', 'Edit Task')

@section('content')
    <form action="{{ route("tasks.update", ["task" => $task->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <x-forms.input name="title" label="Title" type="text" :font_bold="false">{{ $task->title }}</x-forms.input>
        <x-forms.textarea name="description">{{ $task->description }}</x-forms.textarea>
        
        <x-button class="mr-2">Edit Task</x-button>
        <x-link :route="route('tasks.show', ['task' => $task->id])">Cancel</x-link>
    </form>
@endsection