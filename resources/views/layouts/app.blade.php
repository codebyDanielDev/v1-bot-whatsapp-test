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
    <!-- Fonts awebosomexd xdaafas -->
    <script src="https://kit.fontawesome.com/e17e7d9d78.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased" x-data="{sidebarOpen: false}" :class="{'overflow-y-hidden': sidebarOpen}">

    <div class="fixed inset-0 z-20 bg-gray-900 bg-opacity-50 sm:hidden " style="display: none;" x-show="sidebarOpen"
        x-on:click="sidebarOpen = false"></div>

    @include('layouts.partials.app.navigation')
    @include('layouts.partials.app.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
    
</body>
</html>
