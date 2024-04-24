<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard', 'route' => route('admin.dashboard')],
    ['name' => 'Portadas', 'route' => route('admin.covers.index')],
    ['name' => 'Crear Portada'],


]">


<form action="{{route('admin.covers.create')}}" method="POST">
    @csrf
    {{-- acá va el formulario --}}





</form>
</x-admin-layout>