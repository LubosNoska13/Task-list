@extends('layouts.app')

@section('title', 'Create task')
@section('main-heading', 'Add Task')

@section('content')
    <form action="{{ route("tasks.store") }}" method="POST">
        @csrf
        <x-forms.input name="title" label="Title" type="text" :font_bold="false">{{ old('title') }}</x-forms.input>
        <x-forms.textarea name="description">{{ old('description') }}</x-forms.textarea>
        
        <x-button class="mr-2">Add Task</x-button>
        <x-link :route="route('tasks.index')">Cancel</x-link>
    </form>
@endsection