@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <section class="bg-white py-12 px-4 md:px-8 lg:px-16">
    <div class=" mb-12 pt-12">     
            <h2 class="text-5xl font-sec inline-block pb-2 relative ">
                Galeri
            </h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/anggota.jpg') }}" alt="Tim Pemadam Kebakaran"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Tim Pemadam dalam Aksi
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/oto.jpg') }}" alt="Armada Mobil Pemadam"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Armada Mobil Pemadam Terbaru
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/TKK ks.tubun.jpg') }}" alt="Latihan Penanggulangan Kebakaran"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Latihan Rutin Tim
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/TKK lahan kobar ujung.jpg') }}" alt="Edukasi Masyarakat"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Program Edukasi Masyarakat
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/TKK lahan kobar ujung 3.jpg') }}" alt="Personel Bersiaga"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Personel Siap Siaga
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/pembersihan saluran air 3.jpg') }}" alt="Pemadaman Kebakaran"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Pemadaman Kebakaran Gedung
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/TKK adis.jpg') }}" alt="Peralatan Pemadam"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Peralatan Modern
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                <img src="{{ asset('/assets/images/pembersihan saluran air.jpg') }}" alt="Simulasi Evakuasi"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                    Simulasi Evakuasi
                </div>
            </div>
        </div>
    </section>
@endsection