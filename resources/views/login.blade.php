<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
    @endif
    <form method="post" action="{{ route('login') }}">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
