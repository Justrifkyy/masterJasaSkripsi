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
                    <h3 class="text-lg font-medium">Grafik Pesanan Per Bulan</h3>
                    <p class="mt-2 text-sm text-gray-500">(Fitur grafik akan diimplementasikan selanjutnya)</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>