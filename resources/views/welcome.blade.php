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
                <li>Home</li>
                <li>Artikel</li>
                <li>Tentang Kami</li>
                <li>Kontak</li>
            </ul>
        </div>
    </div>
    {{-- navbar --}}

    {{-- big image --}}
    <div class="w-11/12 mt-14 shadow-xl mx-auto">
        <div class="relative overflow-hidden rounded-t-xl bg-cover bg-no-repeat p-12    text-center"   style="background-image: url('/img/jumbotron.jpg'); height: 400px; height: 500px">
    {{-- big image --}}        
            <div
                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)">
                {{-- CTA Button --}}
                <div class="flex h-full items-center justify-center">
                    <div class="text-white">
                        <h2 class="mb-4 text-5xl font-semibold uppercase">sumber koi blitar</h2>
                        <h4 class="mb-6 text-xl font-semibold uppercase mb-24">pusat budidaya dan bisnis koi</h4>
                        <button
                            type="button"
                            class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-slate-200 hover:text-slate-800 hover:font-semibold"
                            data-te-ripple-init
                            data-te-ripple-color="light">
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
                <p class="text-slate-500 leading-loose"><span class="font-semibold text-lg">Sumber Koi</span>  adalah Usaha Budidaya Ikan Koi | Pasar Ikan Koi | Pusat Distribusi Ikan Koi Blitar. Menyediakan berbagai macam ukuran ikan untuk keperluan kolam, Bibit maupun Indukan, siap kirim ke seluruh Indonesia dengan garansi aman sampai tujuan</p>
            </div>
        </div>
        <div class="mt-16">
            <div class="flex gap-16 justify-center">
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggta kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggta kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggta kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
                    </div>
                </div>
                
            </div>
            <div class="flex gap-16 justify-center mt-7">
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggta kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggta kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
                    </div>
                </div>
                <div class="flex w-80 gap-3">
                    <img src="{{ url('/img/package.svg') }}" alt="" style="height: 50px">
                    <div class="">
                        <p class="font-semibold">Stok Melimpah</p>
                        <p class="text-slate-500 leading-loose">Sumber Koi mempunyai anggta kelompok tani koi yang siap mensuplai kebutuhan koi seluruh indonesia</p>
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
            <div class="mx-6 flex gap-7 justify-centers">
                <div class="max-w-sm rounded overflow-hidden">
                    <img class="w-full" src="/img/aktivitas.jpg" alt="Sunset in the mountains">
                    <div class="py-4">
                      <div class="font-bold text-xl mb-2">Budidaya</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden">
                    <img class="w-full" src="/img/aktivitas.jpg" alt="Sunset in the mountains">
                    <div class="py-4">
                      <div class="font-bold text-xl mb-2">Budidaya</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden">
                    <img class="w-full" src="/img/aktivitas.jpg" alt="Sunset in the mountains">
                    <div class="py-4">
                      <div class="font-bold text-xl mb-2">Budidaya</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                </div>
            </div>    
        </div>
        {{-- Aktivitas --}}

        {{-- Video Profil --}}
        <div class="pt-24 bg-slate-700">
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
            <div>
                <figure class="">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                        <p class="my-4">If you care for your time, I hands down would go with this."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Bonnie Green</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                        </div>
                    </figcaption>    
                </figure>
            </div>
        </div>
        {{-- Testimoni --}}
    </div>
</body>
</html>