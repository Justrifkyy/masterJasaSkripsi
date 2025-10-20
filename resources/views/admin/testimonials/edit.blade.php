<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Menggunakan nama testimoni di judul --}}
            {{ __('Edit Testimoni: ') . $testimonial->nama }}
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

                    {{-- Ubah action ke route 'update' dan teruskan $testimonial --}}
                    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Tambahkan method PUT untuk update --}}
                        
                        <div class="mb-4">
                            <x-input-label for="nama" :value="__('Nama')" />
                            {{-- Isi value dengan data yang ada --}}
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama', $testimonial->nama)" required autofocus />
                        </div>

                        <div class="mb-4">
                            {{-- Ubah label untuk menandakan opsional --}}
                            <x-input-label for="foto" :value="__('Foto (Kosongkan jika tidak ingin ganti)')" />
                            
                            <div class="mt-2 mb-2">
                                <img src="{{ Storage::url($testimonial->foto) }}" alt="{{ $testimonial->nama }}" class="h-20 w-20 rounded-full object-cover">
                            </div>
                            
                            {{-- Hapus 'required' dari input file --}}
                            <input id="foto" type="file" name="foto" class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                            <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG, JPEG (MAX. 2048KB).</p>
                        </div>

                        <div class="mb-4">
                            <x-input-label for="isi" :value="__('Isi Testimoni')" />
                            {{-- Isi textarea dengan data yang ada --}}
                            <textarea id="isi" name="isi" rows="5" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('isi', $testimonial->isi) }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('admin.testimonials.index') }}" class="text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{-- Ubah teks tombol --}}
                                {{ __('Update Testimoni') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>