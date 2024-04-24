{{-- @php
$links = [
    [
        'icon' => 'fa-solid fa-gauge',
        'name' => 'Dashboard',
        'route' => 'admin.dashboard',
        'active' => request()->routeIs('admin.dashboard'),
    ],
    //acá ira la seccion para tours
    [
        'icon' => 'fa-solid fa-route',
        'name' => 'Tours',
        'route' => 'admin.tours.index',// Asegúrate de definir esta ruta en tus archivos de rutas
        'active' => request()->routeIs('admin.tours.*'),
    ],
    [
        'icon' => 'fa-solid fa-users',
        'name' => 'Usuarios',
        'route' => 'admin.users.index',// Asegúrate de definir esta ruta en tus archivos de rutas
        'active' => request()->routeIs('admin.users.*'),
    ],
    // [
    //     // icono  de paquetes de viajes
    //     'icon' => 'fa-solid fa-suitcase-rolling',
    //     'name' => 'paquetes de viajes',
    //     // 'route' => 'admin.certifications.index', // Asegúrate de definir esta ruta en tus archivos de rutas
    //     // 'active' => request()->routeIs('admin.certifications.*'),
    // ],
    //reservas de viajes pero con un icono que no sea fa-solid fa-calendar-check
    [
        'icon' => 'fa-solid fa-calendar-alt',
        'name' => 'Reservas',
        // 'route' => 'admin.bookings.index', // Asegúrate de definir esta ruta en tus archivos de rutas
        // 'active' => request()->routeIs('admin.bookings.*'),
    ],
    [
        'icon' => 'fa-solid fa-file-alt',
        'name' => 'Reportes',
         //'route' => 'admin.reports.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         //'active' => request()->routeIs('admin.reports.*'),
    ],
    // [
    //     'icon' => 'fa-solid fa-calendar-check',
    //     'name' => 'Eventos',
    //     // 'route' => 'admin.events.index', // Asegúrate de definir esta ruta en tus archivos de rutas
    //      //'active' => request()->routeIs('admin.events.*'),
    // ],
    //gestionar consultas de los usuarios pero in este icono fa-solid fa-question-circle
    [
        // icono de consultas
        'icon' => 'fa-solid fa-clipboard-question',
        'name' => 'Consultas',
        // 'route' => 'admin.queries.index', // Asegúrate de definir esta ruta en tus archivos de rutas
        // 'active' => request()->routeIs('admin.queries.*'),
    ],
    

    // [
        
    //     'icon' => 'fa-solid fa-envelope',
    //     'name' => 'Mensajes',
    //    //  'route' => 'admin.messages.index', // Asegúrate de definir esta ruta en tus archivos de rutas
    //    //  'active' => request()->routeIs('admin.messages.*'),
    // ],
    
    [
        'icon' => 'fa-solid fa-question-circle',
        'name' => 'Soporte',
       //  'route' => 'admin.support.index', // Asegúrate de definir esta ruta en tus archivos de rutas
       //  'active' => request()->routeIs('admin.support.*'),
    ],
    [
        // para portadas
        'name' => 'Portadas',
        'icon' => 'fa-solid fa-images',
        'route' => 'admin.covers.index',
        'active' => request()->routeIs('admin.covers.*'),
    ],
    
    [
    'icon' => 'fa-solid fa-tags',
    'name' => 'Promociones',
    //'route' => 'admin.promotions.index',
    //'active' => request()->routeIs('admin.promotions.*'),
    ],
    //cms
    [
        'icon' => 'fa-solid fa-file-alt',
        'name' => 'CMS',
        //'route' => 'admin.cms.index',
        //'active' => request()->routeIs('admin.cms.*'),
    ],
    //marketing
    [
        'icon' => 'fa-solid fa-bullhorn',
        'name' => 'Marketing',
        //'route' => 'admin.marketing.index',
        //'active' => request()->routeIs('admin.marketing.*'),
    ],
    //reportes
    [
        'icon' => 'fa-solid fa-file-alt',
        'name' => 'Reportes',
        //'route' => 'admin.reports.index',
        //'active' => request()->routeIs('admin.reports.*'),
    ],
    //analiticas
    [
        'icon' => 'fa-solid fa-chart-line',
        'name' => 'Analíticas',
        //'route' => 'admin.analytics.index',
        //'active' => request()->routeIs('admin.analytics.*'),
    ],
    //ajustes
    [
        'icon' => 'fa-solid fa-cog',
        'name' => 'Ajustes',
        //'route' => 'admin.settings.index',
        //'active' => request()->routeIs('admin.settings.*'),
    ],
    //configuracion
    [
        'icon' => 'fa-solid fa-cog',
        'name' => 'Configuración',
        //'route' => 'admin.config.index',
        //'active' => request()->routeIs('admin.config.*'),
    ],

    // [
    // 'icon' => 'fa-solid fa-star',
    // 'name' => 'Comentarios',
    // //'route' => 'admin.reviews.index',
    // //'active' => request()->routeIs('admin.reviews.*'),
    // ],

    // // para configuracion de la pagina, como logo y eso
    // [
    //     'icon' => 'fa-solid fa-cog',
    //     'name' => 'Configuración',
    //     //'route' => 'admin.settings.index',
    //     'active' => request()->routeIs('admin.settings.*'),
    // ],

];

@endphp

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700 sm:translate-x-0" :class="{'translate-x ease-out': sidebarOpen, '-translate-x-full ease-in': !sidebarOpen}" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2">
            @foreach ($links as $link)
                <li>
                    <a href="{{ isset($link['route']) ? route($link['route']) : '#' }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ $link['active'] ?? false ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                        <i class="{{ $link['icon'] }} w-6 h-6 text-gray-500"></i>
                        <span class="ml-2">
                            {{ $link['name'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>

    
        @if (Auth::check())
        <div class="sticky inset-x-0 bottom-0 px-3 py-2 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <button data-popover-target="popover-user-profile" type="button" class="flex items-center gap-3 p-1 transition-colors duration-150 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="object-cover w-10 h-10 border-2 border-gray-300 rounded-full dark:border-gray-600">
                <div>
                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                    <!-- Omitido el correo para mantenerlo más similar al enlace -->
                </div>
            </button>
        </div>
        @endif
        
            @if (Auth::check())
            <div data-popover id="popover-user-profile" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                <div class="p-3">
                    <div class="flex items-center justify-between mb-2">
                        <a href="{{ route('profile.show') }}">
                            <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        </a>
                        <div>
                            <!-- Aquí puedes cambiar el botón de acción según lo necesites -->
                            <a href="{{ route('profile.show') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar Perfil</a>
                        </div>
                    </div>
                    <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="mb-3 text-sm font-normal">
                        {{ Auth::user()->email }}
                    </p>
                    <p class="mb-4 text-sm">Rol: <span class="font-semibold">{{ Auth::user()->role }}</span></p>
                </div>
                <div data-popper-arrow></div>
            </div>
            @endif
        
            <div class="px-2 mt-4">
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    Desarrollado por <strong><a href="#" class="text-blue-600 underline dark:text-blue-500 hover:no-underline" data-popover-target="popover-developer">{{ env('DEVELOPER_NAME', 'Nombre de la Empresa') }}</a></strong>
                </p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    Versión del sistema: <strong>{{ env('SYSTEM_VERSION', '1.0.0') }}</strong>
                </p>
            </div>
            
            <div data-popover id="popover-developer" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                <div class="p-3">
                    <h3 class="font-semibold text-gray-900 dark:text-white">{{ env('DEVELOPER_NAME', 'Nombre de la Empresa') }}</h3>
                    <p>Desarrollado por <strong>{{ env('DEVELOPER_NAME', 'Nombre de la Empresa') }}</strong>. Todos los derechos de propiedad intelectual y derechos de autor son propiedad de su respectivo dueño. Para más información, por favor visita nuestra página de <a href="http://ejemplo.com" class="text-blue-600 dark:text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Términos y Condiciones</a>.</p>
                </div>
                
                <div data-popper-arrow></div>
            </div>
             
        
    </div>
</aside> --}}


@php

    $links = [
        [
            'iconType' => 'svg',
            'svg' => [
                'viewBox' => '0 0 20 20',
                'paths' => ['M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z', 'M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z'],
            ],
            'name' => 'Dashboard',
            'route' => 'admin.dashboard',
            'active' => request()->routeIs('admin.dashboard'),
        ],
        [
            'iconType' => 'svg',
            'svg' => [
                'viewBox' => '0 0 20 20',
                'paths' => [
                    'M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z',
                    'M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z',
                ],
            ],
            'name' => 'Inbox',
            'route' => 'admin.dashboard',
            'submenu' => [
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-inbox', // Icono de redactar nuevo correo
                    'name' => 'Llego nueva consulta',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-envelope-open-text', // Icono de redactar nuevo correo
                    'name' => 'Redactar correo',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-paper-plane', // Icono para el envío de correos masivos
                    'name' => 'Envío masivo',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-archive', // Icono para la gestión de plantillas de correo
                    'name' => 'Plantillas de correo',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-history', // Icono para historial de correos enviados
                    'name' => 'Historial de envíos',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
            ],
        ],
        [
            'iconType' => 'fontawesome',
            'fontawesome' => 'fas fa-map-marked-alt',
            'name' => 'Tours',
            'route' => 'admin.dashboard',
            'submenu' => [
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-eye', // Icono para ver todos los tours
                    'name' => 'Ver Todos los Tours',
                    'route' => 'admin.tours.index',
                    'active' => request()->routeIs('admin.tours.view-all'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-edit', // Icono para la administración de tours existentes
                    'name' => 'Administrar Tours',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.tours.manage'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-calendar-alt', // Icono para la planificación o programación de tours
                    'name' => 'Programar Tours',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.tours.schedule'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-chart-bar', // Icono para análisis o reportes de los tours
                    'name' => 'Reportes de Tours',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.tours.reports'),
                ],
            ],
        ],
        [
            'iconType' => 'fontawesome',
            'fontawesome' => 'fas fa-users',
            'name' => 'Usuarios',
            'route' => 'admin.users.*',
            'submenu' => [
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-user-friends',
                    'name' => 'Lista de Usuarios',
                    'route' => 'admin.users.index',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-user-cog',
                    'name' => 'Administrar Roles',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-user-shield',
                    'name' => 'Permisos de Usuarios',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-user-lock',
                    'name' => 'Seguridad de Usuarios',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.dashboard'),
                ],
            ],
        ],
        [
            'iconType' => 'fontawesome',
            'fontawesome' => 'fas fa-file-alt', // Icono general para páginas
            'name' => 'Páginas',
            'route' => 'admin.dashboard',
            'submenu' => [
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-tags', // Icono para la página de precios
                    'name' => 'Precios',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.pages.pricing'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-tools', // Icono para la página de mantenimiento
                    'name' => 'Mantenimiento',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.pages.maintenance'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-exclamation-triangle', // Icono para la página de error 404
                    'name' => 'Error 404',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.pages.error404'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-bomb', // Icono para la página de error 500
                    'name' => 'Error 500',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.pages.error500'),
                ],
            ],
        ],
        [
            'iconType' => 'fontawesome',
            'fontawesome' => 'fas fa-money-bill-wave', // Icono para Ventas de Tours
            'name' => 'Ventas de Tours',
            'route' => 'admin.dashboard',
            'submenu' => [
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-euro-sign', // Icono para Venta de Paquetes
                    'name' => 'Paquete personalizado',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.packages'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-euro-sign', // Icono para Venta de Paquetes
                    'name' => 'Venta de Tours',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.packages'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-euro-sign', // Icono para Venta de Paquetes
                    'name' => 'Venta de Paquetes',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.packages'),
                ],

                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-percentage', // Icono para Promociones y Descuentos
                    'name' => 'Promociones y Descuentos',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.promotions'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-sync-alt', // Icono para Devoluciones y Cancelaciones
                    'name' => 'Devoluciones y Cancelaciones',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.returns'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-ticket-alt',
                    'name' => 'Gestión de Cupones',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.coupons'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-ticket-alt',
                    'name' => 'Ventas de Tours realizadas',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.coupons'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-ticket-alt',
                    'name' => 'Ventas de Paquetes realizadas',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.sales.coupons'),
                ],
            ],
        ],
        [
            'iconType' => 'fontawesome',
            'fontawesome' => 'fas fa-file-invoice-dollar', // Icono para Facturación
            'name' => 'Facturación',
            'route' => 'admin.billing.dashboard',
            'submenu' => [
                // Facturas, boletas, notas, etc.
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-file-invoice',
                    'name' => 'Facturas Electrónicas',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.invoices'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-receipt',
                    'name' => 'Boletas de Venta Electrónicas',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.sales_receipts'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-receipt',
                    'name' => 'Notas de Crédito Electrónicas',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.sales_receipts'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-receipt',
                    'name' => 'Notas de Débito Electrónicas',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.sales_receipts'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-receipt',
                    'name' => 'Comprobantes de Retención y Percepción',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.sales_receipts'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-receipt',
                    'name' => 'Gestión de Series y Correlativos',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.sales_receipts'),
                ],
                [
                    'iconType' => 'fontawesome',
                    'fontawesome' => 'fas fa-percentage',
                    'name' => 'Configuraciones ',
                    'route' => 'admin.dashboard',
                    'active' => request()->routeIs('admin.billing.sales_receipts'),
                ],
                // Más elementos...
            ],
        ],
    ];
@endphp



{{-- -- modificar con alpine.js -- --}}

<aside id="sidebar" :class="isSidebarExpanded ? 'w-64' : 'w-16'"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 h-full pt-16 duration-75 transition-width">

    {{-- -- modificar con alpine.js -- --}}

    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>


                    @foreach ($links as $link)
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-expanded="false" aria-controls="dropdown-{{ $link['name'] }}"
                                data-collapse-toggle="dropdown-{{ $link['name'] }}">
                                @if ($link['iconType'] === 'svg')
                                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="{{ $link['svg']['viewBox'] }}"
                                        xmlns="http://www.w3.org/2000/svg">
                                        @foreach ($link['svg']['paths'] as $path)
                                            <path fill-rule="evenodd" d="{{ $path }}" clip-rule="evenodd">
                                            </path>
                                        @endforeach
                                    </svg>
                                @elseif ($link['iconType'] === 'fontawesome')
                                    <i
                                        class="{{ $link['fontawesome'] }} w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"></i>
                                @endif
                                <span class="flex-1 ml-3 text-left sidebar-toggle-item">{{ $link['name'] }}</span>
                                @if (isset($link['submenu']))
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                @endif
                            </button>
                            @if (isset($link['submenu']))
                                <ul id="dropdown-{{ $link['name'] }}" class="hidden py-2 space-y-2">
                                    @foreach ($link['submenu'] as $submenu)
                                        <li>
                                            <a href="{{ route($submenu['route']) }}"
                                                class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                                @if ($submenu['iconType'] === 'svg')
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="{{ $submenu['svg'] }}"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                @elseif ($submenu['iconType'] === 'fontawesome')
                                                    <i class="{{ $submenu['fontawesome'] }} w-4 h-4 mr-2"></i>
                                                @endif
                                                {{ $submenu['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach


                    <li>
                        <a href=""
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>PUNTO DE VENTA</span>
                        </a>
                    </li>
                    <li>
                        <a href="./mailing/inbox.html"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                </path>
                                <path
                                    d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Blog</span>
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 p-1 ml-3 text-sm font-medium rounded-full text-primary-800 bg-primary-100"
                                sidebar-toggle-item>3</span>
                        </a>
                    </li>

                    {{-- <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-ecommerce" data-collapse-toggle="dropdown-ecommerce">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>E-commerce</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-ecommerce" class="hidden py-2 space-y-2 ">
                            <li>
                                <a href="./e-commerce/products.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 ">Products</a>
                            </li>
                            <li>
                                <a href="./e-commerce/billing.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 ">Billing</a>
                            </li>
                            <li>
                                <a href="./e-commerce/invoice.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 ">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Users</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-users" class="hidden py-2 space-y-2 ">
                            <li>
                                <a href="./users/list.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 ">Users
                                    list</a>
                            </li>
                            <li>
                                <a href="./users/profile.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 ">Profile</a>
                            </li>
                            <li>
                                <a href="./users/feed.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Feed</a>
                            </li>
                            <li>
                                <a href="./users/settings.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 ">Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Pages</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                            <li>
                                <a href="./pages/pricing.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Pricing</a>
                            </li>
                            <li>
                                <a href="./pages/maintenance.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Maintenance</a>
                            </li>
                            <li>
                                <a href="./pages/404.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">404
                                    not found</a>
                            </li>
                            <li>
                                <a href="./pages/500.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">500
                                    server error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                sidebar-toggle-item>Authentication</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-auth" class="hidden py-2 space-y-2">
                            <li>
                                <a href="./authentication/sign-in.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sign
                                    in</a>
                            </li>
                            <li>
                                <a href="./authentication/sign-up.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sign
                                    up</a>
                            </li>
                            <li>
                                <a href="./authentication/forgot-password.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Forgot
                                    password</a>
                            </li>
                            <li>
                                <a href="./authentication/reset-password.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Reset
                                    password</a>
                            </li>
                            <li>
                                <a href="./authentication/profile-lock.html"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile
                                    lock</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>

                {{-- estos si son fijo y tienes que modificar o añadir los que necesites --}}
                <div class="pt-2 space-y-2">
                    <a href="" target="_blank"
                        class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                        <span class="ml-3" sidebar-toggle-item>Datos de la empresa</span>
                    </a>
                    <a href="" target="_blank"
                        class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3" sidebar-toggle-item>Documentación</span>
                    </a>

                    <a href="https://github.com/themesberg/flowbite/issues" target="_blank"
                        class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3" sidebar-toggle-item>Ayuda</span>
                    </a>
                </div>
            </div>
        </div>







        {{-- -- modificar con alpine.js -- --}}
        <div x-show="isSidebarExpanded"
            class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 lg:flex">
            <a href="#"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                    </path>
                </svg>
            </a>
            <a href="../../users/settings/" data-tooltip-target="tooltip-settings"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <div id="tooltip-settings" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Settings page
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-dropdown-toggle="language-dropdown"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                    <path fill="#b22234" d="M0 0h7410v3900H0z" />
                    <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                        stroke-width="300" />
                    <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                    <g fill="#fff">
                        <g id="d">
                            <g id="c">
                                <g id="e">
                                    <g id="b">
                                        <path id="a"
                                            d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                        <use xlink:href="#a" y="420" />
                                        <use xlink:href="#a" y="840" />
                                        <use xlink:href="#a" y="1260" />
                                    </g>
                                    <use xlink:href="#a" y="1680" />
                                </g>
                                <use xlink:href="#b" x="247" y="210" />
                            </g>
                            <use xlink:href="#c" x="494" />
                        </g>
                        <use xlink:href="#d" x="988" />
                        <use xlink:href="#c" x="1976" />
                        <use xlink:href="#e" x="2470" />
                    </g>
                </svg>
            </button>

            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700"
                id="language-dropdown">
                <ul class="py-1" role="none">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-us" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                        <path fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)" />
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-de" viewBox="0 0 512 512">
                                    <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                    <path d="M0 0h512v170.7H0z" />
                                    <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                </svg>
                                Deutsch
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-it" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#fff" d="M0 0h512v512H0z" />
                                        <path fill="#009246" d="M0 0h170.7v512H0z" />
                                        <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                    </g>
                                </svg>
                                Italiano
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                    viewBox="0 0 512 512">
                                    <defs>
                                        <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                    </defs>
                                    <path fill="#de2910" d="M0 0h512v512H0z" />
                                    <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                        xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                    <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                        xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                                </svg>
                                中文 (繁體)
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- -- modificar con alpine.js -- --}}





    </div>
</aside>
