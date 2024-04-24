<div>
    <div class="flex flex-col min-h-full">
        {{-- Despues cambiar el contenido del header --}}
        <header class="bg-white border-b border-gray-200 shrink-0">
            <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Your Company">
                <div class="flex items-center gap-x-8">
                    <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-300">
                        <span class="sr-only">View notifications</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your profile</span>
                        <img class="w-8 h-8 bg-gray-800 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </a>
                </div>
            </div>
        </header>

        <div class="flex items-start w-full px-4 py-10 mx-auto max-w-7xl gap-x-8 sm:px-6 lg:px-8">
            <aside class="sticky hidden w-64 top-8 shrink-0 lg:block">
                <div id="accordion-collapse" data-accordion="collapse" class="bg-transparent"><br>
                    {{-- titulo del desplegable --}}
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 bg-transparent rtl:text-right dark:text-gray-400"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span>Populares</span>
                            <svg data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    {{-- contenido del desplegable --}}
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 bg-transparent">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Default
                                    checkbox</label>
                            </div>
                        </div>
                    </div>
                    {{-- acá termina el desplegable --}}
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 bg-transparent rtl:text-right dark:text-gray-400"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                            aria-controls="accordion-collapse-body-2">
                            <span>Categorías</span>
                            <svg data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 bg-transparent">
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="mb-2">
                                        <div class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg cursor-pointer group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                            wire:click="$set('category_id', {{ $category->id }})">
                                            <span class="flex-1 pl-11">{{ $category->name }}</span>
                                            <span
                                                class="inline-flex items-center justify-center min-w-[36px] h-6 px-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                                {{ $category->tours_count }}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- titulo del desplegable --}}
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 bg-transparent rtl:text-right dark:text-gray-400"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="true"
                            aria-controls="accordion-collapse-body-3">
                            <span>Duración</span>
                            <svg data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    {{-- contenido del desplegable --}}
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 bg-transparent">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Default
                                    checkbox</label>
                            </div>
                        </div>
                    </div>
                    {{-- acá termina el desplegable --}}
                    {{-- titulo del desplegable --}}
                    <h2 id="accordion-collapse-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 bg-transparent rtl:text-right dark:text-gray-400"
                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                            aria-controls="accordion-collapse-body-4">
                            <span>texto</span>
                            <svg data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    {{-- contenido del desplegable --}}
                    <div id="accordion-collapse-body-4" class="hidden"
                        aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 bg-transparent">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Default
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- acá termina el desplegable --}}


                </div>
            </aside>

            <main class="flex-1">
                {{-- Despues cambiar el contenido del header --}}
                {{-- <header class="bg-white border-b border-gray-200 shrink-0">
                    <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                        <div class="flex items-center gap-x-8">
                            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-300">
                                <span class="sr-only">View notifications</span>
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your profile</span>
                                <img class="w-8 h-8 bg-gray-800 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </header> --}}
                
            <div class="max-w-4xl px-4 py-8 mx-auto">
                <nav class="flex mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#"
                                    class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Flowbite</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h2
                    class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                    Tours y actividades
                </h2>
            </div>
                <div class="flex-grow p-4">

                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">


                        <div class="mb-4">
                            <h2 class="text-5xl font-extrabold dark:text-white">{{ $totalTours }}<small
                                    class="font-semibold text-gray-500 ms-2 dark:text-gray-400"> tours
                                    encontrados</small>
                            </h2>
                            <p>categroy_id: {{ $category_id }}


                                esto eliminar despues</p>
                        </div>
                        <div class="lg:col-span-2 lg:py-8">
                            <ul class="grid grid-cols-2 gap-4">
                                @foreach ($tours as $tour)
                                    <li
                                        class="overflow-hidden transition-shadow duration-300 ease-in-out bg-white rounded-lg shadow-md hover:shadow-lg">
                                        <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                            class="block group">

                                            <!-- Image -->
                                            <div class="w-full overflow-hidden">
                                                <img src="{{ $tour->imagen }}" alt="{{ $tour->title }}"
                                                    class="object-cover w-full h-48" />
                                            </div>

                                            <!-- Tag -->
                                            <span
                                                class="inline-block px-3 py-1 text-xs font-bold text-white uppercase bg-red-600 rounded-bl-lg">Cusco</span>

                                            <!-- Content -->
                                            <div class="p-4">
                                                <h3
                                                    class="mb-2 font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                                    {{ $tour->title }}
                                                </h3>
                                                <p class="mb-4 text-sm text-gray-700">
                                                    {{ $tour->description_corta }}
                                                </p>

                                                <!-- Pricing -->
                                                <div class="flex items-center justify-between">
                                                    <div class="text-lg font-semibold text-gray-900">
                                                        S/ {{ number_format($tour->precio_actual, 2) }}
                                                    </div>
                                                    <div class="text-sm text-gray-500 line-through">
                                                        S/ {{ number_format($tour->precio_anterior, 2) }}
                                                    </div>
                                                </div>
                                                <div class="text-xs font-bold text-red-600">
                                                    ahorra S/
                                                    {{ number_format($tour->precio_anterior - $tour->precio_actual, 2) }}
                                                    Por
                                                    Persona
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            </main>

            {{-- <aside class="sticky hidden top-8 w-96 shrink-0 xl:block">
                <!-- Right column area -->
            </aside> --}}
        </div>
    </div>
</div>
