<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Pesanan ID: ') . $order->id }}
            </h2>
            <a href="{{ route('admin.orders.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                &larr; Kembali ke Daftar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Informasi Pesanan</h3>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">ID Pesanan</dt>
                                <dd class="mt-1 text-sm text-gray-900">#{{ $order->id }}</dd>
                            </div>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Tanggal Pesan</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $order->created_at->format('d M Y, H:i') }}</dd>
                            </div>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Terakhir Update</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $order->updated_at->format('d M Y, H:i') }}</dd>
                            </div>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Status</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    @php
                                        $statusClass = '';
                                        if ($order->status == 'pending') $statusClass = 'bg-yellow-100 text-yellow-800';
                                        elseif ($order->status == 'diproses') $statusClass = 'bg-blue-100 text-blue-800';
                                        elseif ($order->status == 'selesai') $statusClass = 'bg-green-100 text-green-800';
                                        else $statusClass = 'bg-red-100 text-red-800';
                                    @endphp
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </dd>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Informasi Pelanggan</h3>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Nama</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $order->user->name ?? 'User Dihapus' }}</dd>
                            </div>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $order->user->email ?? '-' }}</dd>
                            </div>

                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4 mt-6">Informasi Layanan</h3>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Layanan</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $order->service->judul ?? 'Layanan Dihapus' }}</dd>
                            </div>
                            <div class="mb-4">
                                <dt class="text-sm font-medium text-gray-500">Harga Kesepakatan</dt>
                                <dd class="mt-1 text-lg font-semibold text-gray-900">Rp {{ number_format($order->harga_pesanan, 0, ',', '.') }}</dd>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('admin.orders.edit', $order) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            Edit Pesanan Ini
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>