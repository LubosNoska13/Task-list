@extends('layouts.app')

@section('title', 'Edit task')
@section('main-heading', 'Edit Task')

@section('content')
    <form action="{{ route("tasks.update", ["task" => $task->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-4">
            <label for="text" class="uppercase text-slate-700 mb-2">Title</label> <br />
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" class="shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none" /> 
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="body" class="uppercase text-slate-700 mb-2">Description</label> <br />
            <textarea name="body" id="body" class="shadow-sm appearance-none border w-full h-60 py-2 px-3 text-slate-700 leading-tight focus:outline-none">{{ old('body', $task->body) }}</textarea> 
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="rounded-md mr-2 px-2 py-1 text-center text-slate-700 shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-50">Edit Task</button>
        <a href="{{ route("tasks.index") }}" class="underline decoration-pink-500">Cancel</a>
    </form>
@endsection