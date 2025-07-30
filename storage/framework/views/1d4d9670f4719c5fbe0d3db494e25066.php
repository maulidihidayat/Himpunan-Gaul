<nav id="navbar" class="sticky top-0 z-20 px-2 bg-white shadow-none lg:px-16">
    <div class="container flex items-center justify-between px-4 py-3 mx-auto">
        
        <a href="<?php echo e(url('/')); ?>" class="flex items-center space-x-4">
            <img src="<?php echo e(asset('images/logo/Mainlogo.png')); ?>" alt="Logo" class="object-contain w-12 h-12"
                width="2000" height="2000">
        </a>

        
        <div class="hidden lg:flex items-center space-x-8 font-medium text-[16px]">
            <div class="flex space-x-4">
                
                <a href="<?php echo e(url('/')); ?>"
                    class="nav-link px-2 py-1 border-b-2 transition duration-200
                   <?php echo e(request()->is('/') ? 'border-b-3 border-orange-600 text-orange-600 font-medium' : 'border-transparent'); ?>">
                    Beranda
                </a>

                
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                        class="nav-link flex items-center px-2 py-1 border-b-2 transition-all duration-300 space-x-1
                        <?php echo e(request()->is('kepengurusan*') || request()->is('gallery*') || request()->is('registrasi*') ? 'border-b-3 border-orange-600 text-orange-600 font-medium' : 'border-transparent'); ?>">
                        <span>Kepengurusan</span>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 z-10 items-center w-56 mx-auto mt-2 text-left bg-white rounded-lg shadow-md top-full">
                        <a href="<?php echo e(route('about.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Tentang
                            Kami</a>
                        <a href="<?php echo e(route('kabinet.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Kabinet
                            Zeta</a>
                        <a href="<?php echo e(route('kepengurusan.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Struktur
                            Organisasi</a>
                        <a href="<?php echo e(route('visi-misi.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Visi
                            Misi</a>
                        <a href="<?php echo e(route('gallery.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Galeri HMPS
                            PI</a>
                        <a href="<?php echo e(route('registrasi.store')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Rekrutmen
                            Anggota</a>
                        <a href="<?php echo e(route('kontak.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Kontak
                            Kami</a>
                    </div>
                </div>

                
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                        class="nav-link flex items-center px-2 py-1 border-b-2 transition duration-200 space-x-1
                        <?php echo e(request()->is('news*') || request()->is('artikel*') || request()->is('pencapaian*') ? 'border-b-3 border-orange-600 text-orange-600' : 'border-transparent'); ?>">
                        <span>Informasi</span>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 z-10 items-center w-56 mx-auto mt-2 text-left bg-white rounded-lg shadow-md top-full">
                        <a href="<?php echo e(route('news.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Berita</a>
                        <a href="<?php echo e(route('artikel.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Artikel</a>
                        <a href="<?php echo e(route('pencapaian.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Pencapaian</a>
                        <a href="<?php echo e(route('beasiswa.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Beasiswa</a>
                    </div>
                </div>

                
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                        class="nav-link flex items-center px-2 py-1 border-b-2 transition duration-200 space-x-1
                        <?php echo e(request()->is('Events*') || request()->is('index*') || request()->is('voice*') ? 'border-b-3 border-orange-600 text-orange-600' : 'border-transparent'); ?>">
                        <span>Event</span>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 z-10 items-center w-56 mx-auto mt-2 text-left bg-white rounded-lg shadow-md top-full">
                        <a href="<?php echo e(route('Events.index')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Safari
                            Ramadhan</a>
                        <a href="<?php echo e(route('Events.voice')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Voice of
                            Confidence</a>
                        <a href="<?php echo e(route('Events.sport')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">Informatic
                            Sport Day</a>
                        <a href="<?php echo e(route('Events.diesnatalis')); ?>"
                            class="block px-4 py-2 text-sm font-medium text-[#52525B] hover:text-orange-500">DiesNatalis</a>

                    </div>
                </div>

                
                <a href="<?php echo e(route('feedback.store')); ?>"
                    class="nav-link px-2 py-1 border-b-2 transition duration-200
                   <?php echo e(request()->is('feedback*') ? 'border-b-3 border-orange-600 font-medium text-orange-600' : 'border-transparent'); ?>">
                    Saran & Komentar
                </a>
            </div>

            
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('filament.admin.pages.dashboard')); ?>"
                    class="font-bold text-[16px] bg-green-500 text-white px-6 py-3 rounded-xl border-[2px] border-b-[4px] border-[#18181B] transition">
                    Dashboard
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('filament.admin.auth.login')); ?>"
                    class="font-bold text-[16px] bg-[#F75801] text-white px-8 py-4 rounded-xl border-[2px] border-b-[4px] border-[#18181B] transition">
                    Masuk
                </a>
            <?php endif; ?>
        </div>

        
        <div class="lg:hidden">
            <button id="menuToggle" class="text-2xl text-gray-700 focus:outline-none">☰</button>
        </div>
    </div>

    
    <div id="mobileMenu" class="fixed inset-0 z-30 hidden px-6 py-6 overflow-y-auto bg-white">
        <div class="flex items-center justify-between mb-6">
            <span class="text-xl font-bold text-[#18181B]">Menu</span>
            <button id="menuClose" class="text-3xl text-gray-700 focus:outline-none">✖</button>
        </div>

        <div class="space-y-4">
            
            <a href="<?php echo e(url('/')); ?>"
                class="block text-center bg-[#fff7ec] border-2 border-[#18181B] p-3 rounded-xl border-b-4">Beranda</a>

            
            <div x-data="{ open: false }" class="border-2 border-[#18181B] rounded-xl border-b-4">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center text-center p-3 font-medium text-[#18181B]">
                    Kepengurusan
                    <svg class="w-5 h-5 transform" :class="{ 'rotate-180': open }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="p-3 space-y-2 bg-[#fff7ec] rounded-b-xl">
                    <a href="<?php echo e(route('about.index')); ?>" class="block hover:text-orange-500">Tentang Kami</a>
                    <a href="<?php echo e(route('kabinet.index')); ?>" class="block hover:text-orange-500">Kabinet Zeta</a>
                    <a href="<?php echo e(route('kepengurusan.index')); ?>" class="block hover:text-orange-500">Struktur
                        Organisasi</a>
                    <a href="<?php echo e(route('visi-misi.index')); ?>" class="block hover:text-orange-500">Visi Misi</a>
                    <a href="<?php echo e(route('gallery.index')); ?>" class="block hover:text-orange-500">Galeri HMPS PI</a>
                    <a href="<?php echo e(route('registrasi.store')); ?>" class="block hover:text-orange-500">Rekrutmen
                        Anggota</a>
                    <a href="<?php echo e(route('kontak.index')); ?>" class="block hover:text-orange-500">Kontak Kami</a>
                </div>
            </div>

            
            <div x-data="{ open: false }" class="border-2 border-[#18181B] rounded-xl border-b-4">
                <button @click="open = !open"
                    class="w-full flex justify-between text-center items-center p-3 font-medium text-[#18181B]">
                    Informasi
                    <svg class="w-5 h-5 transform" :class="{ 'rotate-180': open }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="p-3 space-y-2 bg-[#fff7ec] rounded-b-xl">
                    <a href="<?php echo e(route('news.index')); ?>" class="block hover:text-orange-500">Berita</a>
                    <a href="<?php echo e(route('artikel.index')); ?>" class="block hover:text-orange-500">Artikel</a>
                    <a href="<?php echo e(route('pencapaian.index')); ?>" class="block hover:text-orange-500">Pencapaian</a>
                    <a href="<?php echo e(route('beasiswa.index')); ?>" class="block hover:text-orange-500">Beasiswa</a>
                </div>
            </div>

            
            <div x-data="{ open: false }" class="border-2 border-[#18181B] rounded-xl border-b-4">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center text-center p-3 font-medium text-[#18181B]">
                    Event
                    <svg class="w-5 h-5 transform" :class="{ 'rotate-180': open }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="p-3 space-y-2 bg-[#fff7ec] rounded-b-xl">
                    <a href="<?php echo e(route('Events.index')); ?>" class="block hover:text-orange-500">Safari Ramadhan</a>
                    <a href="<?php echo e(route('Events.voice')); ?>" class="block hover:text-orange-500">Voice of Confidence</a>
                    <a href="<?php echo e(route('Events.sport')); ?>" class="block hover:text-orange-500">Informatic Sport
                        Day</a>
                    <a href="<?php echo e(route('Events.diesnatalis')); ?>" class="block hover:text-orange-500">DiesNatalis</a>
                </div>
            </div>

            
            <a href="<?php echo e(route('feedback.store')); ?>"
                class="block text-center bg-[#fff7ec] border-2 border-[#18181B] p-3 rounded-xl border-b-4">Saran &
                Komentar</a>

            
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('filament.admin.pages.dashboard')); ?>"
                    class="block text-center bg-green-500 text-white border-2 border-[#18181B] p-3 rounded-xl border-b-4 font-medium">
                    Dashboard
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('filament.admin.auth.login')); ?>"
                    class="block text-center bg-orange-600 text-white border-2 border-[#18181B] p-3 rounded-xl border-b-4 font-medium">
                    Masuk
                </a>
            <?php endif; ?>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const menuClose = document.getElementById('menuClose');
        const mobileMenu = document.getElementById('mobileMenu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        menuClose.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    </script>

    <style>
        .nav-link {
            @apply hover:text-blue-600 transition font-medium;
        }
    </style>
</nav>
<?php /**PATH C:\laragon\www\skripsi-cihuy\resources\views/partials/navbar.blade.php ENDPATH**/ ?>