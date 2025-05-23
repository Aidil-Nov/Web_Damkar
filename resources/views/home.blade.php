@extends('layouts.app')

@section('title', 'Home')


@section('content')
    <section class="h-screen flex items-center">
        <div class="max mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                Siap Siaga, Cepat Tanggap, Melindungi Masyarakat
            </h2>
            <p class="text-base max-w-2xl m-auto sm:text-lg mb-8">
                Dinas Pemadam Kebakaran siap 24 jam setiap hari untuk melindungi keselamatan dan properti masyarakat dari
                bahaya kebakaran dan bencana lainnya.
            </p>
            <a href="#kontak"
                class="inline-block bg-red-600 text-white shadow-lg  font-semibold px-6 py-3 rounded-md hover:bg-red-800 transition">
                Hubungi Kami
            </a>
        </div>
    </section>

@endsection