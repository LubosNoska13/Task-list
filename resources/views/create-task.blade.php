@extends('layouts.app')

@section('title', 'Create task')
@section('main-heading', 'Add Task')

@section('content')
    <form action="{{ route("tasks.store") }}" method="POST">
        @csrf
        <div>
            <label for="text">Title</label> <br />
            <input type="text" name="title" id="title" value="{{ old('title') }}" /> 
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="body">Desciption</label> <br />
            <textarea name="body" id="body">{{ old('body') }}</textarea> 
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Add Task</button>
        <a href="{{ route("tasks.index") }}">Cancel</a>
    </form>
@endsection