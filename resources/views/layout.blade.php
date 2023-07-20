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
    {{-- Button CTC --}}
    <div tabindex="-1" class="fixed bottom-0 right-0 z-50 m-5 bg-[#25D366] rounded-full p-4 hover:scale-110 duration-300">
        <a href="https://wa.me/6281555633367"><svg class="fill-slate-100 hover:rotate-180 duration-300 hover:scale-110" style="height: 40px;" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>WhatsApp</title>
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
            </svg></a>
    </div>
    {{-- Button CTC --}}
</body>
</html>
