@props(['breadcrumbs' => []])


<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
     --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script> --}}

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-gray-50 dark:bg-gray-800" x-data="{ isSidebarExpanded: true }">

    @include('layouts.partials.admin.navigation')

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('layouts.partials.admin.sidebar')
        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>     
        {{-- -- modificar con alpine.js -- --}}
        <div id="main-content" :class="isSidebarExpanded ? 'lg:ml-64' : 'lg:ml-16'"
         class="relative w-full h-full overflow-y-auto bg-gray-50 dark:bg-gray-900">
            {{-- -- modificar con alpine.js -- --}}
            <main>
                <div class="px-4 pt-6">
                    @include('layouts.partials.admin.breadcrumb')
                    @isset($action)
                        <div>
                            {{ $action }}
                        </div>
                    @endisset
                    <div>
                        {{ $slot }}
                    </div>
                </div>
            </main>
            @include('layouts.partials.admin.footer')
            {{-- <div>
                <div>
                    <div>
                        @include('layouts.partials.admin.breadcrumb')
                        @isset($action)
                            <div>
                                {{ $action }}
                            </div>
                        @endisset
                    </div>
                    <div>
                        {{ $slot }}
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>


    @livewireScripts
</body>

</html>
