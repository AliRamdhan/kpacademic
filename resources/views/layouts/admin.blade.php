<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard Admin') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet"
        href="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans containers">
    <main class="w-full min-h-screen">
        <section class="w-full flex">
            @include('partials.Admin.sidebar')
            <div class="w-full relative flex flex-col justify-between items-center">
                @include('partials.Admin.navigation-admin')
                <div class="w-full pt-32 px-8">
                    {{ $slot }}
                </div>
                {{-- @include('partials.footer') --}}
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script>
        // Wait for the document to fully load
        document.addEventListener("DOMContentLoaded", function() {
                    // JavaScript code for the filter button
                    const filterButton = document.getElementById("filterProgressButton");
                    const filterMenu = document.getElementById("filterMenu");
                    const toggleFilterIcon = document.getElementById("toggleFilter");

                    filterButton.addEventListener("click", function() {
                        filterMenu.classList.toggle("hidden");
                        toggleFilterIcon.classList.toggle("rotate-180");
                    });

                    document.addEventListener("click", function(event) {
                        if (!filterButton.contains(event.target) && !filterMenu.contains(event.target)) {
                            filterMenu.classList.add("hidden");
                            toggleFilterIcon.classList.remove("rotate-180");
                        }
                    });
    </script>
</body>

</html>
