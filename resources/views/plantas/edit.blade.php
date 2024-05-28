@extends('layouts.app')

@section('css')

@endsection

@section('content')
<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('plantas.update',$planta->id) }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="col-span-1">
            <label for="nombre_cientifico" class="block text-sm font-medium text-gray-700 mb-2">Nombre Científico</label>
            <input id="nombre1" name="nombre_cientifico" value="{{ $planta->nombre_cientifico }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="nombre_comun" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
            <input id="nombre2" name="nombre_comun" value="{{ $planta->nombre_comun }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="nombre3" class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
            <input id="nombre3" name="descripcion" value="{{ $planta->descripcion }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Foto</label>
            <input id="nombre4" name="foto" value="{{ $planta->foto }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
            <input id="nombre5" name="tipo" value="{{ $planta->tipo }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="necesidad_riego" class="block text-sm font-medium text-gray-700 mb-2">Necesita riego?</label>
            <input id="nombre6" name="necesidad_riego" value="{{ $planta->necesidad_riego }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="nombre7" class="block text-sm font-medium text-gray-700 mb-2">Necesita Luz Solar?</label>
            <input id="nombre7" name="necesidad_solar" value="{{ $planta->necesidad_solar }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="nombre8" class="block text-sm font-medium text-gray-700 mb-2">Necesita Fertilizacion?</label>
            <input id="nombre8" name="necesidad_fertilizacion" value="{{ $planta->necesidad_fertilizacion }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
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
