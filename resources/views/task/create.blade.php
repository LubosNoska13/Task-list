@extends('layouts.app')

@section('title', 'Create task')
@section('main-heading', 'Add Task')

@section('content')
    <form action="{{ route("tasks.store") }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="text" class="uppercase text-slate-700 mb-2">Title</label> <br />
            <input type="text" name="title" id="title" value="{{ old('title') }}" @class(['shadow-sm rounded-md appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none','border-red-500' => $errors->has('title')]) /> 
            @error('title')
                <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="body" class="uppercase text-slate-700 mb-2">Description</label> <br />
            <textarea name="body" id="body" @class(['shadow-sm rounded-md appearance-none border w-full h-60 py-2 px-3 text-slate-700 leading-tight focus:outline-none','border-red-500' => $errors->has('body')])>{{ old('body') }}</textarea> 
            @error('body')
                <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
            @enderror
        </div>
        <x-button class="mr-2">Add Task</x-button>
        <a href="{{ route("tasks.index") }}" class="underline decoration-pink-500">Cancel</a>
    </form>
@endsection