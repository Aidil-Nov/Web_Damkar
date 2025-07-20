@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Admin Dashboard</h1>

        <!-- Ringkasan Data -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Total Berita -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-700">Total Berita</h2>
                <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalBerita }}</p>
            </div>

            <!-- Total Galeri -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-700">Total Galeri</h2>
                <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalGaleri }}</p>
            </div>

            <!-- Total Pengunjung -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-700">Total Pengunjung</h2>
                <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalPengunjung }}</p>
            </div>
        </div>

        <!-- Statistik / Grafik -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-700">Statistik Pengunjung</h2>
            <div class="bg-white shadow-lg rounded-lg p-6 mt-4">
                <canvas id="visitorChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('visitorChart').getContext('2d');
        var visitorChart = new Chart(ctx, {
            type: 'line', // Jenis grafik
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'], // Label untuk sumbu X (bulan)
                datasets: [{
                    label: 'Jumlah Pengunjung',
                    data: [12, 19, 3, 5, 2, 3, 10], // Data jumlah pengunjung setiap bulan
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna grafik
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna latar belakang grafik
                    fill: true, // Isi grafik
                    tension: 0.1 // Kelembutan garis
                }]
            },
            options: {
                responsive: true, // Responsif terhadap ukuran layar
                plugins: {
                    legend: {
                        position: 'top', // Posisi legenda
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.raw + ' pengunjung'; // Format tooltip
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
