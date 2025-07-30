<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo e(asset('images/logo/Mainlogo.png')); ?>" type="image/png">
    <script src="https://cdn.tailwindcss.com "></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="overflow-x-hidden bg-[#ffffff] scroll-smooth scrollbar-hide">
    

    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <span class="absolute right-0 p-20 mt-32 text-white rounded-full bg-orange-400/40 -z-40 blur-3xl"></span>
    <span class="absolute left-0 p-20 text-white rounded-full bg-red-400/40 -z-40 blur-3xl mt-80"></span>
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
        <a href="https://wa.me/6283119884888"
            class="fixed z-50 flex items-center justify-center text-white transition-all duration-300 bg-green-500 rounded-full shadow-lg w-14 h-14 bottom-6 right-6 hover:bg-green-600"
            target="_blank" aria-label="Chat di WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7">
                <path
                    d="M12 0C5.373 0 0 5.373 0 12c0 2.114.553 4.163 1.604 5.98L0 24l6.227-1.623A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.6a9.6 9.6 0 01-4.896-1.344l-.349-.209-3.734.974.996-3.637-.22-.365A9.565 9.565 0 1121.6 12a9.544 9.544 0 01-9.6 9.6zm5.04-7.344c-.276-.137-1.632-.804-1.884-.895-.252-.092-.436-.137-.62.137-.184.276-.712.895-.872 1.08-.16.184-.32.207-.596.069-.276-.138-1.164-.428-2.217-1.364-.82-.732-1.372-1.635-1.532-1.911-.16-.276-.017-.424.12-.562.124-.123.276-.32.414-.48.138-.16.184-.276.276-.46.092-.184.046-.345-.023-.483-.069-.138-.62-1.5-.852-2.052-.224-.536-.452-.464-.62-.472l-.528-.01c-.184 0-.483.069-.737.345-.253.276-.966.944-.966 2.3 0 1.356.99 2.667 1.128 2.851.138.184 1.948 2.978 4.723 4.175.661.285 1.178.455 1.58.583.664.211 1.268.182 1.747.111.532-.079 1.632-.668 1.863-1.311.23-.644.23-1.196.161-1.311-.069-.115-.252-.184-.528-.322z" />
            </svg>
        </a>

    </main>
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    navbar.classList.add('bg-white', '');
                } else {
                    navbar.classList.remove('bg-white', '');
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\skripsi-cihuy\resources\views/layouts/app.blade.php ENDPATH**/ ?>