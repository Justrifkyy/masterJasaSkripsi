<x-app-layout> 
    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100 animate-slide-up">Layanan Kami</h2>
                <p class="text-base md:text-lg text-gray-600 dark:text-gray-300 mt-3 max-w-xl mx-auto animate-slide-up delay-100">
                    Temukan layanan yang paling sesuai dengan kebutuhan akademik Anda
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse ($services as $service)
                    <div class="group bg-gray-100 dark:bg-gray-800 overflow-hidden rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-200 dark:border-gray-700 flex flex-col animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                        <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors min-h-[48px]">{{ $service->judul }}</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">{{ $service->subjudul }}</p>
                            </div>
                            
                            <div class="mb-4 pb-4 border-b border-gray-200 dark:border-gray-700">
                                <span class="text-sm text-gray-500 dark:text-gray-400 font-medium">Mulai dari</span>
                                <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mt-1">
                                    Rp {{ number_format($service->harga, 0, ',', '.') }}
                                </p>
                            </div>
                            
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-6 flex-grow">
                                {{ Str::limit($service->deskripsi, 80) }}
                            </p>
                            
                            <a href="{{ route('frontend.services.show', $service) }}" 
                               class="flex items-center justify-center w-full px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-lg transition-all duration-300 shadow-sm hover:shadow-md mt-auto">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-12 animate-slide-up">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full mb-3">
                            <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-base font-semibold">Belum ada layanan yang tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12 flex justify-center">
                {{ $services->links('pagination::tailwind') }}
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
    </style>
</x-app-layout>