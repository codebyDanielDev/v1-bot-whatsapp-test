<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard', 'route' => route('admin.dashboard')],
    ['name' => 'Portadas'],

]">


<x-slot name="action">
    <a href="{{ route('admin.covers.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-blue-500 border border-transparent rounded-md hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25">
        <i class="mr-2 fas fa-images"></i>
        Crear Portada
    </a>
</x-slot>
    


</x-admin-layout>