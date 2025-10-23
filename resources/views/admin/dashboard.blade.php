<x-app-layout>
    <div class="py-8 bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Header Welcome Card -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 overflow-hidden shadow-lg sm:rounded-2xl mb-8 transform hover:scale-[1.01] transition-transform duration-300">
                <div class="p-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-3xl font-bold mb-2">{{ __("Selamat datang, Admin!") }}</h1>
                            <p class="text-indigo-100 text-sm">{{ now()->isoFormat('dddd, D MMMM YYYY') }}</p>
                        </div>
                        <div class="hidden md:block">
                            <svg class="w-24 h-24 text-indigo-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <!-- Total Pelanggan -->
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl border-t-4 border-blue-500">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 rounded-xl">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Pelanggan</h3>
                        <p class="text-4xl font-bold text-gray-900 mb-1">{{ $totalUsers }}</p>
                        <p class="text-xs text-green-600 font-medium">↑ Aktif</p>
                    </div>
                </div>

                <!-- Total Layanan -->
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl border-t-4 border-green-500">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-green-100 rounded-xl">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Layanan</h3>
                        <p class="text-4xl font-bold text-gray-900 mb-1">{{ $totalServices }}</p>
                        <p class="text-xs text-blue-600 font-medium">Tersedia</p>
                    </div>
                </div>

                <!-- Total Pesanan -->
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl border-t-4 border-purple-500">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-purple-100 rounded-xl">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Pesanan</h3>
                        <p class="text-4xl font-bold text-gray-900 mb-1">{{ $totalOrders }}</p>
                        <p class="text-xs text-purple-600 font-medium">Semua Status</p>
                    </div>
                </div>

                <!-- Pendapatan -->
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl transform hover:scale-105 transition-all duration-300 hover:shadow-2xl border-t-4 border-yellow-500">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-yellow-100 rounded-xl">
                                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Pendapatan</h3>
                        <p class="text-3xl font-bold text-gray-900 mb-1">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</p>
                        <p class="text-xs text-gray-500 font-medium">Pesanan Selesai</p>
                    </div>
                </div>

            </div>

            <!-- Chart Section -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-2xl">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Statistik Pesanan</h2>
                            <p class="text-sm text-gray-500 mt-1">Data pesanan 12 bulan terakhir</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                12 Bulan
                            </span>
                        </div>
                    </div>
                    <div class="relative" style="height: 400px;">
                        <canvas id="ordersChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('ordersChart').getContext('2d');

            const chartLabels = @json($chartLabels);
            const chartData = @json($chartData);

            // Gradient untuk bar chart
            const gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(99, 102, 241, 0.8)');
            gradient.addColorStop(1, 'rgba(139, 92, 246, 0.3)');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: chartLabels,
                    datasets: [{
                        label: 'Jumlah Pesanan',
                        data: chartData,
                        backgroundColor: gradient,
                        borderColor: 'rgba(99, 102, 241, 1)',
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1,
                                font: {
                                    size: 12,
                                    weight: '500'
                                },
                                color: '#6B7280'
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                drawBorder: false
                            }
                        },
                        x: {
                            ticks: {
                                font: {
                                    size: 12,
                                    weight: '500'
                                },
                                color: '#6B7280'
                            },
                            grid: {
                                display: false,
                                drawBorder: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            padding: 12,
                            borderRadius: 8,
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 13
                            },
                            callbacks: {
                                label: function(context) {
                                    return 'Pesanan: ' + context.parsed.y;
                                }
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    },
                    animation: {
                        duration: 1000,
                        easing: 'easeInOutQuart'
                    }
                }
            });
        });
    </script>
</x-app-layout>