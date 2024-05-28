@extends('layouts.app')

@section('css')

@endsection

@section('content')

<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('viveres.update',$vivere->id) }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="col-span-1">
            <label for="nombre_cientifico" class="block text-sm font-medium text-gray-700 mb-2">Nombre Científico</label>
            <input id="nombre1" name="nombre" value="{{ $vivere->nombre }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="nombre_comun" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
            <input id="nombre2" name="cantidad" value="{{ $vivere->cantidad }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="nombre3" class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
            <input id="nombre3" name="udm" value="{{ $vivere->udm }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
        </div>
        <div class="col-span-1">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Foto</label>
            <input id="nombre4" name="fecha_compra" value="{{ $vivere->fecha_compra }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
        </div>
        <div class="col-span-1">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
            <input id="nombre5" name="fecha_caducidad" value="{{ $vivere->fecha_caducidad }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
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
