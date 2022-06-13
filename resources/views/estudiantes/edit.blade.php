<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{__('Editar Estudiantes')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hiddem shadow-xl sm:rounde-lg">
        <form action="{{route('estudiantes.update', $estudiante)}}" method="post">
            @method('PUT')
            @include('estudiantes.formulario')
        </form>
            </div>
        </div>
    </div>
</x-app-layout>