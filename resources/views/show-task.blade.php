<x-layout>

    <h1>{{ $task->title }}</h1>
    <a href="{{ route("tasks.index") }}">&larr;Go back to the task list!</a>
    <p>{{ $task->body }}</p>
    <p>Created {{ $task->created_at->diffForHumans() }} &sdot; Updated {{ $task->updated_at->diffForHumans() }}</p> 
    <h3>Not Completed</h3>

    <button>Edit</button><button>Mark as completed</button><button>Delete</button>
</x-layout>