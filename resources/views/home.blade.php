@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="h-screen flex items-center justify-center text-white bg-cover bg-no-repeat">
        <!-- Background semi-transparent dengan gradient -->
        <div class="absolute inset-0"
            style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/TKK lahan kobar ujung2.jpg'); background-size: cover; background-position: center;">
        </div>

        <!-- Konten utama -->
        <div class="relative z-10 max-w-4xl px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                Siap Siaga, Cepat Tanggap, Melindungi Masyarakat
            </h2>
            <p class="text-base sm:text-lg max-w-2xl mx-auto mb-8">
                Dinas Pemadam Kebakaran siap 24 jam setiap hari untuk melindungi keselamatan dan properti masyarakat dari
                bahaya kebakaran dan bencana lainnya.
            </p>
            <a href="{{ route('Kontak') }}"
                class="inline-block bg-red-600 text-white shadow-lg font-semibold px-6 py-3 rounded-md hover:bg-red-800 transition">
                Hubungi Kami
            </a>
        </div>
    </main>

    <!-- Komponen tambahan -->
    <x-lokasi />
    <x-layanan />
@endsection