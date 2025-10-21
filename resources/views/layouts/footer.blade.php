<footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 mt-16">
    <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Brand Section -->
            <div class="space-y-4 animate-slide-up">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <x-application-logo class="block h-10 w-auto fill-current text-indigo-600 dark:text-indigo-400" />
                    <span class="font-bold text-xl text-gray-900 dark:text-gray-100">{{ config('app.name') }}</span>
                </a>
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed max-w-xs">
                    Solusi akademik terpercaya untuk mendukung perjalanan pendidikan Anda dengan layanan profesional.
                </p>
                <!-- Social Media Links -->
                <div class="flex space-x-4 mt-4">
                    <a href="https://wa.me/6281234567890" class="text-gray-500 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-500 transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com" class="text-gray-500 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-500 transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 3.668.227 1.981 1.97 1.826 5.354.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.155 3.384 1.897 5.071 5.281 5.226 1.28.058 1.689.072 4.948.072s3.668-.014 4.948-.072c3.384-.155 5.071-1.897 5.226-5.281.058-1.28.072-1.689.072-4.948s-.014-3.668-.072-4.948c-.155-3.384-1.897-5.071-5.226-5.281C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100-2.88 1.44 1.44 0 000 2.88z"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com" class="text-gray-500 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-500 transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100 uppercase tracking-wider animate-fade-in">Halaman</h3>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.services.list') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.about') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.how-to-order') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                            Cara Pesan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Account Links -->
            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-gray-100 uppercase tracking-wider animate-fade-in">Akun</h3>
                <ul class="mt-4 space-y-3">
                    @auth
                        <li>
                            <a href="{{ route('profile.edit') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                                Profil Saya
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();"
                                   class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                                    Keluar
                                </a>
                            </form>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                                Masuk
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="text-base text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300">
                                    Daftar
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-6 text-center animate-fade-in">
            <p class="text-sm text-gray-500 dark:text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. Hak cipta dilindungi.</p>
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
    </style>
</footer>