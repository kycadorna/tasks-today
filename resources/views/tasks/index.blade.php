<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>
    <h1>All Tasks</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">All Tasks</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <hr>

    @foreach ($tasks as $task)
        <h3>{{ $task->title }}</h3>
        <p>Status: {{ $task->status }}</p>
        <p>Date: {{ $task->task_date->format('F d, Y') }}</p>
        <hr>
    @endforeach
</body>
</html>