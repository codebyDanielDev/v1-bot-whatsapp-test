<div>
    <div x-data="{ isScrolled: false }" x-init="window.addEventListener('scroll', () => { isScrolled = window.scrollY > 50 })">
        <nav :class="{'bg-transparent': !isScrolled, 'bg-gray-900 bg-opacity-75 shadow-lg': isScrolled}" class="fixed top-0 left-0 z-50 w-full transition duration-300 ease-in-out border-gray-200"class="fixed top-0 left-0 z-50 w-full transition duration-300 ease-in-out border-gray-200">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="" class="h-8" alt="logo, xd" />
                    <span cla x-data="{ isScrolled: false }"
                        x-init="window.addEventListener('scroll', () => { isScrolled = window.scrollY > 50 })"ss="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">cole
                        cole</span>
                </a>
                <div class="flex items-center space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">

                    <!-- Dropdown menu -->
                    <div>
                        @auth
                            <!-- Usuario autenticado: mostrar foto del usuario y menú desplegable -->
                            <div class="relative ms-3">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button
                                                class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                                    {{ Auth::user()->name }}

                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Account') }}
                                        </div>

                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                {{ __('API Tokens') }}
                                            </x-dropdown-link>
                                        @endif

                                        <div class="border-t border-gray-200"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @else
                            <!-- Usuario no autenticado: mostrar botón de iniciar sesión -->
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Iniciar Sesión
                            </a>
                        @endauth
                    </div>




                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Abrir menú</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:p-0 md:mt-0 md:border-0 md:bg-transparent dark:bg-transparent">
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded md:p-0 hover:bg-transparent md:hover:bg-transparent dark:hover:bg-transparent md:text-blue-700 dark:text-white hover:text-blue-700 dark:hover:text-blue-500"
                                aria-current="page">{{ __('Home') }}</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded md:p-0 hover:bg-transparent md:hover:bg-transparent dark:hover:bg-transparent md:text-blue-700 dark:text-white hover:text-blue-700 dark:hover:text-blue-500">Tours</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded md:p-0 hover:bg-transparent md:hover:bg-transparent dark:hover:bg-transparent md:text-blue-700 dark:text-white hover:text-blue-700 dark:hover:text-blue-500">Blog</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded md:p-0 hover:bg-transparent md:hover:bg-transparent dark:hover:bg-transparent md:text-blue-700 dark:text-white hover:text-blue-700 dark:hover:text-blue-500">{{ __('About us') }}</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded md:p-0 hover:bg-transparent md:hover:bg-transparent dark:hover:bg-transparent md:text-blue-700 dark:text-white hover:text-blue-700 dark:hover:text-blue-500">{{ __('Contact us') }}
                                </a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
    </div>
</div>
