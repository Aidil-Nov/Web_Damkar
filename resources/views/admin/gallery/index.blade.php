@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-800">Daftar Galeri</h1>
        <a href="{{ route('admin.gallery.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Tambah Galeri</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($gallery as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h5 class="text-lg font-semibold text-gray-800">{{ $item->judul }}</h5>
                    <div class="mt-3 flex justify-between">
                        <a href="{{ route('admin.gallery.edit', $item->id) }}" class="text-yellow-500 hover:text-yellow-700">Edit</a>
                        <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
