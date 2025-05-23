@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Judul -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-red-600">Layanan Kami</h2>
            </div>

            <!-- Grid Layanan -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Kartu Layanan 1 -->
                <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('/api/placeholder/400/200');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-red-700 mb-2">Pemadaman Kebakaran</h3>
                        <p class="text-gray-700">Tim kami terlatih untuk menangani berbagai jenis kebakaran dengan peralatan
                            modern dan respons cepat untuk meminimalisir kerugian.</p>
                    </div>
                </div>

                <!-- Kartu Layanan 2 -->
                <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('/api/placeholder/400/200');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-red-700 mb-2">Penyelamatan dan Evakuasi</h3>
                        <p class="text-gray-700">Layanan penyelamatan dan evakuasi untuk situasi darurat seperti bencana
                            alam, kecelakaan, atau kondisi berbahaya lainnya.</p>
                    </div>
                </div>

                <!-- Kartu Layanan 3 -->
                <div class="bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('/api/placeholder/400/200');"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-red-700 mb-2">Pencegahan dan Edukasi</h3>
                        <p class="text-gray-700">Program-program edukasi dan pelatihan untuk masyarakat tentang cara
                            mencegah kebakaran dan penanganan kondisi darurat.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection