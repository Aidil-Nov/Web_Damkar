@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold text-gray-800">Data Pengunjung</h1>
    <table class="min-w-full table-auto bg-white shadow-md rounded-lg mt-4">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left">No</th>
                <th class="px-4 py-2 text-left">IP Address</th>
                <th class="px-4 py-2 text-left">Halaman</th>
                <th class="px-4 py-2 text-left">Waktu Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $visitor)
                <tr>
                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2">{{ $visitor->ip_address }}</td>
                    <td class="px-4 py-2">{{ $visitor->url }}</td>
                    <td class="px-4 py-2">{{ $visitor->visited_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
