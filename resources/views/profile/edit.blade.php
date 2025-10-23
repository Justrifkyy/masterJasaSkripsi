<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 dark:text-gray-100 leading-tight animate-slide-up">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <!-- Formulir Informasi Profil -->
            <div class="bg-gray-100 dark:bg-gray-800 shadow-md rounded-xl border border-gray-200 dark:border-gray-700 animate-slide-up">
                <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                <div class="p-6 md:p-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-700 rounded-lg flex items-center justify-center group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-gray-100">Informasi Profil</h3>
                    </div>
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Formulir Pembaruan Kata Sandi -->
            <div class="bg-gray-100 dark:bg-gray-800 shadow-md rounded-xl border border-gray-200 dark:border-gray-700 animate-slide-up" style="animation-delay: 0.1s;">
                <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                <div class="p-6 md:p-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-700 rounded-lg flex items-center justify-center group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1-.9-2-2-2s-2 .9-2 2 2 4 2 4m0 0c0 1.1.9 2 2 2s2-.9 2-2-2-4-2-4zm0 0h6m-6 0H6"/>
                            </svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-gray-100">Ubah Kata Sandi</h3>
                    </div>
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Riwayat Pesanan -->
            <div class="bg-gray-100 dark:bg-gray-800 shadow-md rounded-xl border border-gray-200 dark:border-gray-700 animate-slide-up" style="animation-delay: 0.2s;">
                <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                <div class="p-6 md:p-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-700 rounded-lg flex items-center justify-center group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-gray-100">Riwayat Pesanan Saya</h3>
                    </div>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                        {{ __('Daftar semua layanan yang pernah Anda pesan.') }}
                    </p>

                    <div class="mt-6 overflow-x-auto">
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
                                @forelse ($orders as $order)
                                    <tr class="group hover:bg-indigo-50 dark:hover:bg-indigo-900/50 transition-all duration-300 animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{ $order->service->judul ?? 'Layanan Dihapus' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                            Rp {{ number_format($order->harga_pesanan, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @php
                                                $statusClass = '';
                                                $statusText = ucfirst($order->status);
                                                if ($order->status == 'wa_pending') $statusClass = 'bg-indigo-100 text-indigo-800 dark:bg-indigo-600 dark:text-indigo-100';
                                                elseif ($order->status == 'pending') $statusClass = 'bg-yellow-100 text-yellow-800 dark:bg-yellow-600 dark:text-yellow-100';
                                                elseif ($order->status == 'diproses') $statusClass = 'bg-indigo-100 text-indigo-800 dark:bg-indigo-600 dark:text-indigo-100';
                                                elseif ($order->status == 'selesai') $statusClass = 'bg-green-100 text-green-800 dark:bg-green-600 dark:text-green-100';
                                                else $statusClass = 'bg-red-100 text-red-800 dark:bg-red-600 dark:text-red-100';
                                            @endphp
                                            <span class="px-2 py-1 inline-flex text-xs font-semibold rounded-full {{ $statusClass }}">
                                                {{ $statusText }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ $order->created_at->format('d M Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500 dark:text-gray-300">
                                            <div class="flex items-center justify-center space-x-2">
                                                <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                </svg>
                                                <span>Anda belum memiliki riwayat pesanan.</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-slide-up {
            animation: slide-up 0.8s ease-out;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
    </style>
</x-app-layout>