<footer class="w-full bg-white dark:bg-[#18181B] border-t border-neutral-200 dark:border-neutral-800 mt-90">
    <div class="container px-4 mx-auto space-y-12 py-14">

        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-y-8 md:gap-x-12">

            
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <img src="<?php echo e(asset('images/logo/Mainlogo.png')); ?>" alt="Logo" class="object-contain w-14 h-14">
                    <div>
                        <h2 class="text-lg font-bold text-[#18181B] dark:text-white">HMPS Pendidikan Informatika</h2>
                        <p class="text-sm leading-snug text-neutral-600 dark:text-neutral-400">Universitas Hamzanwadi</p>
                    </div>
                </div>
                <p class="max-w-xs text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
                    Berinovasi, Berkontribusi, dan Berprestasi untuk menciptakan himpunan yang aktif, produktif, dan
                    inspiratif.
                </p>
                <div class="flex pt-2 space-x-4">
                    <a href="https://instagram.com/"
                        class="text-orange-600 hover:text-white hover:scale-110 hover:rotate-3" target="_blank"><i
                            class="text-xl fab fa-instagram"></i></a>
                    <a href="https://facebook.com/"
                        class="text-orange-600 hover:text-white hover:scale-110 hover:rotate-3" target="_blank"><i
                            class="text-xl fab fa-facebook"></i></a>
                    <a href="#" class="text-orange-600 hover:text-white hover:scale-110 hover:rotate-3"
                        target="_blank"><i class="text-xl fab fa-tiktok"></i></a>
                    <a href="#" class="text-orange-600 hover:text-white hover:scale-110 hover:rotate-3"
                        target="_blank"><i class="text-xl fab fa-youtube"></i></a>
                </div>
            </div>

            
            <div>
                <h3 class="mb-4 text-lg font-semibold text-[#18181B] dark:text-white">Media</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('artikel.index')); ?>"
                            class="text-orange-600 hover:underline dark:text-neutral-300 ">Artikel</a></li>
                    <li><a href="<?php echo e(route('news.index')); ?>"
                            class="text-orange-600 hover:underline dark:text-neutral-300 ">Berita</a></li>
                    <li><a href="<?php echo e(route('gallery.index')); ?>"
                            class="text-orange-600 hover:underline dark:text-neutral-300 ">Galeri</a></li>
                    <li><a href="<?php echo e(route('pencapaian.index')); ?>"
                            class="text-orange-600 hover:underline dark:text-neutral-300 ">Pencapaian</a></li>
                    <li><a href="<?php echo e(route('kepengurusan.index')); ?>"
                            class="text-orange-600 hover:underline dark:text-neutral-300 ">Struktur Pengurus</a></li>
                    <li><a href="#faq" class="text-orange-600 hover:underline dark:text-neutral-300">FAQ</a></li>
                </ul>
            </div>

            
            <div class="mt-6 md:mt-0">
                <h3 class="mb-4 text-lg font-semibold text-[#18181B] dark:text-white">Lainnya</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('filament.admin.auth.login')); ?>"
                            class="text-orange-600 hover:underline dark:text-neutral-300">Masuk</a></li>
                    <li><a href="#kontak" class="text-orange-600 hover:underline dark:text-neutral-300">Hubungi Kami</a>
                    </li>
                    <li><a href="#highlight" class="text-orange-600 hover:underline dark:text-neutral-300">Highlight</a>
                    </li>
                </ul>
            </div>

            
            <div>
                <h3 class="mb-4 text-lg font-semibold text-[#18181B] dark:text-white">Lokasi Kami</h3>
                <div
                    class="overflow-hidden border shadow-md aspect-video rounded-xl border-neutral-300 dark:border-neutral-700">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.487762563463!2d116.52707867357087!3d-8.645072691401738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4eb0976cb78f%3A0x1dfeb9992591f5bf!2sHAMZANWADI%20UNIVERSITY!5e0!3m2!1sen!2sid!4v1751904231873!5m2!1sen!2sid"
                        class="w-full h-full border-0" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>

        
        <div
            class="flex flex-col-reverse items-center justify-between pt-8 mt-6 text-sm text-center border-t border-neutral-200 dark:border-neutral-700 md:flex-row">
            <p class="text-neutral-600 dark:text-neutral-400">
                &copy; <?php echo e(date('Y')); ?> <span class="font-semibold">HMPS Pendidikan Informatika</span>. All rights
                reserved. Powered by <span class="font-semibold text-orange-600">Kabinet Zeta</span>.
            </p>
            <a href="#kontak" class="mb-4 text-orange-600 hover:underline md:mb-0">Informasi Lebih Lanjut</a>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\skripsi-cihuy\resources\views/partials/footer.blade.php ENDPATH**/ ?>