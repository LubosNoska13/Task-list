@extends('layouts.app')

@section('title', 'Create task')
@section('main-heading', 'Add Task')

@section('content')
    <form action="{{ route("tasks.store") }}" method="POST">
        @csrf
        <x-forms.input name="title">{{ old('title') }}</x-forms.input>

        <x-forms.textarea name="description">{{ old('description') }}</x-forms.textarea>
        
        <x-button class="mr-2">Add Task</x-button>
        <a href="{{ route("tasks.index") }}" class="underline decoration-pink-500">Cancel</a>
    </form>
@endsection