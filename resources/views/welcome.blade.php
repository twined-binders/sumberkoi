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
    @extends('layout')

    @section('konten')
    {{-- big image --}}
    <div class="w-11/12 mt-14 shadow-xl mx-auto overflow-hidden rounded-b-xl mb-14">
        <div class="relative overflow-hidden rounded-t-xl bg-cover bg-no-repeat p-12    text-center" style="background-image: url('/img/jumbotron.jpg'); height: 400px; height: 500px">
            {{-- big image --}}
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
                {{-- CTA Button --}}
                <div class="flex h-full items-center justify-center">
                    <div class="text-white">
                        <h2 class="mb-4 text-5xl font-semibold uppercase">sumber koi blitar</h2>
                        <h4 class="text-xl font-semibold uppercase mb-24">pusat budidaya dan bisnis koi</h4>
                        <button type="button" class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-[#25D366] hover:text-neutral-50 hover:font-semibold" data-te-ripple-init data-te-ripple-color="light">
                            Hubungi Kami
                        </button>
                    </div>
                </div>
                {{-- CTA Button --}}

            </div>
        </div>
        {{-- Keunggulan --}}
        <div class="mt-16 text-center">
            <h2 class="text-4xl font-bold text-sky-400">Mengapa Sumber Koi Farm?</h2>
            <div class="px-36 mt-6">
                <p class="text-slate-500 leading-loose"><span class="font-semibold text-lg">Sumber Koi</span> adalah Usaha Budidaya Ikan Koi | Pasar Ikan Koi | Pusat Distribusi Ikan Koi Blitar. Menyediakan berbagai macam ukuran ikan untuk keperluan kolam, Bibit maupun Indukan, siap kirim ke seluruh Indonesia dengan garansi aman sampai tujuan</p>
            </div>
        </div>
        <div class="mt-16 mx-6">
            <div class="flex gap-16 justify-center">
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggota kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/award.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Kualitas Ikan</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai kulaitas yang beragam mulai ragam kualitas diduaikan dengan kebutuhan</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/dollar-sign.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Harga Murah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi menyediakan Ikan dengan harga yang sangat terjangkau. Silakan buktikan dengan order di farm kami</p>
                    </div>
                </div>

            </div>
            <div class="flex gap-16 justify-center mt-7">
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/check-circle.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">100% Garansi</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi siap mengganti ikan jika mati dalam perjalanan dengan mengirim video unboxing</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/message-square.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Free Konsultasi</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi siap melayani anda yang membutuhkan konsultasi dalam hal budidaya maupun pemasaran</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/truck.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Pengiriman Cepat</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi biasa mengirim keseluruh Indonesia dengan menggunakan jasa pengiriman terpercaya dan cepat</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Keunggulan --}}

        {{-- Aktivitas --}}
        <div>
            <div class="relative overflow-hidden rounded-t-xl bg-cover bg-no-repeat p-12    text-center pb-0" style="background-image: url('/img/pattern.svg'); height: 200px;">
            </div>
            <div class="bg-[#b0f6ff] text-center">
                <div>
                    <h1 class="uppercase text-4xl font-bold text-sky-400">Aktivitas Kami</h1>
                    <p class="mt-4 text-slate-500 font-semibold">Jaringan farm kami mempunyai kegiatan kegiatan budidaya, Jual beli maupun edukasi untuk petani maupun pebisnis</p>
                </div>
            </div>
            <div class="bg-[#b0f6ff] pt-32 pb-24">
                <div class="mx-6 flex gap-5 justify-center">
                    <div class="w-full rounded overflow-hidden">
                        <img class="w-full" src="/img/budidaya.jpg" alt="Sunset in the mountains">
                        <div class="py-4">
                            <div class="font-bold text-xl mb-2">Budidaya</div>
                            <p class="text-gray-700 text-base">
                                Koi unggulan jenis Showa sanke shiro dan lain-lain yang masuk kualitas bagus.
                            </p>
                        </div>
                    </div>
                    <div class="w-full rounded overflow-hidden">
                        <img class="w-full" src="/img/jualbeli.jpg" alt="Sunset in the mountains">
                        <div class="py-4">
                            <div class="font-bold text-xl mb-2">Jual Beli</div>
                            <p class="text-gray-700 text-base">
                                Sumber Koi menyediakan paket isian kolam dengan harga yang lebih terjangkau
                            </p>
                        </div>
                    </div>
                    <div class="w-full rounded overflow-hidden">
                        <img class="w-full" src="/img/edukasi.jpg" alt="Sunset in the mountains">
                        <div class="py-4">
                            <div class="font-bold text-xl mb-2">Edukasi</div>
                            <p class="text-gray-700 text-base">
                                Bagi para jurangan kami sediakan kolam kolam yang siap diangkut secara borongan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Aktivitas --}}

            {{-- Video Profil --}}
            <div class="pt-24 bg-gradient-to-t from-cyan-700 to-[#b0f6ff]">
                <div class="w-3/4 aspect-w-16 aspect-h-7 mx-auto">
                    <iframe src="https://www.youtube.com/embed/eR4R9scxNOo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="w-3/4 mx-auto mt-5 pb-10">
                    <h1 class="text-white text-3xl font-semibold">Sumber Koi mempunyai Konsep Pemberdayaan disetiap lini bisnisnya</h1>
                </div>
            </div>
            {{-- Video Profil --}}

            {{-- Testimoni --}}
            <div class="mt-32">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-sky-400">Apa Yang Pelanggan Kami Katakan ?</h1>
                </div>
                <div class="mt-16">
                    <div class="flex justify-center gap-16 text-center text-slate-400">
                        <div class="w-60">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam. Explicabo, laborum!</p>
                            <img src="{{ url('/img/pelanggan.jpg') }}" alt="pelanggan" class="mx-auto mt-8 shadow rounded-full h-24">
                        </div>
                        <div class="w-60">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam. Explicabo, laborum!</p>
                            <img src="{{ url('/img/pelanggan.jpg') }}" alt="pelanggan" class="mx-auto mt-8 shadow rounded-full h-24">
                        </div>
                        <div class="w-60">
                            <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam. Explicabo, laborum!</blockquote>
                            <img src="{{ url('/img/pelanggan.jpg') }}" alt="pelanggan" class="mx-auto mt-8 shadow rounded-full h-24">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Testimoni --}}

            {{-- Lokasi --}}
            <div class="mt-48 text-center mb-10">
                <h1 class="uppercase mb-14 text-4xl font-bold text-sky-400">Lokasi kami</h1>
                <div class="w-11/12 mx-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15801.359970283922!2d112.13199534006803!3d-8.066761175124686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78efec98694659%3A0x677a42de5b9131d6!2sSumber%20Koi%20Blitar!5e0!3m2!1sid!2sid!4v1689830762402!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            {{-- Lokasi --}}
        </div>
    </div>

    @endsection
</body>
</html>
