<x-layout>
    <h1>The list of tasks</h1>
    <a href="{{ route("tasks.create") }}">Add Task!</a>

    @foreach($tasks as $task)
        <p><a href="">{{ $task->title }}</a></p>
    @endforeach
</x-layout>