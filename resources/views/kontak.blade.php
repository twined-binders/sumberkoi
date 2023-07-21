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
    <title>Kontak</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('layout')

    @section('konten')

    <div>
        <div class="mx-auto mt-16 w-11/12 p-10 shadow-xl mb-16 rounded-xl">
            <div class="container static mx-auto p-8">
                <div class="rounded-lg border bg-cyan-700 p-6 shadow-lg">
                    <p class="text-3xl text-white">Hubungi Kami</p>
                    <hr class="my-4" />
                    <div class="py-2 text-white">
                        <svg class="inline-block w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="font-semibold">Lokasi</span>
                        <p class="px-7">Dusun Sumber I RT 3/1 Desa, Jl. Sumber, Sumber Suko, Sanankulon, Kec. Sanankulon, Kabupaten Blitar, Jawa Timur 66151</p>
                    </div>
                    <div class="py-3 text-white">
                        <svg class="inline-block w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span class="font-semibold">Kontak</span>
                        <p class="px-7">081555633367</p>
                    </div>
                    <div class="py-3 text-white">
                        <svg class="inline-block w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="font-semibold">Email</span>
                        <p class="px-7">yufipriyo@sumberkoi.com</p>
                    </div>
                    <div class="py-3 text-white">
                        <svg class="inline-block w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="font-semibold">Buka</span>
                        <p class="px-7">Senin - Sabtu 08.00 - 17.00</p>
                    </div>
                </div>
            </div>

            <div class="container static mx-auto p-8">
                <div class="rounded-lg border p-6 shadow-lg">
                    <p class="text-3xl text-blue-300">Lokasi Kami</p>
                    <hr class="my-4" />
                    <div class="text-center mb-10">
                        <div class="w-full mx-auto">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15801.359970283922!2d112.13199534006803!3d-8.066761175124686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78efec98694659%3A0x677a42de5b9131d6!2sSumber%20Koi%20Blitar!5e0!3m2!1sid!2sid!4v1689830762402!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
</body>
</html>
