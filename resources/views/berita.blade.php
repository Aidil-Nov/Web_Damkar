@extends('layouts.app') <!-- Sesuaikan dengan layout Anda -->

@section('content')
    <div class="container mx-auto py-8 px-4 mt-24">
        <h1 class="text-3xl font-bold mb-8">Berita Terkini</h1>
        
        <!-- Panggil komponen -->
        <x-berita :news="$news" columns="lg:grid-cols-3" />
        
    </div>
@endsection