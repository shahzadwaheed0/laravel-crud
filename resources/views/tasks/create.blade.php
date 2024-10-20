<h1>Create New Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    
    <label for="description">Description:</label>
    <textarea name="description"></textarea>

    <button type="submit">Save Task</button>
</form>
