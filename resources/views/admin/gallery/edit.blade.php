@extends('admin.layouts.app')

@section('content')
    <div class="container max-w-4xl mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Edit Berita</h1>
        
        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Input Judul -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" id="judul" value="{{ old('title', $news->title) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            
            <!-- Input Konten -->
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                <textarea name="content" id="content" rows="5" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>{{ old('content', $news->content) }}</textarea>
            </div>
            
            <!-- Input Gambar -->
            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md" accept="image/*">
                
                @if($news->gambar)
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $news->gambar) }}" alt="Gambar Berita" class="w-32 h-32 object-cover mt-1 rounded">
                    </div>
                @endif
            </div>
            
            <!-- Tombol Simpan dan Kembali -->
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Simpan</button>
                <a href="{{ route('admin.news.index') }}" class="ml-3 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
            </div>
        </form>
    </div>
@endsection
