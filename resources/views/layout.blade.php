<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sumber Koi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap');

    </style>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- logo header --}}
    <div class="grid grid-cols-1 content-center">
        <div class="w-1/2 mx-auto">
            <img src="{{ url('/img/logoweb.png') }}" alt="Logo Sumber Koi" class="mx-auto mt-16 h-32">
        </div>
    </div>
    {{-- logo header --}}

    {{-- navbar --}}
    <div class="bg-slate-100">
        <div class="mt-16 py-5">
            <ul class="uppercase flex gap-10 justify-center font-bold text-xs">
                <li><a href="{{ route('home') }}" class="hover:underline hover:text-[#ff0000] duration-200">Home</a></li>
                <li><a href="{{ route('artikel') }}" class="hover:underline hover:text-[#ff0000] duration-200">Artikel</a></li>
                <li><a href="{{ route('tentang') }}" class="hover:underline hover:text-[#ff0000] duration-200">Tentang Kami</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:underline hover:text-[#ff0000] duration-200">Kontak</a></li>
            </ul>
        </div>
    </div>
    {{-- navbar --}}

    @yield('konten')

    {{-- footer --}}
    <footer class="bg-white dark:bg-gray-700">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="flex justify-center">
                <div class="flex gap-60">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Dibuat dengan</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://laravel.com/" class="hover:underline hover:text-[#FF2D20] duration-200">Laravel</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline hover:text-[#06B6D4] duration-200">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Ikuti Kami</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://www.facebook.com/pusatkoiblitar/" class="hover:underline hover:text-[#1877F2] duration-200">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.instagram.com/sumberkoiblitar/" class="hover:underline hover:text-[#E4405F] duration-200">Instagram</a>
                            </li>
                            <li>
                                <a href="https://wa.me/6281555633367" class="hover:underline hover:text-[#25D366] duration-200">Whatsapp</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sumber Koi</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('artikel') }}" class="hover:underline">Artikel</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('tentang') }}" class="hover:underline">Tentang Kami</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('kontak') }}" class="hover:underline">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer --}}
</body>
</html>
