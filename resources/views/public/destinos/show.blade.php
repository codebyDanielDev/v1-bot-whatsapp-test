<x-guest-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg leading-6 font-medium text-gray-900">{{ $destino->title }}</h2>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $destino->address }}</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 grid grid-cols-1 sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Descripción</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $destino->description }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 grid grid-cols-1 sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Imagen</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <img src="{{ $destino->image }}" alt="Imagen de {{ $destino->title }}" class="w-full h-64 object-cover">
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 grid grid-cols-1 sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Ubicación</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $destino->latitude }}, {{ $destino->longitude }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 grid grid-cols-1 sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Clima</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $destino->weather }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 grid grid-cols-1 sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Accesibilidad</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $destino->accesibility }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-guest-layout>
