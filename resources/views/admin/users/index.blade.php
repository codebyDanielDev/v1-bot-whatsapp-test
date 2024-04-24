<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'route' => route('admin.dashboard')], ['name' => 'Usuarios']]">

    <div class="relative px-4 bg-white shadow-md dark:bg-gray-800 sm:rounded-tl-lg sm:rounded-tr-lg">
        <div class="flex items-center justify-between pt-4 md:pb-4">

            <div class="flex items-center flex-1 space-x-2">
                <h5>
                    <span class="dark:text-white">{{ __('See all tours') }}</span>
                </h5>
                <div class="font-medium text-gray-400">6,560 {{ __('Results') }}</div>
                <div data-tooltip-target="results-tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewbox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">More info</span>
                </div>
                <div id="results-tooltip" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Showing 1-10 of 6,560 results
                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <button type="button"
                    class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    {{ __('View') }} JSON
                </button>

                <button type="button" id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                    data-dropdown-trigger="hover"
                    class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                    </svg>
                    {{ __('Export') }}
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownHover"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="#"
                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-[29px] h-[29px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
                                        clip-rule="evenodd" />
                                </svg>


                                PDF
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">



                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="20px"
                                    height="20px">
                                    <path
                                        d="M 28.8125 0.03125 L 0.8125 5.34375 C 0.339844 5.433594 0 5.863281 0 6.34375 L 0 43.65625 C 0 44.136719 0.339844 44.566406 0.8125 44.65625 L 28.8125 49.96875 C 28.875 49.980469 28.9375 50 29 50 C 29.230469 50 29.445313 49.929688 29.625 49.78125 C 29.855469 49.589844 30 49.296875 30 49 L 30 1 C 30 0.703125 29.855469 0.410156 29.625 0.21875 C 29.394531 0.0273438 29.105469 -0.0234375 28.8125 0.03125 Z M 32 6 L 32 13 L 34 13 L 34 15 L 32 15 L 32 20 L 34 20 L 34 22 L 32 22 L 32 27 L 34 27 L 34 29 L 32 29 L 32 35 L 34 35 L 34 37 L 32 37 L 32 44 L 47 44 C 48.101563 44 49 43.101563 49 42 L 49 8 C 49 6.898438 48.101563 6 47 6 Z M 36 13 L 44 13 L 44 15 L 36 15 Z M 6.6875 15.6875 L 11.8125 15.6875 L 14.5 21.28125 C 14.710938 21.722656 14.898438 22.265625 15.0625 22.875 L 15.09375 22.875 C 15.199219 22.511719 15.402344 21.941406 15.6875 21.21875 L 18.65625 15.6875 L 23.34375 15.6875 L 17.75 24.9375 L 23.5 34.375 L 18.53125 34.375 L 15.28125 28.28125 C 15.160156 28.054688 15.035156 27.636719 14.90625 27.03125 L 14.875 27.03125 C 14.8125 27.316406 14.664063 27.761719 14.4375 28.34375 L 11.1875 34.375 L 6.1875 34.375 L 12.15625 25.03125 Z M 36 20 L 44 20 L 44 22 L 36 22 Z M 36 27 L 44 27 L 44 29 L 36 29 Z M 36 35 L 44 35 L 44 37 L 36 37 Z" />
                                </svg>
                                Excel
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-[29px] h-[29px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1.018 8.828a2.34 2.34 0 0 0-2.373 2.13v.008a2.32 2.32 0 0 0 2.06 2.497l.535.059a.993.993 0 0 0 .136.006.272.272 0 0 1 .263.367l-.008.02a.377.377 0 0 1-.018.044.49.49 0 0 1-.078.02 1.689 1.689 0 0 1-.297.021h-1.13a1 1 0 1 0 0 2h1.13c.417 0 .892-.05 1.324-.279.47-.248.78-.648.953-1.134a2.272 2.272 0 0 0-2.115-3.06l-.478-.052a.32.32 0 0 1-.285-.341.34.34 0 0 1 .344-.306l.94.02a1 1 0 1 0 .043-2l-.943-.02h-.003Zm7.933 1.482a1 1 0 1 0-1.902-.62l-.57 1.747-.522-1.726a1 1 0 0 0-1.914.578l1.443 4.773a1 1 0 0 0 1.908.021l1.557-4.773Zm-13.762.88a.647.647 0 0 1 .458-.19h1.018a1 1 0 1 0 0-2H6.647A2.647 2.647 0 0 0 4 13.647v1.706A2.647 2.647 0 0 0 6.647 18h1.018a1 1 0 1 0 0-2H6.647A.647.647 0 0 1 6 15.353v-1.706c0-.172.068-.336.19-.457Z"
                                        clip-rule="evenodd" />
                                </svg>
                                CSV
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div
            class="flex flex-col-reverse items-stretch justify-between pb-4 space-y-3 md:flex-row md:items-center md:space-y-0">
            <div class="flex flex-col w-full space-y-3 lg:w-2/3 md:space-y-0 md:flex-row md:items-center">
                <form class="flex-1 w-full md:max-w-sm md:mr-4">
                    <label for="default-search"
                        class="text-sm font-medium text-gray-900 sr-only dark:text-white">{{ __('Search') }}</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder=" {{ __('Search') }}..." required="">
                        <button type="submit"
                            class="absolute top-0 bottom-0 right-0 px-4 py-2 text-sm font-medium text-white rounded-r-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            {{ __('Search') }}
                        </button>
                    </div>
                </form>
                <div class="flex items-center space-x-4">
                    <div>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" type="button"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" />
                            </svg>
                            {{ __('Filter') }}
                        </button>
                        <div id="filterDropdown"
                            class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                Category
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Apple (56)
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Fitbit (56)
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="dell"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Dell (56)
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="asus"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Asus (97)
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <button id="configurationDropdownButton" data-dropdown-toggle="configurationDropdown"
                            type="button"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 mr-2 text-gray-400" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ __('Configurations') }}

                        </button>
                        <div id="configurationDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="configurationDropdownButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        By Category
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        By Brand
                                    </a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Reset
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col items-stretch justify-end flex-shrink-0 w-full pb-4 md:pb-0 md:w-auto md:flex-row md:items-center md:space-x-3">
                <a href="{{ route('admin.users.create') }}"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    {{ __('Add new user') }}
                </a>
            </div>

        </div>


        <div class="flex flex-wrap pt-1 pb-4 border-t dark:border-gray-700">
            <div class="items-center hidden mt-3 mr-4 text-sm font-medium text-gray-900 md:flex dark:text-white">
                {{ __('Show') }} {{ __('only') }}
                :
            </div>

            <div class="flex flex-wrap">
                <div class="flex items-center mt-3 mr-4">
                    <input id="all-products" type="radio" value="" name="show-only"
                        class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="all-products" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        {{ __('All') }}
                    </label>
                </div>
                <div class="flex items-center mt-3 mr-4">
                    <input id="active" type="radio" value="" name="show-only"
                        class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="active" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        {{ __('Active tours') }}
                    </label>
                </div>
                <div class="flex items-center mt-3 mr-4">
                    <input id="pending" type="radio" value="" name="show-only"
                        class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="pending" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Pending products
                    </label>
                </div>
                <div class="flex items-center mt-3 mr-4">
                    <input id="inactive" type="radio" value="" name="show-only"
                        class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inactive" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        {{ __('Inactive tours') }}
                    </label>
                </div>
            </div>
        </div>
    </div>




    {{-- De acá empieza a escribir el contenido de la vista --}}








    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all" type="checkbox"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">Usuario</th>
                        <th scope="col" class="px-4 py-3">Rol</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap">Redes sociales</th>
                        <th scope="col" class="px-4 py-3">Estado</th>
                        <th scope="col" class="px-4 py-3">Se unió:</th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap">Último acceso</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Acciones</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="w-4 px-4 py-3">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row"
                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center">
                                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/avatar-10.png"
                                    alt="iMac Front Image" class="w-auto h-8 mr-3 rounded-full">
                                Jese Leos
                            </div>
                        </th>
                        <td class="px-4 py-2">
                            <div
                                class="inline-flex items-center bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" viewbox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" />
                                </svg>
                                Administrator
                            </div>
                        </td>
                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center">
                                <div class="w-3 h-3 mr-2 bg-green-500 border rounded-full"></div>
                                Active
                            </div>
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="flex items-center space-x-1.5">
                                <a class="transition hover:text-gray-900 dark:hover:text-white" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="m6.44 7 .329-2.156H4.683V3.437c0-.609.28-1.171 1.218-1.171h.961V.414S5.995.25 5.175.25c-1.711 0-2.836 1.055-2.836 2.93v1.664H.417V7h1.922v5.25h2.344V7H6.44Z" />
                                    </svg>
                                </a>
                                <a class="transition hover:text-gray-900 dark:hover:text-white" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M4.617 9.89c0-.046-.047-.093-.117-.093s-.117.047-.117.094c0 .046.047.093.117.07.07 0 .117-.024.117-.07Zm-.726-.117c0 .047.046.118.117.118.047.023.117 0 .14-.047 0-.047-.023-.094-.093-.117-.07-.024-.14 0-.164.046Zm1.054-.023c-.07 0-.117.047-.117.117 0 .047.07.07.14.047.071-.023.118-.047.095-.094 0-.047-.07-.093-.118-.07Zm1.524-9C3.234.75.75 3.234.75 6.469c0 2.601 1.617 4.828 3.96 5.625.306.047.4-.14.4-.281v-1.454s-1.641.352-1.993-.703c0 0-.258-.68-.633-.844 0 0-.539-.374.024-.374 0 0 .586.046.914.609.515.914 1.36.656 1.71.492.048-.375.188-.633.376-.797-1.313-.14-2.649-.328-2.649-2.578 0-.656.188-.96.563-1.383-.07-.164-.258-.773.07-1.593.469-.141 1.617.632 1.617.632a5.05 5.05 0 0 1 1.454-.187c.515 0 1.007.047 1.476.187 0 0 1.125-.797 1.617-.632.328.82.117 1.43.07 1.593.376.422.61.727.61 1.383 0 2.25-1.383 2.438-2.695 2.578.21.188.398.54.398 1.102 0 .773-.023 1.758-.023 1.945 0 .164.117.352.421.281 2.344-.773 3.938-3 3.938-5.601C12.375 3.234 9.727.75 6.469.75ZM3.023 8.836c-.046.023-.023.094 0 .14.047.024.094.047.141.024.023-.023.023-.094-.023-.14-.047-.024-.094-.047-.118-.024Zm-.257-.188c-.024.047 0 .07.046.094.047.024.094.024.118-.023 0-.024-.024-.047-.07-.07-.047-.024-.07-.024-.094 0Zm.75.844c-.024.024-.024.094.046.14.047.048.118.071.141.024.024-.023.024-.094-.023-.14-.047-.047-.118-.07-.164-.024Zm-.258-.351c-.047.023-.047.093 0 .14.047.047.094.07.14.047.024-.023.024-.094 0-.14-.046-.047-.093-.07-.14-.047Z" />
                                    </svg>
                                </a>
                                <a class="transition hover:text-gray-900 dark:hover:text-white" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M6.563.75C3.352.75.75 3.375.75 6.563a5.811 5.811 0 0 0 5.813 5.812c3.187 0 5.812-2.602 5.812-5.813C12.375 3.376 9.75.75 6.562.75Zm3.82 2.695a4.818 4.818 0 0 1 1.125 3.094c-.164-.047-1.805-.375-3.445-.164-.141-.328-.258-.61-.446-.984 1.852-.75 2.672-1.805 2.766-1.946Zm-.54-.586C9.75 3 9 4.008 7.244 4.664c-.821-1.5-1.712-2.719-1.852-2.906a4.972 4.972 0 0 1 4.453 1.101ZM4.43 2.086A28.23 28.23 0 0 1 6.28 4.969c-2.32.61-4.36.61-4.593.586a5.03 5.03 0 0 1 2.742-3.47Zm-2.836 4.5v-.164c.21.023 2.625.047 5.086-.703.164.281.28.562.422.843-1.805.516-3.446 1.97-4.243 3.329a4.873 4.873 0 0 1-1.265-3.305ZM3.492 10.5c.54-1.055 1.946-2.438 3.938-3.117a19.382 19.382 0 0 1 1.054 3.773 4.965 4.965 0 0 1-4.992-.656Zm5.836.188c-.047-.282-.328-1.735-.96-3.54 1.546-.234 2.905.165 3.093.211a5.06 5.06 0 0 1-2.133 3.329Z" />
                                    </svg>
                                </a>
                                <a class="transition hover:text-gray-900 dark:hover:text-white" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M11.508 2.497c.469-.351.89-.773 1.219-1.265a4.613 4.613 0 0 1-1.407.375c.516-.305.89-.774 1.078-1.36a5.197 5.197 0 0 1-1.546.61A2.461 2.461 0 0 0 9.047.083a2.46 2.46 0 0 0-2.461 2.461c0 .188.023.375.07.563A7.14 7.14 0 0 1 1.57.529c-.21.351-.328.773-.328 1.242 0 .844.422 1.594 1.102 2.039-.399-.024-.797-.117-1.125-.305v.024c0 1.195.843 2.18 1.968 2.414a2.748 2.748 0 0 1-.632.093c-.164 0-.305-.023-.47-.046A2.45 2.45 0 0 0 4.384 7.7a4.948 4.948 0 0 1-3.047 1.055c-.211 0-.399-.023-.586-.047A6.857 6.857 0 0 0 4.523 9.81c4.524 0 6.985-3.727 6.985-6.985v-.328Z" />
                                    </svg>
                                </a>
                                <a class="transition hover:text-gray-900 dark:hover:text-white" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M12.188 6.203c0-.375-.047-.656-.094-.96H6.563v1.991h3.28c-.116.868-.984 2.508-3.28 2.508-1.993 0-3.61-1.64-3.61-3.68 0-3.257 3.844-4.757 5.906-2.765l1.594-1.524A5.637 5.637 0 0 0 6.563.25 5.797 5.797 0 0 0 .75 6.063a5.782 5.782 0 0 0 5.813 5.812c3.351 0 5.625-2.344 5.625-5.672Z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" name="promote">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 dark:bg-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600">
                                </div>
                            </label>
                        </td>
                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-green-500"
                                    aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                4.7
                            </div>
                        </td>
                        <td class="px-4 py-2">20 Nov 2022</td>
                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <button id="dropdown-button-0" type="button" data-dropdown-toggle="dropdown-0"
                                class="inline-flex items-center p-1 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="dropdown-0"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdown-button-0">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    
                </tbody>
            </table>
        </div>
        <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
            aria-label="Table navigation">
            <div class="flex items-center space-x-3">
                <label for="rows" class="text-xs font-normal text-gray-500 dark:text-gray-400">Rows per
                    page</label><select id="rows"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block py-1.5 pl-3.5 pr-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">100</span>
                </div>
            </div>
            <ul class="inline-flex items-stretch -space-x-px">
                <li>
                    <a href="#"
                        class="flex text-sm w-20 items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex text-sm w-20 items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>



</x-admin-layout>
