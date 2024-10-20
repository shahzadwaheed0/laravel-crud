<h1>Task List</h1>
<a href="{{ route('tasks.create') }}">Create New Task</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }} 
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
