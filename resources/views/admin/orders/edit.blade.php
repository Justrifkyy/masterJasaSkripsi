<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- PERUBAHAN 1: Judul Header --}}
            {{ __('Edit Pesanan ID: ') . $order->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- PERUBAHAN 2: Form Action & Method --}}
                    <form action="{{ route('admin.orders.update', $order) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <x-input-label for="user_id" :value="__('Pilih Pelanggan')" />
                            <select id="user_id" name="user_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="">-- Pilih User --</option>
                                @foreach($users as $user)
                                    {{-- PERUBAHAN 3: Set 'selected' berdasarkan $order->user_id --}}
                                    <option value="{{ $user->id }}" {{ old('user_id', $order->user_id) == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }} ({{ $user->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <x-input-label for="service_id" :value="__('Pilih Layanan')" />
                            <select id="service_id" name="service_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="">-- Pilih Layanan --</option>
                                @foreach($services as $service)
                                    {{-- PERUBAHAN 4: Set 'selected' berdasarkan $order->service_id --}}
                                    <option value="{{ $service->id }}" data-harga="{{ $service->harga }}" {{ old('service_id', $order->service_id) == $service->id ? 'selected' : '' }}>
                                        {{ $service->judul }} (Rp {{ number_format($service->harga, 0, ',', '.') }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <x-input-label for="harga_pesanan" :value="__('Harga Kesepakatan (cth: 500000)')" />
                            {{-- PERUBAHAN 5: Set 'value' berdasarkan $order->harga_pesanan --}}
                            <x-text-input id="harga_pesanan" class="block mt-1 w-full" type="number" name="harga_pesanan" :value="old('harga_pesanan', $order->harga_pesanan)" required />
                            <p class="mt-1 text-sm text-gray-500">Harga akan terisi otomatis saat memilih layanan, tapi bisa diubah.</p>
                        </div>

                        <div class="mb-4">
                            <x-input-label for="status" :value="__('Status Awal')" />
                            <select id="status" name="status" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                {{-- PERUBAHAN 6: Set '@selected' berdasarkan $order->status --}}
                                <option value="pending" @selected(old('status', $order->status) == 'pending')>Pending</option>
                                <option value="diproses" @selected(old('status', $order->status) == 'diproses')>Diproses</option>
                                <option value="selesai" @selected(old('status', $order->status) == 'selesai')>Selesai</option>
                                <option value="batal" @selected(old('status', $order->status) == 'batal')>Batal</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('admin.orders.index') }}" class="text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{-- PERUBAHAN 7: Teks Tombol --}}
                                {{ __('Update Pesanan') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- Script JS ini biarkan saja, tetap berguna --}}
    <script>
        document.getElementById('service_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var harga = selectedOption.getAttribute('data-harga');
            if (harga) {
                document.getElementById('harga_pesanan').value = harga;
            }
        });
    </script>
</x-app-layout>