<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 animate-fade-in">
            <div>
                <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                    {{ __('Detail Layanan: ') . $service->judul }}
                </h2>
            </div>
            <a href="{{ route('admin.services.index') }}" 
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
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Detail Layanan</h3>
                    </div>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4 animate-slide-up delay-100">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Judul Layanan</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $service->judul }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-100">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Subjudul</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $service->subjudul ?? '-' }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-200">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Harga</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Rp {{ number_format($service->harga, 0, ',', '.') }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-200">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Status Favorit</h3>
                            <p class="mt-1 text-sm flex items-center">
                                @if($service->is_favorite)
                                    <span class="px-3 py-1 bg-gradient-to-r from-yellow-400 to-yellow-500 text-white text-xs font-semibold rounded-full shadow-sm">
                                        Ya
                                    </span>
                                @else
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-gray-300 text-xs font-semibold rounded-full shadow-sm">
                                        Tidak
                                    </span>
                                @endif
                            </p>
                        </div>

                        <div class="mb-4 md:col-span-2 animate-slide-up delay-300">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Deskripsi</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 whitespace-pre-line flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                </svg>
                                {!! nl2br(e($service->deskripsi)) !!}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-400">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Dibuat Pada</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $service->created_at->format('d M Y, H:i') }}
                            </p>
                        </div>

                        <div class="mb-4 animate-slide-up delay-400">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Terakhir Diupdate</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $service->updated_at->format('d M Y, H:i') }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <a href="{{ route('admin.services.edit', $service) }}" 
                           class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white font-medium rounded-lg hover:from-indigo-600 hover:to-indigo-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Layanan Ini
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