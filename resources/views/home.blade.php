@extends('layouts.app')

@section('title', 'Posko Damkar Kurnia Kota Baru')

@section('content')
    <main class="relative h-screen flex items-center justify-center text-white bg-cover bg-no-repeat">

        <div class="absolute inset-0 bg-black bg-opacity-60 rounded-b-2xl"
            style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url('/assets/images/TKK lahan kobar ujung2.jpg'); background-size: cover; background-position: center;">
        </div>


        <div class="relative z-10 w-full max-w-4xl px-4 text-center">
            <h2 class="text-2xl sm:text-5xl md:text-6xl lg:text-6xl font-sec leading-tight">
                Siap Siaga, Cepat Tanggap, Melindungi Masyarakat
            </h2>
            <p class="text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-8">
                Posko Damkar Kurnia Kobar siap 24 jam setiap hari.
            </p>
            <a href="{{ route('Kontak') }}" class="btn-red">
                Hubungi Kami
            </a>
        </div>
    </main>

    <section class="py-16 px-4 text-center bg-white text-gray-900">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-sec text-3xl sm:text-4xl md:text-5xl mb-4">Dari Rakyat Untuk Rakyat</h2>
            <p class="font-sec text-sm sm:text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                Kami Datang Bukan Sebagai Pahlawan, Tapi Sebagai Saudara.
Pemadam Kebakaran bukan hanya tugas, ini adalah bentuk cinta kami kepada sesama.
            </p>
        </div>


    </section>

    <div class="h-64 sm:h-80 md:h-[32rem] bg-cover bg-center m-8 rounded-2xl"
        style="background-image: url('/assets/images/pemadam.jpg');">
    </div>
    <div class="flex flex-wrap items-center justify-center">
        <div class="scrolling-text-container w-full mx-auto">
            <div class="scrolling-text-kiri text-lg">

Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
Mewujudkan Kota Baru yang aman dan tangguh terhadap kebakaran dan bencana•
            </div>
        </div>
        <div class="scrolling-text-container w-full mx-auto">
            <div class="scrolling-text-kanan font-sec text-7xl">
                Memberikan layanan pemadaman kebakaran yang cepat dan efektif •
                Menyelenggarakan edukasi dan pelatihan keselamatan bagi masyarakat •
                Membangun kerjasama dengan berbagai pihak untuk meningkatkan kesiapsiagaan bencana •
                Memberikan layanan pemadaman kebakaran yang cepat dan efektif •
                Menyelenggarakan edukasi dan pelatihan keselamatan bagi masyarakat •
                Membangun kerjasama dengan berbagai pihak untuk meningkatkan kesiapsiagaan bencana •
                
            </div>
        </div>
        <button class="btn-red mt-8">
            <a href="#tentang">Tentang Kami</a></button>
    </div>

    <x-lokasi />
    <x-berita />
@endsection