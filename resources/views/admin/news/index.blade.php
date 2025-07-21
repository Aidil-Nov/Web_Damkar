@extends('admin.layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-800">Daftar Berita</h1>
        <a href="{{ route('admin.news.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Tambah Berita</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Judul</th>
                    <th class="px-4 py-2 text-left">Penulis</th>
                    <th class="px-4 py-2 text-left">Tanggal Publikasi</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Gambar</th> <!-- Kolom untuk gambar -->
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $item->title }}</td>
                        <td class="px-4 py-2">{{ $item->author }}</td>
                        <td class="px-4 py-2">
                            {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : '-' }}
                        </td>
                        <td class="px-4 py-2">
                            @if($item->status)
                                <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">Aktif</span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-700 rounded-full">Nonaktif</span>
                            @endif
                        </td>

                        <!-- Menampilkan gambar -->
                        <td class="px-4 py-2">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Berita" class="w-16 h-16 object-cover rounded-md">
                            @else
                                <span class="text-gray-500">Tidak ada gambar</span>
                            @endif
                        </td>

                        <!-- Aksi Edit dan Hapus -->
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('admin.news.edit', $item->id) }}" class="text-yellow-500 hover:text-yellow-700 inline-flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17 3h-4.4l-1.3-1.6A2 2 0 0010.2 0h-1.4a2 2 0 00-1.4.4L7.4 3H3a2 2 0 00-2 2v12a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM9 2h2v2H9V2zm-4 4h12v10H5V6zm2 6h8v2H7v-2z" />
                                </svg>
                                <span>Edit</span>
                            </a>

                            <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 inline-flex items-center space-x-1" onclick="return confirm('Hapus berita ini?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 2a1 1 0 00-.707.293L2.343 5.636A1 1 0 003 7h14a1 1 0 00.657-1.364L14.707 2.293a1 1 0 00-.707-.293H6z" />
                                    </svg>
                                    <span>Hapus</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $news->links() }}
    </div>
@endsection
