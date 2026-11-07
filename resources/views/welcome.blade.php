<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>
    <h1>Tasks for Today</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">All Tasks</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <hr>

    @forelse ($tasks as $task)
        <h3>{{ $task->title }}</h3>
        <p>Status: {{ $task->status }}</p>
        <p>Date: {{ $task->task_date->format('F d, Y') }}</p>
    @empty
        <p>No tasks for today.</p>
    @endforelse
</body>
</html>