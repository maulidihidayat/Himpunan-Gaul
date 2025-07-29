<section id="hallo"
    class="container relative flex flex-col items-center justify-between min-h-screen gap-10 px-6 py-20 mx-auto md:flex-row md:gap-16 lg:py-32">

    <!-- Background Decorative -->
    <span class="absolute left-0 p-20 text-white rounded-full bg-red-400/40 -z-40 blur-3xl mt-80"></span>

    <!-- Teks -->
    <div class="relative z-10 order-2 max-w-xl text-center md:order-1 md:text-left">
        <img src="/images/emote/star.svg" alt="emote" class="absolute object-cover w-8 h-8 -mt-16 md:w-12 md:h-12">
        <h1 class="mb-4 text-3xl font-bold leading-snug text-[#18181B] sm:text-4xl md:text-5xl">
            Halo Informatics <br /><span class="text-orange-500">Education!</span>
        </h1>
        <p class="mb-6 text-base leading-relaxed text-[#52525B] sm:text-lg md:text-[18px]">
            Selamat datang di HMPS Pendidikan Informatika tempat di mana <span
                class="font-medium text-[#18181B]">inovasi
                teknologi</span> dan <span class="font-medium text-[#52525B]">pendidikan</span> bersatu
            untuk membentuk generasi masa depan yang tangguh, kreatif, dan visioner.
        </p>
        <a href="{{ route('about.index') }}"
            class="inline-block font-bold text-sm sm:text-base md:text-[16px] bg-orange-600 text-white px-6 sm:px-7 py-3 sm:py-4 rounded-xl border-2 border-b-4 border-[#18181B] hover:border-b-7 transition-all duration-300 mt-6">
            Kenalan yuk!
        </a>
    </div>

    <!-- Gambar -->
    <div class="relative flex justify-center order-1 md:order-2 md:justify-end">
        <img src="/images/HMPS.png" alt="Hallo PI"
            class="w-80 md:w-[400px] lg:w-[500px] object-contain transition duration-300 ease-in-out hover:scale-105">

        <!-- Emote di pojok gambar -->
        <img src="/images/emote/Emoticon Vibes (2).svg" alt="emote"
            class="absolute w-8 h-8 right-4 bottom-4 md:w-12 md:h-12">
    </div>
</section>
