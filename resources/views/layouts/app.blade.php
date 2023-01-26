<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">

    <!-- Styles -->


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles

    <!-- carousel -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ildistyles.css') }}">

    <!-- carousel -->
    <link rel="stylesheet" href="{{ asset('farmhouse/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/css/colors/default-vermilion.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('farmhouse/slick/slick-theme.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



</head>
<body class="font-sans antialiased">
    <x-jet-banner />
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/jquery.easing.1.3.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/jquery.nav.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/parallax.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/wow-1.3.0.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('farmhouse/js/main.js') }}" defer></script>
</body>
</html>
