<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    {{ __("Selamat datang, Admin!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Pelanggan</h3>
                        <p class="mt-2 text-3xl font-semibold text-gray-900">
                            {{ $totalUsers }}
                        </p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Layanan</h3>
                        <p class="mt-2 text-3xl font-semibold text-gray-900">
                            {{ $totalServices }}
                        </p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Pesanan</h3>
                        <p class="mt-2 text-3xl font-semibold text-gray-900">
                            {{ $totalOrders }}
                        </p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class_ ="text-sm font-medium text-gray-500 uppercase tracking-wider">Pendapatan (Selesai)</h3>
                        <p class_ ="mt-2 text-3xl font-semibold text-gray-900">
                            Rp {{ number_format($totalRevenue, 0, ',', '.') }}
                        </p>
                    </div>
                </div>

            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
            <div class="p-6 text-gray-900">
                <canvas id="ordersChart"></canvas>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('ordersChart').getContext('2d');

        // Ambil data dari PHP (Controller)
        const chartLabels = @json($chartLabels);
        const chartData = @json($chartData);

        new Chart(ctx, {
            type: 'bar', // Tipe grafik: batang
            data: {
                labels: chartLabels,
                datasets: [{
                    label: 'Jumlah Pesanan',
                    data: chartData,
                    backgroundColor: 'rgba(79, 70, 229, 0.5)', // Warna Indigo (Tailwind)
                    borderColor: 'rgba(79, 70, 229, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            // Memastikan sumbu Y hanya angka bulat (1, 2, 3, bukan 1.5)
                            stepSize: 1
                        }
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        display: false // Kita tidak perlu legend jika hanya 1 set data
                    },
                    title: {
                        display: true,
                        text: 'Pesanan 12 Bulan Terakhir'
                    }
                }
            }
        });
    });
</script>
</x-app-layout>