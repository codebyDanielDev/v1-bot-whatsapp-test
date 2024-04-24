<x-guest-layout>
    <section>
        <div class="relative flex items-center justify-center text-white bg-center bg-no-repeat bg-cover"
            style="background-image: url('https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3'); height: 40vh;">
            <div class="absolute inset-0 bg-black/40"></div> <!-- oscurecimiento más intenso -->
            <div class="z-10 flex flex-col items-center justify-center p-4 text-center">
                <!-- Título centrado y grande -->
                <h1
                    class="mb-4 text-2xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    <span
                        class="underline underline-offset-2 decoration-4 decoration-blue-400 dark:decoration-blue-600">{{ $tour->title }}</span>
                </h1>
                <p class="mt-2 text-sm sm:text-base md:text-lg">{{ $tour->description_corta }}</p>
            </div>
        </div>
    </section>





    {{-- <div class="flex flex-col min-h-screen gap-4 md:flex-row">
        <!-- Segunda columna (móvil: al principio) -->
        <div class="flex flex-col order-1 w-full md:w-1/2 md:order-2">
            <div class="h-full p-4 bg-purple-500 shadow-lg">

                <img src="{{ $tour->imagen }}" alt="{{ $tour->title }}" class="w-full h-auto rounded-lg">
            </div>
        </div>

        <!-- Primera columna (móvil: en el medio, después de la columna 2) -->
        <!-- Este es el contenedor principal que se mantiene igual para escritorio -->
        <div class="flex flex-col order-2 w-1/4 md:w-1/6 md:order-1">

            <!-- Para dispositivos móviles, se define un grid horizontal -->
            <div class="sm:grid sm:grid-flow-col sm:auto-cols-max sm:gap-4 md:flex md:flex-col">

                <!-- Cada div se convierte en un elemento del grid en móviles -->
                <div class="p-2 bg-red-500 shadow-md sm:h-auto md:h-1/4">
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        alt="Descripción de la imagen" class="w-full h-auto rounded">
                </div>
                <div class="p-2 bg-blue-500 shadow-md sm:h-auto md:h-1/4">
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        alt="Descripción de la imagen" class="w-full h-auto rounded">
                </div>
                <div class="p-2 bg-green-500 shadow-md sm:h-auto md:h-1/4">
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        alt="Descripción de la imagen" class="w-full h-auto rounded">
                </div>
                <div class="p-2 bg-yellow-500 shadow-md sm:h-auto md:h-1/4">
                    <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                        alt="Descripción de la imagen" class="w-full h-auto rounded">
                </div>
            </div>
        </div>


        <!-- Tercera columna (móvil: al final) -->
        <div class="flex flex-col order-3 w-full md:w-1/3 md:order-3">
            <div class="h-full p-4 bg-pink-500 shadow-lg">
                <h2 class="text-2xl font-bold text-white">Reserva tu Aventura</h2>
                <p class="text-white">{{ $tour->description_corta }}</p>
                <div class="mt-4">
                    <span class="text-lg font-semibold text-white">¡Precio Exclusivo!: </span>
                    <span class="text-lg text-white">${{ number_format($tour->price->value, 2) }}</span>
                </div>
                <div class="mt-4">
                    <label for="date" class="block font-bold text-white">Elige tu Fecha:</label>
                    <input type="date" id="date" name="date" class="w-full p-2 rounded">
                </div>
                <div class="mt-4">
                    <label for="people" class="block font-bold text-white">Número de Participantes:</label>
                    <select id="people" name="people" class="w-full p-2 text-gray-700 bg-white rounded">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="flex mt-4 space-x-4">
                    <button class="px-4 py-2 font-bold text-pink-500 bg-white rounded shadow">Agregar al
                        carrito</button>
                    <button class="px-4 py-2 font-bold text-pink-500 bg-white rounded shadow">Comprar Ahora</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex">
        <!-- Contenido principal -->
        <div class="flex-grow p-4">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                <!-- Título Principal -->
                <h1 class="mb-4 text-3xl font-bold text-gray-800 dark:text-gray-200">Vista Rápida de la Actividad</h1>

                <!-- Subtítulo y Texto de Ejemplo -->
                <div class="mb-6">
                    <h2 class="text-2xl text-gray-700 dark:text-gray-300">Resumen de la Actividad</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Aquí puedes incluir un breve resumen o descripción de la actividad. Este texto es solo un
                        ejemplo para
                        ilustrar cómo podría verse tu contenido. Asegúrate de reemplazarlo con información pertinente
                        sobre
                        la actividad que estás promoviendo o describiendo.
                    </p>
                </div>

                <!-- Otro Subtítulo y Texto Adicional -->
                <div>
                    <h2 class="text-2xl text-gray-700 dark:text-gray-300">Detalles Adicionales</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Aquí puedes añadir más detalles sobre la actividad. Podría ser información sobre la ubicación,
                        duración,
                        elementos necesarios para participar, o cualquier otro detalle relevante que los participantes
                        necesiten saber.
                    </p>
                </div>
            </div>
        </div>


        <!-- Panel lateral derecho -->
        <div
            class="hidden sm:block sm:sticky top-[60px] right-0 z-10 w-1/2 h-screen bg-gray-50 dark:bg-gray-800 overflow-auto">
            <div class="p-4 mt-[10px]"> <!-- Añade un margin-top aquí igual a la altura de la navbar -->
                <p>Panel Derecho</p>
                <h2 class="text-2xl font-bold text-white">Reserva tu Aventura</h2>
                <p class="text-white">{{ $tour->description_corta }}</p>
                <div class="mt-4">
                    <span class="text-lg font-semibold text-white">¡Precio Exclusivo!: </span>
                    <span class="text-lg text-white">${{ number_format($tour->price->value, 2) }}</span>
                </div>
                <div class="mt-4">
                    <label for="date" class="block font-bold text-white">Elige tu Fecha:</label>
                    <input type="date" id="date" name="date" class="w-full p-2 rounded">
                </div>
                <div class="mt-4">
                    <label for="people" class="block font-bold text-white">Número de Participantes:</label>
                    <select id="people" name="people" class="w-full p-2 text-gray-700 bg-white rounded">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="flex mt-4 space-x-4">
                    <button class="px-4 py-2 font-bold text-pink-500 bg-white rounded shadow">Agregar al
                        carrito</button>
                    <button class="px-4 py-2 font-bold text-pink-500 bg-white rounded shadow">Comprar Ahora</button>
                </div>
            </div>
        </div>

    </div> --}}

    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow">
            <div class="px-4 py-5 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card headers on desktop than on body sections -->
                <nav class="flex" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                    <svg class="flex-shrink-0 w-5 h-5" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="#"
                                    class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Projects</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                                    aria-current="page">Project Nero</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->
                <div class="bg-white">
                    <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                        <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
                            <!-- Image gallery -->
                            <div class="flex flex-col-reverse">
                                <!-- Image selector -->
                                <!-- Imagenes pequeñas -->
                                <div class="hidden w-full max-w-2xl mx-auto mt-6 sm:block lg:max-w-none">
                                    <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                                        <button id="tabs-1-tab-1"
                                            class="relative flex items-center justify-center h-24 text-sm font-medium text-gray-900 uppercase bg-white rounded-md cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                            aria-controls="tabs-1-panel-1" role="tab" type="button">
                                            <span class="sr-only">Angled view</span>
                                            <span class="absolute inset-0 overflow-hidden rounded-md">
                                                <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                                    alt="" class="object-cover object-center w-full h-full">
                                            </span>
                                            <!-- Seleccionado: "ring-indigo-500", No seleccionado: "ring-transparent" -->
                                            <span
                                                class="absolute inset-0 rounded-md pointer-events-none ring-transparent ring-2 ring-offset-2"
                                                aria-hidden="true"></span>
                                        </button>

                                        <button id="tabs-1-tab-1"
                                            class="relative flex items-center justify-center h-24 text-sm font-medium text-gray-900 uppercase bg-white rounded-md cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                            aria-controls="tabs-1-panel-1" role="tab" type="button">
                                            <span class="sr-only">Angled view</span>
                                            <span class="absolute inset-0 overflow-hidden rounded-md">
                                                <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                                    alt="" class="object-cover object-center w-full h-full">
                                            </span>
                                            <!-- Seleccionado: "ring-indigo-500", No seleccionado: "ring-transparent" -->
                                            <span
                                                class="absolute inset-0 rounded-md pointer-events-none ring-transparent ring-2 ring-offset-2"
                                                aria-hidden="true"></span>
                                        </button>
                                        <button id="tabs-1-tab-1"
                                            class="relative flex items-center justify-center h-24 text-sm font-medium text-gray-900 uppercase bg-white rounded-md cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                            aria-controls="tabs-1-panel-1" role="tab" type="button">
                                            <span class="sr-only">Angled view</span>
                                            <span class="absolute inset-0 overflow-hidden rounded-md">
                                                <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                                    alt="" class="object-cover object-center w-full h-full">
                                            </span>
                                            <!-- Seleccionado: "ring-indigo-500", No seleccionado: "ring-transparent" -->
                                            <span
                                                class="absolute inset-0 rounded-md pointer-events-none ring-transparent ring-2 ring-offset-2"
                                                aria-hidden="true"></span>
                                        </button>
                                        <button id="tabs-1-tab-1"
                                            class="relative flex items-center justify-center h-24 text-sm font-medium text-gray-900 uppercase bg-white rounded-md cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                            aria-controls="tabs-1-panel-1" role="tab" type="button">
                                            <span class="sr-only">Angled view</span>
                                            <span class="absolute inset-0 overflow-hidden rounded-md">
                                                <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                                    alt="" class="object-cover object-center w-full h-full">
                                            </span>
                                            <!-- Seleccionado: "ring-indigo-500", No seleccionado: "ring-transparent" -->
                                            <span
                                                class="absolute inset-0 rounded-md pointer-events-none ring-transparent ring-2 ring-offset-2"
                                                aria-hidden="true"></span>
                                        </button>

                                        <!-- Más imágenes... -->
                                    </div>
                                </div>

                                <div class="w-full aspect-h-1 aspect-w-1">
                                    <!-- Panel de pestañas, mostrar/ocultar según el estado de la pestaña. -->
                                    <div id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel"
                                        tabindex="0">
                                        <img src="https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3"
                                            alt="Angled front view with bag zipped and handles upright."
                                            class="object-cover object-center w-full h-full sm:rounded-lg">
                                    </div>

                                    <!-- More images... -->
                                </div>
                            </div>

                            <!-- Product info -->
                            <div class="px-4 mt-10 sm:mt-16 sm:px-0 lg:mt-0">
                                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $tour->title }}</h1>

                                <div class="p-4 mt-3 bg-white rounded-lg shadow">
                                    <h2 class="sr-only">Información de precios</h2>
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-base font-semibold text-gray-700">Precios desde:</span>
                                        <p class="text-3xl font-bold text-gray-900">USD258 <span
                                                class="text-lg font-medium text-gray-600">por persona</span></p>
                                        <p class="text-sm font-semibold text-green-600">Sin costos extra</p>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <h3 class="sr-only">Description</h3>
                                    <div class="space-y-6 text-base text-gray-700">
                                        <p>{{ $tour->description_corta }}</p>
                                    </div>
                                </div>

                                <form class="mt-6">
                                    <!-- Input de fecha -->
                                    <div class="mb-4">
                                        <label for="date" class="block text-sm font-medium text-gray-700">Fecha
                                            del
                                            tour:</label>
                                        <input type="date" id="date" name="date"
                                            class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>

                                    <!-- Input de participantes -->
                                    <div class="mb-4">
                                        <label for="participants"
                                            class="block text-sm font-medium text-gray-700">Número
                                            de
                                            participantes:</label>
                                        <input type="number" id="participants" name="participants"
                                            class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            placeholder="Ingrese el número de personas">
                                    </div>

                                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                                        <!-- Botón Comprar -->
                                        <button type="submit"
                                            class="flex items-center justify-center flex-1 px-8 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                            Comprar
                                        </button>

                                        <!-- Botón Agregar al carrito -->
                                        <button type="button"
                                            class="flex items-center justify-center flex-1 px-8 py-3 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                            Agregar al carrito
                                        </button>
                                    </div>
                                </form>

                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-gray-900">Métodos de Pago Aceptados</h3>
                                    <div class="flex mt-2 space-x-4">
                                        <img src="/path/to/visa.png" alt="VISA" class="h-8">
                                        <img src="/path/to/amex.png" alt="AMEX" class="h-8">
                                        <img src="/path/to/mastercard.png" alt="MasterCard" class="h-8">
                                        <img src="/path/to/yape.png" alt="YAPE" class="h-8">
                                        <img src="/path/to/plin.png" alt="PLIN" class="h-8">
                                        <img src="/path/to/diners.png" alt="Diners Club" class="h-8">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col min-h-full">
            <header class="bg-white border-b border-gray-200 shrink-0">
                <!-- Encabezado de la seccion, acá sera las caracteristicas del TOUR -->
            </header>

            <div class="flex items-start w-full px-4 py-10 mx-auto max-w-7xl gap-x-8 sm:px-6 lg:px-8">
                <!--  Desabilitado por el momento -->
                {{-- <aside class="sticky hidden top-8 w-44 shrink-0 xl:block">
                    <!-- Menú lateral izquierdo para categorías o secciones populares -->

                </aside> --}}
                <!-- Parte central, -->
                <main class="flex-1">
                    <!-- Descripción -->
                    <section>




                        <h5 class="text-xl font-bold dark:text-white">Descripción general</h5><br>
                        <p class="text-gray-500 dark:text-gray-400"> {{ $tour->description_larga }}
                        </p><br>


                        <h5 class="text-xl font-bold dark:text-white">Itinerario</h5><br>
                        <nav aria-label="Itinerary Progress">
                            <ol role="list" class="overflow-hidden">
                                @foreach ($itineraries as $itinerary)
                                    <li class="relative pb-10">
                                        {{-- Condicional para aplicar estilos solo si no es el último elemento --}}
                                        @if (!$loop->last)
                                            <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-green-600"
                                                aria-hidden="true"></div>
                                        @else
                                            <div class="absolute left-4 top-4 -ml-px mt-0.5 h-0.5 bg-green-600"
                                                aria-hidden="true"></div>
                                        @endif
                                        <!-- Informative Step -->
                                        <div class="relative flex items-start">
                                            <span class="flex items-center h-9">
                                                <span
                                                    class="relative z-10 flex items-center justify-center w-8 h-8 bg-indigo-600 rounded-full">
                                                    <i class="text-lg text-white fas fa-map-marked-alt"></i>
                                                </span>
                                            </span>
                                            <span class="flex flex-col min-w-0 ml-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <div class="flex items-center">
                                                        <i class="mr-2 text-indigo-500 fas fa-clock"></i>
                                                        <span class="font-semibold text-indigo-700">Inicio:
                                                            {{ $itinerary->start->format('H:i') }}</span>
                                                        <span class="mx-2 text-indigo-500">|</span>
                                                        <span class="font-semibold text-indigo-700">Fin:
                                                            {{ $itinerary->end->format('H:i') }}</span>
                                                    </div>
                                                </div>
                                                <span class="text-sm font-medium">{{ $itinerary->title }}</span>
                                                <span
                                                    class="text-sm text-gray-500">{{ $itinerary->description }}</span>
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </nav><br>
                        <h5 class="text-xl font-bold dark:text-white">¿Qué está incluido?</h5><br>

                        @foreach ($includedServices as $service)
                            <div class="max-w-md">
                                <ul class="space-y-1 list-none">
                                    <li class="flex items-center text-gray-500 dark:text-gray-400">
                                        <svg class="flex-shrink-0 w-4 h-4 mr-2 text-green-500 dark:text-green-400"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            role="img">
                                            <title>Included</title>
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414Z">
                                            </path>
                                        </svg>
                                        <span class="whitespace-nowrap">{{ $service->name }}</span>
                                    </li>
                                </ul>
                            </div>
                        @endforeach








                        <br>
                        <h5 class="text-xl font-bold dark:text-white">¿Qué no está incluido?</h5><br>



                        @foreach ($excludedServices as $service)
                            <li class="flex items-center text-gray-500 dark:text-gray-400">

                                <svg class="w-6 h-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span class="whitespace-nowrap">{{ $service->name }}</span>
                            </li>
                        @endforeach <br>

                        {{-- restricciones --}}
                        <div x-data="{ open: false }" id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 text-gray-500 focus:outline-none"
                                    @click="open = !open" aria-expanded="open"
                                    aria-controls="accordion-collapse-body-1">
                                    <span class="text-xl font-bold dark:text-white">Restricciones</span>
                                    <svg :class="{ 'rotate-180': open }" class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div x-show="open" id="accordion-collapse-body-1" class="p-5"
                                aria-labelledby="accordion-collapse-heading-1">
                                <ul>
                                    @foreach ($restrictions as $restriction)
                                        <li class="flex items-center text-gray-500">
                                            <svg class="w-6 h-6 mr-2 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            <span class="whitespace-nowrap">{{ $restriction->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><br>

                        {{-- Review (opiniones) --}}
                        <div class="bg-white">
                            <div
                                class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-20">
                                <div class="lg:col-span-4">
                                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Opiniones</h2>

                                    <div class="flex items-center mt-3">
                                        <div>
                                            <div class="flex items-center">
                                                <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-300" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <p class="sr-only">4 out of 5 stars</p>

                                        </div>
                                        <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">4.95</p>
                                        <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">out of</p>
                                        <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">5</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">1,745 global
                                        ratings</p>

                                    <div class="mt-6">
                                        <h3 class="sr-only">Review data</h3>

                                        <dl class="space-y-3">
                                            <div class="flex items-center text-sm">
                                                <dt class="flex items-center flex-1">
                                                    <a href="#" class="flex items-center w-full text-gray-900">
                                                        <p class="w-3 font-medium">5<span class="sr-only"> star
                                                                reviews</span></p>
                                                        <div aria-hidden="true" class="flex items-center flex-1 ml-1">
                                                            <svg class="flex-shrink-0 w-5 h-5 text-yellow-400"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <div class="relative flex-1 ml-3">
                                                                <div
                                                                    class="h-3 bg-gray-100 border border-gray-200 rounded-full">
                                                                </div>
                                                                <div style="width: calc(1019 / 1624 * 100%)"
                                                                    class="absolute inset-y-0 bg-yellow-400 border border-yellow-400 rounded-full">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </dt>

                                                <dd
                                                    class="w-10 ml-3 text-sm font-medium text-right text-gray-500 tabular-nums dark:text-gray-400">
                                                    63%
                                                </dd>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <dt class="flex items-center flex-1">
                                                    <a href="#" class="flex items-center w-full text-gray-900">
                                                        <p class="w-3 font-medium text-gray-900">4<span
                                                                class="sr-only">
                                                                star reviews</span></p>
                                                        <div aria-hidden="true" class="flex items-center flex-1 ml-1">
                                                            <svg class="flex-shrink-0 w-5 h-5 text-yellow-400"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                            <div class="relative flex-1 ml-3">
                                                                <div
                                                                    class="h-3 bg-gray-100 border border-gray-200 rounded-full">
                                                                </div>
                                                                <div style="width: calc(162 / 1624 * 100%)"
                                                                    class="absolute inset-y-0 bg-yellow-400 border border-yellow-400 rounded-full">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </dt>
                                                <dd
                                                    class="w-10 ml-3 text-sm font-medium text-right text-gray-500 tabular-nums dark:text-gray-400">
                                                    13%
                                                </dd>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <dt class="flex items-center flex-1">
                                                    <a href="#" class="flex items-center w-full text-gray-900">
                                                        <p class="w-3 font-medium text-gray-900">3<span
                                                                class="sr-only">
                                                                star reviews</span></p>
                                                        <div aria-hidden="true" class="flex items-center flex-1 ml-1">
                                                            <svg class="flex-shrink-0 w-5 h-5 text-yellow-400"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                            <div class="relative flex-1 ml-3">
                                                                <div
                                                                    class="h-3 bg-gray-100 border border-gray-200 rounded-full">
                                                                </div>
                                                                <div style="width: calc(97 / 1624 * 100%)"
                                                                    class="absolute inset-y-0 bg-yellow-400 border border-yellow-400 rounded-full">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </dt>
                                                <dd
                                                    class="w-10 ml-3 text-sm font-medium text-right text-gray-500 tabular-nums dark:text-gray-400">
                                                    13%
                                                </dd>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <dt class="flex items-center flex-1">
                                                    <a href="#" class="flex items-center w-full text-gray-900">
                                                        <p class="w-3 font-medium text-gray-900">2<span
                                                                class="sr-only">
                                                                star reviews</span></p>
                                                        <div aria-hidden="true" class="flex items-center flex-1 ml-1">
                                                            <svg class="flex-shrink-0 w-5 h-5 text-yellow-400"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                            <div class="relative flex-1 ml-3">
                                                                <div
                                                                    class="h-3 bg-gray-100 border border-gray-200 rounded-full">
                                                                </div>
                                                                <div style="width: calc(199 / 1624 * 100%)"
                                                                    class="absolute inset-y-0 bg-yellow-400 border border-yellow-400 rounded-full">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </dt>
                                                <dd
                                                    class="w-10 ml-3 text-sm font-medium text-right text-gray-500 tabular-nums dark:text-gray-400">
                                                    13%
                                                </dd>
                                            </div>
                                            <div class="flex items-center text-sm">
                                                <dt class="flex items-center flex-1">
                                                    <a href="#" class="flex items-center w-full text-gray-900">
                                                        <p class="w-3 font-medium text-gray-900">1<span
                                                                class="sr-only">
                                                                star reviews</span></p>
                                                        <div aria-hidden="true" class="flex items-center flex-1 ml-1">
                                                            <svg class="flex-shrink-0 w-5 h-5 text-yellow-400"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                            <div class="relative flex-1 ml-3">
                                                                <div
                                                                    class="h-3 bg-gray-100 border border-gray-200 rounded-full">
                                                                </div>
                                                                <div style="width: calc(147 / 1624 * 100%)"
                                                                    class="absolute inset-y-0 bg-yellow-400 border border-yellow-400 rounded-full">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </dt>
                                                <dd
                                                    class="w-10 ml-3 text-sm font-medium text-right text-gray-500 tabular-nums dark:text-gray-400">
                                                    13%
                                                </dd>
                                            </div>
                                        </dl>
                                    </div>

                                    <div class="mt-10">
                                        <h3 class="text-lg font-medium text-gray-900">Share your thoughts</h3>
                                        <p class="mt-1 text-sm text-gray-600">If you’ve used this product, share your
                                            thoughts with other customers</p>

                                        <a href="#"
                                            class="inline-flex items-center justify-center w-full px-8 py-2 mt-6 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-md hover:bg-gray-50 sm:w-auto lg:w-full">Write
                                            a review</a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        {{-- Review de los usuarios --}}
                        <article>
                            <div class="flex items-center mb-4">
                                <img class="w-10 h-10 rounded-full me-4"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="">
                                <div class="font-medium dark:text-white">
                                    <p>Jese Leos <time datetime="2014-08-16 19:00"
                                            class="block text-sm text-gray-500 dark:text-gray-400">Joined on August
                                            2014</time></p>
                                </div>
                            </div>
                            <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <h3 class="text-sm font-semibold text-gray-900 ms-2 dark:text-white">Thinking to buy
                                    another one!</h3>
                            </div>
                            <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
                                <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3,
                                        2017</time></p>
                            </footer>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They
                                are just fantastic value for money. This one arrived yesterday and the first thing I did
                                was set the time, popped on an identical strap from another Invicta and went in the
                                shower with it to test the waterproofing.... No problems.</p>
                            <p class="mb-3 text-gray-500 dark:text-gray-400">It is obviously not the same build quality
                                as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This
                                watch was well under £100! An absolute bargain.</p>
                            <a href="#"
                                class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                more</a>
                            <aside>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this helpful
                                </p>
                                <div class="flex items-center mt-3">
                                    <a href="#"
                                        class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Helpful</a>
                                    <a href="#"
                                        class="text-sm font-medium text-blue-600 border-gray-200 ps-4 hover:underline dark:text-blue-500 ms-4 border-s md:mb-0 dark:border-gray-600">Report
                                        abuse</a>
                                </div>
                            </aside>
                        </article>








                        {{-- preguntas frecuentes --}}


                        <div class="bg-white">
                            <div class="px-6 py-24 mx-auto max-w-7xl sm:py-32 lg:px-8 lg:py-40">
                                <div class="max-w-4xl mx-auto divide-y divide-gray-900/10" x-data="{ selectedFaq: null }">
                                    <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Preguntas
                                        frecuentes</h2>
                                    <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                                        @foreach ($faqs as $index => $faq)
                                            <div :class="{ 'bg-gray-100': selectedFaq === {{ $index }} }">
                                                <dt>
                                                    <button type="button"
                                                        class="flex items-start justify-between w-full text-left text-gray-900"
                                                        :aria-expanded="selectedFaq === {{ $index }}"
                                                        aria-controls="faq-{{ $index }}"
                                                        @click="selectedFaq = selectedFaq === {{ $index }} ? null : {{ $index }}">
                                                        <span
                                                            class="text-base font-semibold leading-7">{{ $faq->question }}</span>
                                                        <span class="flex items-center ml-6 h-7">
                                                            <svg :class="{ 'hidden': selectedFaq !== {{ $index }} }"
                                                                class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                                stroke-width="1.5" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 6v12m6-6H6" />
                                                            </svg>
                                                            <svg :class="{ 'hidden': selectedFaq === {{ $index }} }"
                                                                class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                                stroke-width="1.5" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M18 12H6" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </dt>
                                                <dd class="pr-12 mt-2" id="faq-{{ $index }}"
                                                    x-show="selectedFaq === {{ $index }}">
                                                    <p class="text-base leading-7 text-gray-600">{{ $faq->answer }}
                                                    </p>
                                                </dd>
                                            </div>
                                        @endforeach
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <!-- Parte derecha, en moviles se oculta -->

                <aside class="sticky hidden p-4 bg-white rounded-lg shadow lg:block top-8 w-96 shrink-0">
                    <!-- Tarjeta de Promoción y Compra -->
                    <div class="space-y-4">
                        <br>
                        <h2 class="text-2xl font-bold text-gray-900">Machu Picchu al Atardecer</h2>
                        <p class="text-gray-500">Selecciona número de participantes y fecha</p>
                        <div class="flex flex-wrap gap-4">
                            <div class="flex-1 min-w-[140px]">
                                <label for="date" class="block text-sm font-medium text-gray-700">Fecha:</label>
                                <input type="date" id="date" name="date"
                                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="dd/mm/yyyy">
                            </div>
                            <div class="flex-1 min-w-[140px]">
                                <label for="participants"
                                    class="block text-sm font-medium text-gray-700">Personas:</label>
                                <input type="number" id="participants" name="participants"
                                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    min="1" value="1">
                            </div>
                        </div>

                        <div class="p-4 bg-gray-100 rounded-lg">
                            <p class="text-lg font-semibold text-gray-900">Desde</p>
                            <p class="text-3xl font-bold text-gray-900">USD258 <span class="text-lg text-gray-600">por
                                    persona</span></p>
                            <p class="text-green-600">Sin costos extra</p>
                        </div>
                        <div class="flex flex-wrap gap-4 mt-4">
                            <button type="submit"
                                class="flex-1 px-8 py-3 text-base font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Agregar al carrito
                            </button>
                            <button type="button"
                                class="flex-1 px-8 py-3 text-base font-medium text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                Comprar
                            </button>
                        </div>
                    </div>

                    <!-- Tarjeta de Opciones de Pago -->
                    <div class="p-4 mt-6 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium text-gray-900">Métodos de Pago</h3>
                        <div class="flex mt-2 space-x-3">
                            <!-- Iconos de FontAwesome para las tarjetas de crédito y otros métodos de pago -->
                            <span class="flex items-center">
                                <i class="text-xl fa-brands fa-cc-visa"></i>
                                <span class="ml-1">VISA</span>
                            </span>
                            <span class="flex items-center">
                                <i class="text-xl fa-brands fa-cc-mastercard"></i>
                                <span class="ml-1">MasterCard</span>
                            </span>
                            <span class="flex items-center">
                                <i class="text-xl fa-brands fa-cc-amex"></i>
                                <span class="ml-1">AMEX</span>
                            </span>
                        </div>
                        <div class="flex mt-2 space-x-3">
                            <span class="flex items-center">
                                <i class="text-xl fa-brands fa-cc-diners-club"></i>
                                <span class="ml-1">Diners</span>
                            </span>
                            <!-- Iconos genéricos para Yape y Plin si no hay iconos específicos disponibles -->
                            <span class="flex items-center">
                                <i class="text-xl fa-solid fa-mobile"></i>
                                <span class="ml-1">Yape</span>
                            </span>
                            <span class="flex items-center">
                                <i class="text-xl fa-solid fa-wallet"></i>
                                <span class="ml-1">Plin</span>
                            </span>

                        </div>


                    </div>




                    <!-- Botones de Acción Social -->
                    <div class="mt-6 space-y-4">
                        <div>
                            <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers"
                                data-dropdown-placement="bottom"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">Compartir

                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.7"
                                        d="m15.141 6 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-6.154-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646l-5.108-4.251a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z" />
                                </svg>

                            </button>
                            <span class="block mt-1 text-xs text-gray-600">Comparte con tus amigos</span>
                        </div>
                        <div>
                            <button
                                class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                Descargar
                                <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <span class="block mt-1 text-xs text-gray-600">Descargar el tour en PDF</span>
                        </div>


                        <!-- Dropdown menu -->
                        <div id="dropdownUsers" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                            <ul class="h-48 py-2 overflow-y-auto text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownUsersButton">
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <i class="w-6 h-6 mr-2 fab fa-facebook-f"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <i class="w-6 h-6 mr-2 fab fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <i class="w-6 h-6 mr-2 fab fa-whatsapp"></i>
                                        WhatsApp
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <i class="w-6 h-6 mr-2 fas fa-ellipsis-h"></i>
                                        Otros
                                    </a>
                                </li>
                            </ul>
                            <a href="#"
                                class="flex items-center p-3 text-sm font-medium text-blue-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="0.6"
                                        d="m15.141 6 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-6.154-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646l-5.108-4.251a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z" />
                                </svg>
                                "Comparte y conecta con más personas!"
                            </a>
                        </div>

                        <div class="p-4 bg-white rounded-lg shadow-lg">
                            <h3 class="text-lg font-semibold text-gray-900">¿Necesitas ayuda?</h3>
                            <p class="text-gray-600">Contáctanos</p>
                            <div class="mt-4 space-y-2">
                                <div class="flex items-center">
                                    <i class="text-xl text-green-500 fab fa-whatsapp"></i>
                                    <a href="https://wa.me/1234567890" class="ml-2 text-blue-600 hover:underline">+123
                                        456 7890</a>
                                </div>
                                <div class="flex items-center">
                                    <i class="text-xl text-blue-500 fas fa-phone-alt"></i>
                                    <span class="ml-2 text-gray-700">+123 456 7890</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="text-xl text-red-500 fas fa-envelope"></i>
                                    <a href="mailto:info@example.com"
                                        class="ml-2 text-blue-600 hover:underline">info@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        </div>



    </div>





















    <!-- Contenedor principal que controla la visibilidad en scroll con Alpine.js -->
    <div x-data="{ show: false }" @scroll.window="show = (window.scrollY > 50)"
        class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600 sm:hidden"
        x-show="show" style="display: none;">
        <div class="grid h-full max-w-lg grid-cols-3 mx-auto font-medium">
            <!-- Botón Comprar -->
            <button type="button"
                class="inline-flex items-center justify-center col-span-2 px-5 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-700 dark:hover:bg-blue-800">
                Comprar
            </button>
            <!-- Botón Carrito con icono de agregar (Font Awesome) -->
            <button type="button"
                class="inline-flex items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <i
                    class="text-gray-500 fas fa-plus-circle dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"></i>
            </button>
        </div>
    </div>
</x-guest-layout>
