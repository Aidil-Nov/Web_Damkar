@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-4xl mt-24">
    <!-- Breadcrumb -->
    <nav class="flex mb-6">
        <a href="{{ route('berita') }}" class="text-blue-600 hover:text-blue-800">
            &larr; Kembali ke Daftar Berita
        </a>
    </nav>

    <!-- Konten -->
    <article>
        <h1 class="text-3xl font-bold mb-4">{{ $newsItem->title }}</h1>
        
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <span>{{ $newsItem->created_at->format('d M Y') }}</span>
            <span class="mx-2">•</span>
            <span>Oleh: {{ $newsItem->author ?? 'Admin' }}</span>
        </div>

        @if($newsItem->gambar)
        <div class="mb-6 rounded-lg overflow-hidden">
            <img src="{{ asset('storage/'.$newsItem->gambar) }}" 
                 alt="{{ $newsItem->title }}"
                 class="w-full">
        </div>
        @endif

        <div class="prose max-w-none">
            {!! $newsItem->content !!}
        </div>
    </article>
</div>
@endsection