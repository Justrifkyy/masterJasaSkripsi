<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail User: ') . $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Nama</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $user->name }}</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Email</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $user->email }}</s_p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Role</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ ucfirst($user->role) }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Status Akun</h3>
                        <p class="mt-1 text-sm">
                            @if($user->is_active)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Nonaktif
                                </span>
                            @endif
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Tanggal Bergabung</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $user->created_at->format('d M Y, H:i') }}</s_p>
                    </div>

                    <hr class="my-6">

                    <h3 class="text-lg font-medium text-gray-900 mb-2">Riwayat Pesanan</h3>
                    <p class="text-sm text-gray-500">(Fitur ini akan diimplementasikan selanjutnya)</p>

                    
                    <div class="mt-8 flex items-center justify-between">
                        <a href="{{ route('admin.users.index') }}" class="text-gray-600 hover:text-gray-900">
                            &larr; Kembali ke Daftar
                        </a>
                        <a href="{{ route('admin.users.edit', $user) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            Edit User Ini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>