<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Layanan: ') . $service->judul }}
            </h2>
            <a href="{{ route('admin.services.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                &larr; Kembali ke Daftar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Judul Layanan</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $service->judul }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Subjudul</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $service->subjudul ?? '-' }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Harga</h3>
                        <p class="mt-1 text-sm text-gray-600">Rp {{ number_format($service->harga, 0, ',', '.') }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Status Favorit</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            @if($service->is_favorite)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Ya
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Tidak
                                </span>
                            @endif
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Deskripsi</h3>
                        <p class="mt-1 text-sm text-gray-600 whitespace-pre-line">{!! nl2br(e($service->deskripsi)) !!}</p>
                    </div>

                    <hr class="my-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Dibuat Pada</h3>
                            <p class="mt-1 text-sm text-gray-600">{{ $service->created_at->format('d M Y, H:i') }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Terakhir Diupdate</h3>
                            <p class="mt-1 text-sm text-gray-600">{{ $service->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <a href="{{ route('admin.services.edit', $service) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            Edit Layanan Ini
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>