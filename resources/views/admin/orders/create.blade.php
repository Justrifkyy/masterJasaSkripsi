<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 animate-fade-in">
            <div>
                <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                    {{ __('Tambah Pesanan Baru') }}
                </h2>
            </div>
            <a href="{{ route('admin.orders.index') }}" 
               class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-gray-500 to-gray-600 text-white font-medium rounded-lg hover:from-gray-600 hover:to-gray-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Daftar
            </a>
        </div>
    </x-slot>

    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden border border-gray-200 dark:border-gray-700 animate-slide-up">
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 px-6 py-5 border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center">
                        <div class="p-2 bg-green-500 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Form Tambah Pesanan</h3>
                    </div>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900 dark:to-red-800 border-l-4 border-red-500 rounded-lg shadow-sm animate-slide-up delay-100">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                <ul class="text-red-700 dark:text-red-300">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('admin.orders.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-6">
                            <x-input-label for="user_id" :value="__('Pilih Pelanggan')" class="text-gray-700 dark:text-gray-300" />
                            <select id="user_id" name="user_id" class="block mt-1 w-full border-gray-300 dark:border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>
                                <option value="">-- Pilih Pelanggan --</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }} ({{ $user->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-6">
                            <x-input-label for="service_id" :value="__('Pilih Layanan')" class="text-gray-700 dark:text-gray-300" />
                            <select id="service_id" name="service_id" class="block mt-1 w-full border-gray-300 dark:border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>
                                <option value="">-- Pilih Layanan --</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" data-harga="{{ $service->harga }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                        {{ $service->judul }} (Rp {{ number_format($service->harga, 0, ',', '.') }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-6">
                            <x-input-label for="harga_pesanan" :value="__('Harga Kesepakatan (cth: 500000)')" class="text-gray-700 dark:text-gray-300" />
                            <x-text-input id="harga_pesanan" class="block mt-1 w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100 border-gray-300 dark:border-gray-600 rounded-md shadow-sm" type="number" name="harga_pesanan" :value="old('harga_pesanan')" required />
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Harga akan terisi otomatis saat memilih layanan, tapi bisa diubah.</p>
                        </div>

                        <div class="mb-6">
                            <x-input-label for="status" :value="__('Status Awal')" class="text-gray-700 dark:text-gray-300" />
                            <select id="status" name="status" class="block mt-1 w-full border-gray-300 dark:border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100" required>
                                <option value="wa_pending" @selected(old('status') == 'wa_pending')>Pending WA (Belum Deal)</option>
                                <option value="pending" @selected(old('status') == 'pending')>Pending (Menunggu Pembayaran)</option>
                                <option value="diproses" @selected(old('status') == 'diproses')>Diproses</option>
                                <option value="selesai" @selected(old('status') == 'selesai')>Selesai</option>
                                <option value="batal" @selected(old('status') == 'batal')>Batal</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.orders.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-500 transition-all duration-150">
                                Batal
                            </a>
                            <x-primary-button class="ml-4 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                {{ __('Simpan Pesanan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('service_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var harga = selectedOption.getAttribute('data-harga');
            if (harga) {
                document.getElementById('harga_pesanan').value = harga;
            }
        });
    </script>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-fade-in {
            animation: fade-in 0.8s ease-out;
        }
        .animate-slide-up {
            animation: slide-up 0.8s ease-out;
        }
        .delay-100 { animation-delay: 0.1s; }
    </style>
</x-app-layout>