<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 animate-fade-in">
            <div>
                <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                    {{ __('Detail Pengguna: ') . $user->name }}
                </h2>
            </div>
            <a href="{{ route('admin.users.index') }}" 
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
                        <div class="p-2 bg-blue-500 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Detail Pengguna</h3>
                    </div>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4 animate-slide-up delay-100">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Nama</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $user->name }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-100">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Email</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ $user->email }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-200">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Role</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ ucfirst($user->role) }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-200">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Status Akun</h3>
                            <p class="mt-1 text-sm flex items-center">
                                @if($user->is_active)
                                    <span class="px-3 py-1 bg-gradient-to-r from-green-400 to-green-500 text-white text-xs font-semibold rounded-full shadow-sm">
                                        Aktif
                                    </span>
                                @else
                                    <span class="px-3 py-1 bg-gradient-to-r from-red-400 to-red-500 text-white text-xs font-semibold rounded-full shadow-sm">
                                        Nonaktif
                                    </span>
                                @endif
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-300">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Tanggal Bergabung</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $user->created_at->format('d M Y, H:i') }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 md:col-span-2 animate-slide-up delay-400">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">Riwayat Pesanan</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-200 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Layanan</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Harga</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tgl Pesan</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-100 dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @isset($orders)
                                        @forelse ($orders as $order)
                                            <tr class="group hover:bg-indigo-50 dark:hover:bg-indigo-900/50 transition-all duration-300 animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    {{ $order->service->judul ?? 'Layanan Dihapus' }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                                    Rp {{ number_format($order->harga_pesanan ?? 0, 0, ',', '.') }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @php
                                                        $statusClass = '';
                                                        $statusText = ucfirst($order->status ?? 'tidak diketahui');
                                                        if (($order->status ?? '') == 'wa_pending' || ($order->status ?? '') == 'diproses')
                                                            $statusClass = 'bg-indigo-100 text-indigo-800 dark:bg-indigo-600 dark:text-indigo-100';
                                                        elseif (($order->status ?? '') == 'pending')
                                                            $statusClass = 'bg-yellow-100 text-yellow-800 dark:bg-yellow-600 dark:text-yellow-100';
                                                        elseif (($order->status ?? '') == 'selesai')
                                                            $statusClass = 'bg-green-100 text-green-800 dark:bg-green-600 dark:text-green-100';
                                                        else
                                                            $statusClass = 'bg-red-100 text-red-800 dark:bg-red-600 dark:text-red-100';
                                                    @endphp
                                                    <span class="px-2 py-1 inline-flex text-xs font-semibold rounded-full {{ $statusClass }}">
                                                        {{ $statusText }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                                    {{ $order->created_at ? $order->created_at->format('d M Y') : '-' }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500 dark:text-gray-300">
                                                    <div class="flex items-center justify-center space-x-2">
                                                        <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                        </svg>
                                                        <span>Pengguna belum memiliki riwayat pesanan.</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    @else
                                        <tr>
                                            <td colspan="4" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500 dark:text-gray-300">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                    </svg>
                                                    <span>Pengguna belum memiliki riwayat pesanan.</span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-8 flex items-center justify-between">
                        <a href="{{ route('admin.users.index') }}" 
                           class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-500 transition-all duration-150">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali ke Daftar
                        </a>
                        <a href="{{ route('admin.users.edit', $user) }}" 
                           class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white font-medium rounded-lg hover:from-indigo-600 hover:to-indigo-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Pengguna Ini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
    </style>
</x-app-layout>