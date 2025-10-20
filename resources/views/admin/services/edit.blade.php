<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Layanan: ') . $service->judul }}
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

                    <form action="{{ route('admin.services.update', $service) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <x-input-label for="judul" :value="__('Judul Layanan')" />
                            <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" :value="old('judul', $service->judul)" required autofocus />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="subjudul" :value="__('Subjudul (Opsional)')" />
                            <x-text-input id="subjudul" class="block mt-1 w-full" type="text" name="subjudul" :value="old('subjudul', $service->subjudul)" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="harga" :value="__('Harga (Hanya Angka, cth: 500000)')" />
                            <x-text-input id="harga" class="block mt-1 w-full" type="number" name="harga" :value="old('harga', $service->harga)" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                            <textarea id="deskripsi" name="deskripsi" rows="5" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('deskripsi', $service->deskripsi) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="is_favorite" class="inline-flex items-center">
                                <input id="is_favorite" type="checkbox" name="is_favorite" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" @checked(old('is_favorite', $service->is_favorite))>
                                <span class="ms-2 text-sm text-gray-600">{{ __('Jadikan Layanan Favorit?') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('admin.services.index') }}" class="text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Update Layanan') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>