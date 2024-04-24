<x-guest-layout>
    <div id="bottom-banner" tabindex="-1"
        class="fixed bottom-0 z-50 flex justify-between w-full p-4 border-t border-gray-200 start-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex items-center mx-auto">
            <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                <span
                    class="inline-flex items-center justify-center w-6 h-6 p-1 bg-gray-200 rounded-full me-3 dark:bg-gray-600">
                    <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 18l8-8-8-8-8 8 8 8zm0 0l-5-5m5 5l5-5m-5 5V2" />
                    </svg>
                    <span class="sr-only">Offer</span>
                </span>
                <span>Disfruta de un 10% de descuento en tu primer viaje con <a href="#"
                        class="text-sm font-medium text-blue-600 ms-0 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline">Peru
                        Safe Travel
                        <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg></a></span>
            </p>
        </div>
        <div class="flex items-center">
            <button data-dismiss-target="#bottom-banner" type="button"
                class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Cerrar banner</span>
            </button>
        </div>
    </div>


    <section class="relative bg-center bg-no-repeat bg-cover"
        style="background-image: url('https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3');">
        <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold leading-tight sm:text-5xl"
                    style="text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);">
                    Descubre Perú con
                    <span class="block">
                        <span class="text-red-600">Peru</span>
                        <span class="text-white">Safe</span>
                        <span class="text-red-600">Travel</span>
                    </span>
                    <span class="block text-white">Experiencias inolvidables.</span>
                </h1>


                <p class="max-w-lg mt-4 text-white shadow-md sm:text-xl">
                    Viajes seguros y experiencias inolvidables en el corazón de los Andes. ¡Tu aventura comienza aquí!
                </p>


                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="#"
                        class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto hover:bg-transparent focus:outline-none focus:ring">
                        Comienza tu Viaje
                    </a>

                    <a href="#"
                        class="block w-full px-12 py-3 text-sm font-medium text-blue-600 bg-white rounded sm:w-auto hover:bg-blue-600 hover:text-white focus:outline-none focus:ring">
                        Más Información
                    </a>
                </div>
            </div>
        </div>

    </section>


    {{-- 
<section>
<div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
        <div class="max-w-lg mx-auto text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
            <h2 class="text-3xl font-bold sm:text-4xl">Find your career path</h2>

            <p class="mt-4 text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero aliquid sint distinctio
                iure ipsum cupiditate? Quis, odit assumenda? Deleniti quasi inventore, libero reiciendis
                minima aliquid tempora. Obcaecati, autem.
            </p>

            <a href="#"
                class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                Get Started Today
            </a>
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
            <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="#">

                <h2 class="mt-2 font-bold">Accountant</h2>

                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </a>

            <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="#">
                <span class="inline-block p-3 rounded-lg bg-gray-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </span>

                <h2 class="mt-2 font-bold">Accountant</h2>

                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </a>

            <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="#">
                <span class="inline-block p-3 rounded-lg bg-gray-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </span>

                <h2 class="mt-2 font-bold">Accountant</h2>

                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </a>

            <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="#">
                <span class="inline-block p-3 rounded-lg bg-gray-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </span>

                <h2 class="mt-2 font-bold">Accountant</h2>

                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </a>

            <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="#">
                <span class="inline-block p-3 rounded-lg bg-gray-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </span>

                <h2 class="mt-2 font-bold">Accountant</h2>

                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </a>

            <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                href="#">
                <span class="inline-block p-3 rounded-lg bg-gray-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </span>

                <h2 class="mt-2 font-bold">Accountant</h2>

                <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </a>
        </div>
    </div>
</div>
</section> --}}


    <section class="text-white bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
                <div class="max-w-lg mx-auto text-center lg:mx-0 lg:text-left">
                    <h2 class="text-3xl font-bold sm:text-4xl">Encuentra tu camino en el mundo del turismo</h2>

                    <p class="mt-4 text-gray-300">
                        Con Peru Safe Travel, vive una experiencia única explorando las maravillas de Perú. Sé parte de
                        aventuras inolvidables y culturas fascinantes.
                    </p>

                    <a href="#"
                        class="inline-block px-12 py-3 mt-8 text-sm font-medium transition bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Empieza hoy tu aventura
                    </a>
                </div>


                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">

                    <!-- Icono de montañas para senderismo o exploración -->
                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="w-6 h-6 fas fa-mountain"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Exploración</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-300">
                            Descubre paisajes increíbles.
                        </p>
                    </a>

                    <!-- Icono de grupo de personas para tours en grupo -->
                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="w-6 h-6 fas fa-users"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Tours Grupales</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-300">
                            Comparte la experiencia.
                        </p>
                    </a>

                    <!-- Icono de cámara fotográfica para fototurismo -->
                    <a class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="w-6 h-6 fas fa-camera"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Fototurismo</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-300">
                            Captura momentos mágicos.
                        </p>
                    </a>

                    <!-- Otros íconos relevantes pueden seguir aquí -->
                    <!-- ... -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                <!-- Categoría de Tours -->
                <div class="grid p-6 bg-gray-100 rounded place-content-center sm:p-8">
                    <div class="max-w-md mx-auto text-center lg:text-left">
                        <header>
                            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Explora Perú</h2>

                            <p class="mt-4 text-gray-500">
                                Viaja a través de paisajes increíbles y descubre las maravillas culturales de Perú con
                                nuestros tours especializados.
                            </p>
                        </header>

                        <a href="#"
                            class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-gray-900 border border-gray-900 rounded hover:bg-gray-700 focus:outline-none focus:ring">
                            Ver Todos los Tours
                        </a>
                    </div>
                </div>

                <!-- Imágenes de Destinos Populares -->
                <div class="lg:col-span-2 lg:py-8">
                    <ul class="grid grid-cols-2 gap-4">
                        @foreach ($tours as $tour)
                            <li
                                class="overflow-hidden transition-shadow duration-300 ease-in-out bg-white rounded-lg shadow-md hover:shadow-lg">
                                <a href="#" class="block group">
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
                                            {{ number_format($tour->precio_anterior - $tour->precio_actual, 2) }} Por
                                            Persona
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>


                {{-- <div class="lg:col-span-2 lg:py-8">
            <ul class="grid grid-cols-2 gap-4">
                @foreach ($destinations as $destination) <!-- Itera sobre cada destino -->
                    <li>
                        <a href="#" class="block group">
                            <!-- Utiliza el atributo de imagen del destino -->
                            <img src="{{ Storage::url($destination->image) }}" alt="{{ $destination->title }}"
                                class="object-cover w-full rounded aspect-square" />
        
                            <div class="mt-3">
                                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                    {{ $destination->title }} <!-- Muestra el título del destino -->
                                </h3>
        
                                <p class="mt-1 text-sm text-gray-700">{{ $destination->description }}</p> <!-- Muestra una descripción o cualquier otro dato que quieras aquí -->
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div> --}}

            </div>
        </div>
        <section class="text-gray-600 body-font" _msthidden="14">
            <div class="container px-5 py-24 mx-auto" _msthidden="14">
                <div class="flex flex-col" _msthidden="2">
                    <div class="h-1 overflow-hidden bg-gray-200 rounded">
                        <div class="w-24 h-full bg-indigo-500"></div>
                    </div>
                    <div class="flex flex-col flex-wrap py-6 mb-12 sm:flex-row" _msthidden="2">
                        <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:w-2/5 title-font sm:mb-0"
                            _msttexthash="474526" _msthidden="1" _msthash="441">Destinos más populares</h1>
                        <p class="pl-0 text-base leading-relaxed sm:w-3/5 sm:pl-10" _msttexthash="15720705"
                            _msthidden="1" _msthash="442">
                            Embárcate en una aventura y explora lo inesperado. Descubre destinos que te dejarán sin
                            aliento y crea recuerdos que durarán toda una vida.</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4" _msthidden="12">
                    <div class="p-4 mb-6 md:w-1/3 sm:mb-0" _msthidden="4">
                        <div class="h-64 overflow-hidden rounded-lg" _msthidden="1">
                            <img alt="content" class="object-cover object-center w-full h-full"
                                src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                _msthidden="A" _mstalt="99710" _msthash="443">
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-gray-900 title-font" _msttexthash="232921"
                            _msthidden="1" _msthash="444">Shooting Stars</h2>
                        <p class="mt-2 text-base leading-relaxed" _msttexthash="12667447" _msthidden="1"
                            _msthash="445">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed.
                            Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                        <a class="inline-flex items-center mt-3 text-indigo-500" _msthidden="1">
                            <font _mstmutation="1" _msttexthash="130533" _msthidden="1" _msthash="446">Descubre este
                                destino
                            </font>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24"
                                data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 mb-6 md:w-1/3 sm:mb-0" _msthidden="4">
                        <div class="h-64 overflow-hidden rounded-lg" _msthidden="1">
                            <img alt="content" class="object-cover object-center w-full h-full"
                                src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                _msthidden="A" _mstalt="99710" _msthash="447">
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-gray-900 title-font" _msttexthash="204971"
                            _msthidden="1" _msthash="448">The Catalyzer</h2>
                        <p class="mt-2 text-base leading-relaxed" _msttexthash="12667447" _msthidden="1"
                            _msthash="449">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed.
                            Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                        <a class="inline-flex items-center mt-3 text-indigo-500" _msthidden="1">
                            <font _mstmutation="1" _msttexthash="130533" _msthidden="1" _msthash="450">Descubre este
                                destino
                            </font>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24"
                                data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="p-4 mb-6 md:w-1/3 sm:mb-0" _msthidden="4">
                        <div class="h-64 overflow-hidden rounded-lg" _msthidden="1">
                            <img alt="content" class="object-cover object-center w-full h-full"
                                src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                _msthidden="A" _mstalt="99710" _msthash="451">
                        </div>
                        <h2 class="mt-5 text-xl font-medium text-gray-900 title-font" _msttexthash="154011"
                            _msthidden="1" _msthash="452">The 400 Blows</h2>
                        <p class="mt-2 text-base leading-relaxed" _msttexthash="12667447" _msthidden="1"
                            _msthash="453">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed.
                            Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                        <a class="inline-flex items-center mt-3 text-indigo-500" _msthidden="1">
                            <font _mstmutation="1" _msttexthash="130533" _msthidden="1" _msthash="454">Descubre este
                                destino
                            </font>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24"
                                data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>





    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div><br>
    </div>




    {{-- <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&amp;h=1000&amp;w=1920&amp;c=1&amp;rs=1&amp;o=3"
                    alt="">
            </div>
        </div>
    </div> --}}



    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 md:py-16 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Preferidos por Viajeros del Mundo</h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
                    Sumérgete en experiencias auténticas con itinerarios personalizados que te conectan con la esencia
                    de Perú.
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <!-- Estadística para Clientes Felices -->
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">Clientes Felices</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">+5k</dd>
                    </div>

                    <!-- Estadística para Tours Ofrecidos -->
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">Tours Ofrecidos</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">50+</dd>
                    </div>

                    <!-- Estadística para Destinos Descubiertos -->
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">Destinos Descubiertos</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">100+</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    {{-- <div id="accordion-flush" data-accordion="collapse"
        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
        data-inactive-classes="text-gray-500 dark:text-gray-400">
        <h2 id="accordion-flush-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full gap-3 py-5 font-medium text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                aria-controls="accordion-flush-body-1">
                <span>¿Por qué elegir Peru Safe Travel?</span>
                <!-- Icono de pregunta frecuente -->
                <!-- ... SVG aquí ... -->
            </button>
        </h2>
        <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p>Peru Safe Travel ofrece una experiencia única e inolvidable a través de Perú. Nuestros guías expertos
                    y viajes personalizados te aseguran una aventura que se ajusta a tus preferencias y te conecta con
                    la cultura y naturaleza del país.</p>
            </div>
        </div>

        <!-- Otras preguntas frecuentes -->
        <!-- Asegúrate de cambiar los ID de los elementos para que coincidan con los atributos "aria-labelledby" y "data-accordion-target". -->
        <!-- ... Más elementos de acordeón aquí ... -->
    </div> --}}
    <div class="py-24 bg-white sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid items-center grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">
                <div class="w-full max-w-xl mx-auto lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Avalados por Expertos </h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Con el respaldo de las principales asociaciones de
                        turismo, nuestra agencia es reconocida por su excelencia y compromiso con la calidad. Estamos
                        orgullosos de ser recomendados por profesionales que conocen y valoran el servicio excepcional,
                        asegurando que cada viaje que organizamos cumple con los más altos estándares de la industria.
                        Descubre por qué expertos y viajeros experimentados nos eligen para explorar el mundo.</p>
                    <div class="flex items-center mt-8 gap-x-6">

                        <a href="#" class="text-sm font-semibold text-gray-900">Más sobre nuestras credenciales <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div
                    class="grid items-center w-full max-w-xl grid-cols-2 mx-auto gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
                    <img class="object-contain object-left w-full max-h-12"
                        src="https://www.tripadvisor.com/RentalInsights/wp-content/uploads/2018/04/CoE-500x500.png" alt="" width="105"
                        height="48">
                    <img class="object-contain object-left w-full max-h-12"
                        src="https://www.inkatrail.com.pe/img/logos/protgeme.png" alt="" width="104"
                        height="48">
                    <img class="object-contain object-left w-full max-h-12"
                        src="https://www.inkatrail.com.pe/img/logos/agenciaOficial.png" alt=""
                        width="140" height="48">
                    <img class="object-contain object-left w-full max-h-12"
                        src="https://www.inkatrail.com.pe/img/logos/gercetur.png"alt=""
                        width="136" height="48">
                    <img class="object-contain object-left w-full max-h-12"
                        src="https://www.inkatrail.com.pe/img/logos/gercetur.png" alt=""
                        width="158" height="48">
                    <img class="object-contain object-left w-full max-h-12"
                        src="https://www.inkatrail.com.pe/img/logos/gercetur.png" alt=""
                        width="147" height="48">
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
