@extends('layouts.app')

@section('title', 'Lokasi')

@section('content')

    <section class="bg-white py-12 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-red-600">Lokasi Kami</h2>
            </div>

            <div class="grid">
                <!-- Pos Pusat -->
                <div class=" rounded-md shadow-md overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('/api/placeholder/400/200');"></div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-xl font-semibold text-gray-800">Posko Damkar Kurnia Kota Baru</h3>
                        <p class="text-gray-600">Pos utama dengan peralatan lengkap dan personel siaga 24 jam.</p>
                        <div class="text-sm text-gray-700 space-y-1">
                            <p><span class="mr-2">📍</span> Jl. Prof. M. Yamin - Jl. Kurnia</p>
                            <p><span class="mr-2">📞</span>(+62) 81254475004</p>
                            <p><span class="mr-2">⏰</span>Beroperasi 24 Jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection