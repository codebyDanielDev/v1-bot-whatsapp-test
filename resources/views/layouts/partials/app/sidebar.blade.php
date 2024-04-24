@php
    $links = [
        [
            'icon' => 'fa-solid fa-gauge',
            'name' => 'Dashboard',
            'route' => 'admin.dashboard',
            'active' => request()->routeIs('admin.dashboard'),
        ],
     [
         'icon' => 'fa-solid fa-users',
         'name' => 'Usuarios',
         //'route' => 'admin.users.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         //'active' => request()->routeIs('admin.users.*'),
     ],
     [
         'icon' => 'fa-solid fa-cog',
         'name' => 'Configuración',
         // 'route' => 'admin.settings.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         //'active' => request()->routeIs('admin.settings.*'),
     ],
     [
         'icon' => 'fa-solid fa-file-alt',
         'name' => 'Reportes',
         //'route' => 'admin.reports.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         //'active' => request()->routeIs('admin.reports.*'),
     ],
     [
         'icon' => 'fa-solid fa-calendar-check',
         'name' => 'Eventos',
         // 'route' => 'admin.events.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         //'active' => request()->routeIs('admin.events.*'),
     ],
     [
         'icon' => 'fa-solid fa-graduation-cap',
         'name' => 'Certificaciones',
         // 'route' => 'admin.certifications.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         // 'active' => request()->routeIs('admin.certifications.*'),
     ],
     [
         'icon' => 'fa-solid fa-envelope',
         'name' => 'Mensajes',
         //  'route' => 'admin.messages.index', // Asegúrate de definir esta ruta en tus archivos de rutas
         //  'active' => request()->routeIs('admin.messages.*'),
     ],
    //  [
    //      'icon' => 'fa-solid fa-question-circle',
    //      'name' => 'Soporte',
    //      //  'route' => 'admin.support.index', // Asegúrate de definir esta ruta en tus archivos de rutas
    //      //  'active' => request()->routeIs('admin.support.*'),
    //  ],
    ];

@endphp

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700 sm:translate-x-0"
    :class="{ 'translate-x ease-out': sidebarOpen, '-translate-x-full ease-in': !sidebarOpen }" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2">
            @foreach ($links as $link)
                <li>
                    <a href="{{ isset($link['route']) ? route($link['route']) : '#' }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ $link['active'] ?? false ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                        <i class="{{ $link['icon'] }} w-6 h-6 text-gray-500"></i>
                        <span class="ml-2">
                            {{ $link['name'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>



    
    @if(Auth::check())
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
    
        @if(Auth::check())
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
            <p class="mt-2 text-xs text-gray-600 dark:text-gray-400">
                &copy; {{ now()->year }} <strong>{{ env('DEVELOPER_NAME', 'Nombre de la Empresa') }}</strong>. Todos los derechos reservados.
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
</aside>
