<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buat Postingan</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap');

    </style>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="m-8">
            <div class="mb-6">
                <label for="judul" class="block mb-4 w-fit">Judul</label>
                <input type="text" name="judul" id="judul" value="{{old('nama')}}" class="border rounded-lg w-full py-4 px-2 text-xl bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-300">
            </div>
            <div class="mb-6">
                <label for="penulis" class="block mb-4 w-fit">Penulis</label>
                <input type="text" name="penulis" id="penulis" value="{{old('judul')}}" class="border rounded-lg w-full py-4 px-2 text-xl bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-300">
            </div>
            <div>
                <textarea id="artikel" name="artikel" value="{{old('artikel')}}"></textarea>
            </div>
            <div class="mt-10">
                <div class="flex justify-end gap-7">
                    <button type="submit">Simpan</button>
                    <a href="{{ route('artikel') }}">Kembali</a>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#artikel').summernote({
                height: 250
            , });
        })

    </script>
</body>

</html>
