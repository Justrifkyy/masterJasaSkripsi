<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 animate-fade-in">
            <div>
                <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                    {{ __('Edit Layanan: ') . $service->judul }}
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
                        <div class="p-2 bg-indigo-500 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Form Edit Layanan</h3>
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

                    <form action="{{ route('admin.services.update', $service) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-6">
                            <x-input-label for="judul" :value="__('Judul Layanan')" class="text-gray-700 dark:text-gray-300" />
                            <x-text-input id="judul" class="block mt-1 w-full border-gray-300 dark:border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="judul" :value="old('judul', $service->judul)" required autofocus />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="subjudul" :value="__('Subjudul (Opsional)')" class="text-gray-700 dark:text-gray-300" />
                            <x-text-input id="subjudul" class="block mt-1 w-full border-gray-300 dark:border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="subjudul" :value="old('subjudul', $service->subjudul)" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="harga" :value="__('Harga (Hanya Angka, cth: 500000)')" class="text-gray-700 dark:text-gray-300" />
                            <x-text-input id="harga" class="block mt-1 w-full border-gray-300 dark:border-gray-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="number" name="harga" :value="old('harga', $service->harga)" required />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" class="text-black dark:text-gray-300" />
                                <textarea
                                    id="deskripsi"
                                        name="deskripsi"
                                                rows="5"
                                        class="block mt-1 w-full border-gray-700 bg-gray-900 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    >{{ old('deskripsi', $service->deskripsi) }}</textarea>
                                </div>

                        <div class="mb-6">
                            <label for="is_favorite" class="inline-flex items-center">
                                <input id="is_favorite" type="checkbox" name="is_favorite" value="1" class="rounded border-gray-300 dark:border-gray-600 text-indigo-600 shadow-sm focus:ring-indigo-500" @checked(old('is_favorite', $service->is_favorite))>
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Jadikan Layanan Favorit?') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.services.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-500 transition-all duration-150">
                                Batal
                            </a>
                            <x-primary-button class="ml-4 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                {{ __('Update Layanan') }}
                            </x-primary-button>
                        </div>
                    </form>
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
    </style>
</x-app-layout>