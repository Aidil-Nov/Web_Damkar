@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section class="bg-white py-12 px-4 md:px-8 lg:px-16" id="kontak">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-red-600 mb-8 text-center">Hubungi Kami</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Info Kontak -->
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-800">Informasi Kontak</h3>
                    <p class="flex items-center gap-2"><span>📍</span> Jl. Panglima Sudirman No. 123, Kota Jakarta</p>
                    <p class="flex items-center gap-2"><span>📞</span> Nomor Darurat: 113</p>
                    <p class="flex items-center gap-2"><span>📞</span> Kantor: (021) 5551234</p>
                    <p class="flex items-center gap-2"><span>✉️</span> info@damkar.go.id</p>
                </div>

                <!-- Form Kontak -->
                <div class="p-6 rounded-md">
                    <h3 class="text-lg font-semibold mb-4">Kirim Pesan</h3>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block mb-1 font-medium">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-1 font-medium">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block mb-1 font-medium">Subjek</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block mb-1 font-medium">Pesan</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection