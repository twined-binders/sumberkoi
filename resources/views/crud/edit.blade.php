<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Postingan</title>
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

    <form action="{{ route('post.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="m-8">
            <div class="mb-6">
                <label for="judul" class="block mb-4 w-fit">Judul</label>
                <input type="text" name="judul" id="judul" value="{{old('judul', $data->judul)}}" class="border rounded-lg w-full py-4 px-2 text-xl bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-300">
            </div>
            <div class="mb-6">
                <label for="penulis" class="block mb-4 w-fit">Penulis</label>
                <input type="text" name="penulis" id="penulis" value="{{old('penulis', $data->penulis)}}" class="border rounded-lg w-full py-4 px-2 text-xl bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-300">
            </div>
            <div>
                <textarea id="artikel" name="artikel">{{old('artikel', $data->artikel)}}</textarea>
            </div>
            <div class="mt-10 mb-14">
                <div class="flex justify-end gap-7">
                    <button type="submit" class="bg-green-500 text-slate-100 px-3 py-3 rounded-lg hover:scale-105 duration-200 font-medium hover:bg-green-400">Simpan</button>
                    <a href="{{ route('post.index') }}" class="bg-blue-500 text-slate-100 px-3 py-3 rounded-lg hover:scale-105 duration-200 font-medium hover:bg-blue-400 hover:text-slate-100 hover:no-underline">Kembali</a>
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
