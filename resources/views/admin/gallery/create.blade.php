@extends('layouts.app')

@section('content')
    <div class="container max-w-4xl mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Tambah Galeri</h1>

        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md" accept="image/*" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Simpan</button>
                <a href="{{ route('admin.gallery.index') }}" class="ml-3 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
            </div>
        </form>
    </div>
@endsection
