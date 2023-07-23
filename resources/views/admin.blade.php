<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap');

    </style>
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <ul>
            <li><a href="{{ route('post.create') }}">Buat Artikel</a></li>
            <li><a href="{{ route('post.index') }}">List Artikel</a></li>
        </ul>
    </div>
</body>
</html>
