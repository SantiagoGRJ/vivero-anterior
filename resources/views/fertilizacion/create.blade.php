@extends('layouts.app')

@section('css')

@endsection

@section('content')


<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('fertilizacion.store') }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        <div class="col-span-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Id Planta </label>
            <input id="nombre1" name="id_planta" value="5" class="border border-gray-300 rounded-md p-2 w-full" type="number">
        </div>
        <div class="col-span-1">
            <label for="cantidad" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
            <input id="nombre2" name="nombre" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span- m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2"> Tipo </label>
            <input id="" name="tipo" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2"> Frecuencia</label>
            <input id="" name="frecuencia" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2"> Método</label>
            <input id="" name="metodo" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">Cantidad</label>
            <input id="" name="cantidad" class="border border-gray-300 rounded-md p-2 w-full" type="number">
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">Ultima Aplicación</label>
            <input id="" name="fecha_ultima_aplicacion" class="border border-gray-300 rounded-md p-2 w-full" type="date">
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">Próxima Aplicación </label>
            <input id="" name="proxima_aplicacion" class="border border-gray-300 rounded-md p-2 w-full" type="date">
        </div>




        <div class="col-span-2 m-auto">
            <button class="p-2 bg-green-400 rounded-md" type="submit">
                Agregar
            </button>
        </div>
    </form>
</section>


@endsection

@section('js')

@endsection
