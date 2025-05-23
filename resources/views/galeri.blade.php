@extends('layouts.app')

@section('title', 'Galeri')

@section('Galeri')
 <section id="galeri" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 inline-block pb-2 relative">
                    Galeri Foto
                    <span class="absolute bottom-0 left-1/4 w-1/2 h-1 bg-red-600"></span>
                </h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Tim Pemadam Kebakaran" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Tim Pemadam dalam Aksi
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Armada Mobil Pemadam" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Armada Mobil Pemadam Terbaru
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Latihan Penanggulangan Kebakaran" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Latihan Rutin Tim
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Edukasi Masyarakat" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Program Edukasi Masyarakat
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Personel Bersiaga" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Personel Siap Siaga
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Pemadaman Kebakaran" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Pemadaman Kebakaran Gedung
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Peralatan Pemadam" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Peralatan Modern
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg h-64 group cursor-pointer">
                    <img src="/api/placeholder/300/300" alt="Simulasi Evakuasi" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white p-3 transform translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                        Simulasi Evakuasi
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection