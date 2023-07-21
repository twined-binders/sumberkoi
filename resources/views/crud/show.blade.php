<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap');

    </style>
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Daftar Artikel</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('layout')

    @section('konten')
    <div class="mt-16 mb-32">
        <div>
            <div class="text-center mb-8 text-2xl font-bold">
                <h1>{{$data->judul}}</h1>
            </div>
            <div class="px-7">
                {!!$data->artikel!!}
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
