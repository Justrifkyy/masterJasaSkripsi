<footer class="bg-white border-t border-gray-200 mt-16">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <x-application-logo class="block h-10 w-auto" /> 
                    <span class="font-bold text-lg text-gray-900">{{ config('app.name') }}</span>
                </a>
                <p class="text-sm text-gray-500">
                    Solusi cepat dan profesional untuk kebutuhan akademik Anda.
                </p>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Halaman</h3>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-base text-gray-500 hover:text-gray-900">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.services.list') }}" class="text-base text-gray-500 hover:text-gray-900">
                            Layanan
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Bantuan</h3>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a href="{{ route('frontend.how-to-order') }}" class="text-base text-gray-500 hover:text-gray-900">
                            Cara Pesan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.about') }}" class="text-base text-gray-500 hover:text-gray-900">
                            Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Akun</h3>
                <ul class="mt-4 space-y-2">
                    @auth
                        <li>
                            <a href="{{ route('profile.edit') }}" class="text-base text-gray-500 hover:text-gray-900">
                                Profile Saya
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="text-base text-gray-500 hover:text-gray-900">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="text-base text-gray-500 hover:text-gray-900">
                                Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>

        </div>

        <div class="mt-8 border-t border-gray-200 pt-8 text-center">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>