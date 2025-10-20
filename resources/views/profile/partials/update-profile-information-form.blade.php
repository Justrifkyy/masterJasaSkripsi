<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="mt-4">
    <x-input-label for="nama_panjang" :value="__('Nama Panjang')" />
    <x-text-input id="nama_panjang" name="nama_panjang" type="text" class="mt-1 block w-full" :value="old('nama_panjang', $user->nama_panjang)" />
    <x-input-error class="mt-2" :messages="$errors->get('nama_panjang')" />
</div>

<div class="mt-4">
    <x-input-label for="asal_sekolah" :value="__('Asal Sekolah / Kampus')" />
    <x-text-input id="asal_sekolah" name="asal_sekolah" type="text" class="mt-1 block w-full" :value="old('asal_sekolah', $user->asal_sekolah)" />
    <x-input-error class="mt-2" :messages="$errors->get('asal_sekolah')" />
</div>

<div class="mt-4">
    <x-input-label for="nim_nisn" :value="__('NIM / NISN')" />
    <x-text-input id="nim_nisn" name="nim_nisn" type="text" class="mt-1 block w-full" :value="old('nim_nisn', $user->nim_nisn)" />
    <x-input-error class="mt-2" :messages="$errors->get('nim_nisn')" />
</div>

<div class="mt-4">
    <x-input-label for="alamat" :value="__('Alamat')" />
    <textarea id="alamat" name="alamat" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('alamat', $user->alamat) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
</div>

<div class="mt-4">
    <x-input-label for="bio" :value="__('Bio Singkat')" />
    <textarea id="bio" name="bio" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('bio', $user->bio) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('bio')" />
</div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
