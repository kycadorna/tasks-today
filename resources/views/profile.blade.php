<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">All Tasks</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <hr>

    <p>Username: {{ $user->username }}</p>
    <p>Full Name: {{ $user->full_name }}</p>
    <p>Email: {{ $user->email }}</p>
</body>
</html>