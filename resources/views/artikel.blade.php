@php
use Illuminate\Support\Str;
@endphp
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
    <title>Artikel</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('layout')

    @section('konten')
    <div class="mt-14 px-8 mb-14">
        @forelse ($data as $artikel)
        <div class="shadow-lg rounded-lg p-6 mb-7">
            <div>
                <a href="{{ route('post.show', $artikel->id) }}" class="block mb-4 font-semibold">{{$artikel->judul}}</a>
                <p class="text-sm text-slate-500 ">{!! mb_substr(strip_tags($artikel->artikel, '<p>'), 0, 300) !!}</p>
            </div>
            <hr class="mb-5 mt-7">
            <div class="mt-4 flex gap-12 text-slate-400">
                <p>{{$artikel->created_at}}</p>
                <p>Penulis: {{$artikel->penulis}}</p>
            </div>
        </div>
        @empty
        <p>Tidak ada Artikel untuk ditampilkan....</p>

        @endforelse
    </div>
    @endsection
</body>
</html>
