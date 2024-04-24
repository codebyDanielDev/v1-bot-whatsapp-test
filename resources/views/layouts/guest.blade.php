<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e17e7d9d78.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> 

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script> --}}

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    {{-- @include('layouts.partials.guest.header') --}}

    @livewire('guest.partials.header')
    <div class="font-sans antialiased text-gray-900 dark:text-gray-100">
        {{ $slot }}
    </div>
    {{-- Incluimos el footer --}}

    @include('layouts.partials.guest.footer')
    @stack('modals')
    @livewireScripts
</body>

</html>
