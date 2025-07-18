<nav id="navbar" class="sticky top-0 z-20 px-16 bg-white shadow-none">
    <div class="container flex items-center justify-between px-4 py-3 mx-auto">
        {{-- Kiri: Logo --}}
        <a href="{{ url('/') }}" class="flex items-center space-x-4">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Logo" class="object-contain w-12 h-12"
                width="2000" height="2000">
        </a>

        {{-- Menu Desktop --}}
        <div class="hidden md:flex items-center space-x-8 font-medium text-[16px]">
            <div class="flex space-x-6">
                {{-- Beranda --}}
                <a href="{{ url('/') }}"
                    class="nav-link px-2 py-1 border-b-2 transition duration-200
                   {{ request()->is('/') ? 'border-b-3 border-orange-600 text-orange-600 font-medium' : 'border-transparent' }}">
                    Beranda
                </a>

                {{-- Dropdown Kepengurusan --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                        class="nav-link flex items-center px-2 py-1 border-b-2 transition-all duration-300 space-x-1
                        {{ request()->is('kepengurusan*') || request()->is('gallery*') || request()->is('registrasi*') ? 'border-b-3 border-orange-600 text-orange-600 font-medium' : 'border-transparent' }}">
                        <span>Kepengurusan</span>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 z-10 items-center w-56 mx-auto mt-2 text-left bg-white rounded-lg shadow-md top-full">
                        <a href="{{ route('about.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Tentang
                            Kami</a>
                        <a href="{{ route('kabinet.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Kabinet
                            Zeta</a>
                        <a href="{{ route('kepengurusan.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Struktur
                            Organisasi</a>
                        <a href="{{ route('visi-misi.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Visi
                            Misi</a>
                        <a href="{{ route('gallery.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Galeri HMPS
                            PI</a>
                        <a href="{{ route('registrasi.store') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Rekrutmen
                            Anggota</a>
                        <a href="{{ route('kontak.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Kontak
                            Kami</a>
                    </div>
                </div>

                {{-- Dropdown Informasi --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                        class="nav-link flex items-center px-2 py-1 border-b-2 transition duration-200 space-x-1
                        {{ request()->is('news*') || request()->is('artikel*') || request()->is('pencapaian*') ? 'border-b-3 border-orange-600 text-orange-600' : 'border-transparent' }}">
                        <span>Informasi</span>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 z-10 items-center w-56 mx-auto mt-2 text-left bg-white rounded-lg shadow-md top-full">
                        <a href="{{ route('news.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Berita</a>
                        <a href="{{ route('artikel.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Artikel</a>
                        <a href="{{ route('pencapaian.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Pencapaian</a>
                        <a href="{{ route('beasiswa.index') }}"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Beasiswa</a>
                    </div>
                </div>

                {{-- Events --}}
                <a href="{{ route('Events.index') }}"
                    class="nav-link px-2 py-1 border-b-2 transition duration-200
                   {{ request()->is('events*') ? 'border-b-3 border-orange-600 font-medium text-orange-600' : 'border-transparent' }}">
                    Events
                </a>

                {{-- Feedback --}}
                <a href="{{ route('feedback.store') }}"
                    class="nav-link px-2 py-1 border-b-2 transition duration-200
                   {{ request()->is('feedback*') ? 'border-b-3 border-orange-600 font-medium text-orange-600' : 'border-transparent' }}">
                    Saran & Komentar
                </a>
            </div>

            {{-- Auth --}}
            @auth
                <a href="{{ route('filament.admin.pages.dashboard') }}"
                    class="font-bold text-[16px] bg-green-500 text-white px-6 py-3 rounded-xl border-[2px] border-b-[4px] border-[#18181B] transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="font-bold text-[16px] bg-[#F75801] text-white px-8 py-4 rounded-xl border-[2px] border-b-[4px] border-[#18181B] transition">
                    Masuk
                </a>
            @endauth
        </div>

        {{-- Hamburger Menu --}}
        <div class="md:hidden">
            <button id="menuToggle" class="text-2xl text-gray-700 focus:outline-none">☰</button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="hidden px-4 pb-4 mx-auto space-y-4">
        @php
            $isActive = fn($path) => request()->is($path) ? 'bg-orange-500 text-blue-700 font-medium' : 'bg-[#fff7ec]';
        @endphp

        <a href="{{ url('/') }}"
            class="block nav-link text-center {{ $isActive('/') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Beranda</a>
        <a href="{{ route('kepengurusan.index') }}"
            class="block nav-link text-center {{ $isActive('kepengurusan*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Struktur
            Organisasi</a>
        <a href="{{ route('artikel.index') }}"
            class="block nav-link text-center {{ $isActive('artikel*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Visi
            Misi</a>
        <a href="{{ route('gallery.index') }}"
            class="block nav-link text-center {{ $isActive('gallery*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Galeri</a>
        <a href="{{ route('registrasi.store') }}"
            class="block nav-link text-center {{ $isActive('registrasi*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Rekrutmen</a>
        <a href="{{ route('pencapaian.index') }}"
            class="block nav-link text-center {{ $isActive('pencapaian*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Pencapaian</a>
        <a href="{{ route('news.index') }}"
            class="block nav-link text-center {{ $isActive('news*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Berita</a>
        <a href="{{ route('Events.index') }}"
            class="block nav-link text-center {{ $isActive('events*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Events</a>
        <a href="{{ route('feedback.store') }}"
            class="block nav-link text-center {{ $isActive('feedback*') }} border-2 border-[#18181B] p-3 rounded-xl border-b-4 hover:bg-red-100">Saran
            & Komentar</a>
        <hr class="border-gray-500">
        @auth
        @else
            <a href="{{ route('filament.admin.auth.login') }}"
                class="block text-center text-white nav-link bg-orange-600 border-2 border-[#18181B] p-3 rounded-xl border-b-4 font-medium">Masuk</a>
        @endauth
    </div>

    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>

    <style>
        .nav-link {
            @apply hover:text-blue-600 transition font-medium;
        }
    </style>
</nav>
