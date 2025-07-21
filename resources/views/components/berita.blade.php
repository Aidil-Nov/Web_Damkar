@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4 mt-24">
    <h1 class="text-3xl font-bold mb-8">Daftar Berita</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($news as $item)
        <a href="{{ route('berita.show', $item->id) }}" class="group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all hover:shadow-xl h-full">
                <div class="h-48 bg-gray-200 overflow-hidden">
                    @if($item->gambar)
                    <img src="{{ asset('storage/'.$item->gambar) }}" 
                         alt="{{ $item->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                    @else
                    <div class="h-full flex items-center justify-center bg-gray-100">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                    <p class="text-gray-500 text-sm">
                        {{ $item->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $news->links() }}
    </div>
</div>
@endsection