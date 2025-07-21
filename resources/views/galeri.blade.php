@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<section class="bg-white py-12 px-4 md:px-8 lg:px-16">
    <div class="mb-12 pt-12">
        <h2 class="text-5xl font-sec inline-block pb-2 relative">Galeri</h2>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($galleries as $gallery)
        <div class="relative group overflow-hidden rounded-xl h-48">
            <img src="{{ asset('storage/'.$gallery->gambar) }}" 
                 alt="{{ $gallery->judul ?? 'Galeri Damkar' }}"
                 class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute bottom-0 left-0 right-0 bg-red-600 bg-opacity-80 text-white p-2 text-sm transform translate-y-full group-hover:translate-y-0 transition duration-300">
                {{ $gallery->judul ?? 'Galeri Damkar' }}
                @if($gallery->deskripsi)
                    <p class="text-xs mt-1">{{ Str::limit($gallery->deskripsi, 50) }}</p>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection