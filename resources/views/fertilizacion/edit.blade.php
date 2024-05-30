@extends('layouts.app')

@section('css')

@endsection

@section('content')


<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('fertilizacion.update',$fertilizacion->id) }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="col-span-1">
            <label for="id_planta" class="block text-sm font-medium text-gray-700 mb-2">Id Planta </label>
            <input id="id_planta" name="id_planta" value="{{ $fertilizacion->id_planta }}" class="border border-gray-300 rounded-md p-2 w-full" type="number" disabled>
            <input id="" name="id_planta" value="{{ $fertilizacion->id_planta }}" class="border border-gray-300 rounded-md p-2 w-full" type="hidden">
        </div>
        <div class="col-span-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
            <input id="nombre" name="nombre" value="{{ $fertilizacion->nombre }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span- m-auto">
            <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2"> Tipo </label>
            <input id="tipo" name="tipo" value="{{ $fertilizacion->tipo }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1 m-auto">
            <label for="frecuencia" class="block text-sm font-medium text-gray-700 mb-2"> Frecuencia</label>
            <input id="frecuencia" name="frecuencia" value="{{ $fertilizacion->frecuencia }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1 m-auto">
            <label for="metodo" class="block text-sm font-medium text-gray-700 mb-2"> Método</label>
            <input id="metodo" name="metodo" value="{{ $fertilizacion->metodo }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1 m-auto">
            <label for="cantidad" class="block text-sm font-medium text-gray-700 mb-2">Cantidad</label>
            <input id="cantidad" name="cantidad" value="{{ $fertilizacion->cantidad }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
        </div>
        <div class="col-span-1 m-auto">
            <label for="fecha_ultima_aplicacion" class="block text-sm font-medium text-gray-700 mb-2">Ultima Aplicación</label>
            <input id="fecha_ultima_aplicacion" name="fecha_ultima_aplicacion" value="{{ $fertilizacion->fecha_ultima_aplicacion }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
        </div>
        <div class="col-span-1 m-auto">
            <label for="proxima_aplicacion" class="block text-sm font-medium text-gray-700 mb-2">Próxima Aplicación </label>
            <input id="proxima_aplicacion" name="proxima_aplicacion" value="{{ $fertilizacion->proxima_aplicacion }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
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
