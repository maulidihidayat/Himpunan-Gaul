<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo/Mainlogo.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com "></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden bg-[#ffffff] scroll-smooth scrollbar-hide">
    {{-- bg-[#FFFAF6]  --}}

    @include('partials.navbar')
    <span class="absolute right-0 p-20 mt-32 text-white rounded-full bg-orange-400/40 -z-40 blur-3xl"></span>
    <span class="absolute left-0 p-20 text-white rounded-full bg-red-400/40 -z-40 blur-3xl mt-80"></span>
    <main class="min-h-screen ">
            @yield('content')
    </main>
    @include('partials.footer')
    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function () {
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