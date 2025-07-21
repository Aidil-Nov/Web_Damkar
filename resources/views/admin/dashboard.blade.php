@extends('admin.layouts.app') {{-- pastikan layout ini sesuai dengan projectmu --}}

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard Admin</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Kartu Jumlah Pengguna -->
            <div class="bg-blue-500 text-white rounded-lg shadow-lg">
                <div class="p-6">
                    <h5 class="text-xl font-semibold">Total Pengguna</h5>
                    <p class="text-4xl mt-2">{{ $totalUsers ?? '0' }}</p>
                </div>
            </div>

            <!-- Kartu Jumlah Data -->
            <div class="bg-green-500 text-white rounded-lg shadow-lg">
                <div class="p-6">
                    <h5 class="text-xl font-semibold">Total Berita</h5>
                    <p class="text-4xl mt-2">{{ $totalData ?? '0' }}</p>
                </div>
            </div>
            <div class="bg-red-500 text-white rounded-lg shadow-lg">
                <div class="p-6">
                    <h5 class="text-xl font-semibold">Total Gallery</h5>
                    <p class="text-4xl mt-2">{{ $totalGallery ?? '0' }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection