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
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-8 mb-12 mt-12">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No.</th>
                    <th class="px-6 py-3">Judul</th>
                    <th class="px-6 py-3">Penulis</th>
                    <th class="px-6 py-3">Diposting</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $artikel)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-3">{{$artikel->id}}</td>
                    <td class="px-6 py-3">{{$artikel->judul}}</td>
                    <td class="px-6 py-3">{{$artikel->penulis}}</td>
                    <td class="px-6 py-3">{{$artikel->created_at}}</td>
                    <td class="px-6 py-3 ">
                        <div>
                            <a href="{{ route('post.edit', $artikel->id) }}" class="hover:text-sky-500 w-fit">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $artikel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:text-red-500">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>
