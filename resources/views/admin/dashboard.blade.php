@extends('layouts.admin') {{-- pastikan layout ini sesuai dengan projectmu --}}

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">
        <!-- Kartu Jumlah Pengguna -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Pengguna</h5>
                    <p class="card-text fs-4">{{ $totalUsers ?? '0' }}</p>
                </div>
            </div>
        </div>

        <!-- Kartu Jumlah Data -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Data</h5>
                    <p class="card-text fs-4">{{ $totalData ?? '0' }}</p>
                </div>
            </div>
        </div>

        <!-- Kartu Lainnya -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Notifikasi</h5>
                    <p class="card-text fs-6">Tidak ada notifikasi baru</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
