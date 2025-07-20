@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <section class="bg-white py-12 px-4 md:px-8 lg:px-16">
    
        <div class=" mb-12 pt-12">
            <h2 class="text-5xl font-sec inline-block pb-2 relative ">
                Galeri
            </h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <div class="relative group overflow-hidden rounded-xl h-48">
                <img src="{{ asset('/assets/images/anggota.jpg') }}" alt="Tim"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Tim Pemadam dalam Aksi
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-xl h-48">
                <img src="{{ asset('/assets/images/oto.jpg') }}" alt="Armada"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Armada Mobil Pemadam
                </div>
            </div>


            <div class="relative group overflow-hidden rounded-xl col-span-2 row-span-2">
                <img src="{{ asset('/assets/images/TKK lahan kobar ujung.jpg') }}" alt="Utama"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-90 text-white p-4 text-base transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Aksi Pemadaman di Lokasi Utama
                </div>
            </div>


            <div class="relative group overflow-hidden rounded-xl h-48">
                <img src="{{ asset('/assets/images/TKK ks.tubun.jpg') }}" alt="Latihan"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Latihan Rutin Tim
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-xl h-48">
                <img src="{{ asset('/assets/images/pembersihan saluran air.jpg') }}" alt="Simulasi"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Simulasi Evakuasi
                </div>
            </div>

            <div class="relative group overflow-hidden rounded-xl h-48">
                <img src="{{ asset('/assets/images/TKK lahan kobar ujung 3.jpg') }}" alt="Bersiaga"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Personel Siaga
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-xl h-48">
                <img src="{{ asset('/assets/images/TKK adis.jpg') }}" alt="Peralatan"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Peralatan Modern
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-xl col-span-2 h-48">
                <img src="{{ asset('/assets/images/pembersihan saluran air 3.jpg') }}" alt="Gedung"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-90 text-white p-3 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                    Pemadaman Kebakaran Gedung
                </div>
            </div>
        </div>
    </section>
@endsection