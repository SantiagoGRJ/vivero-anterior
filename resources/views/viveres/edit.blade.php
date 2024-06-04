@extends('layouts.app')

@section('css')

@endsection

@section('content')

<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Edit</h1>
    <form action="{{ route('viveres.update',$vivere->id) }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="col-span-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre </label>
            <input id="nombre" name="nombre" value="{{ old('nombre', $vivere->nombre) }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
            @error('nombre')
                <p class="mt-2 text-sm text-red-600"> {{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="cantidad" class="block text-sm font-medium text-gray-700 mb-2">Cantidad</label>
            <input id="cantidad" name="cantidad" value="{{ old('cantidad',$vivere->cantidad) }}" min="1" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('cantidad')
            <p class="mt-2 text-sm text-red-600"> {{ $message }}</p>
        @enderror
        </div>
        <div class="col-span-1">
            <label for="udm" class="block text-sm font-medium text-gray-700 mb-2">Unidad de Medida</label>
            <input id="udm" name="udm" value="{{ old('udm',$vivere->udm) }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
            @error('udm')
            <p class="mt-2 text-sm text-red-600"> {{ $message }}</p>
        @enderror
        </div>
        <div class="col-span-1">
            <label for="fecha_compra" class="block text-sm font-medium text-gray-700 mb-2">Fecha de Compra</label>
            <input id="fecha_compra" name="fecha_compra" value="{{ old('fecha_compra',$vivere->fecha_compra) }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
            @error('fecha_compra')
            <p class="mt-2 text-sm text-red-600"> {{ $message }}</p>
        @enderror
    </div>
    <div class="col-span-2 m-auto">
        <label for="fecha_caducidad" class="block text-sm font-medium text-gray-700 mb-2">Fecha de Caducidad</label>
        <input id="fecha_caducidad" name="fecha_caducidad" value="{{ old('fecha_caducidad',$vivere->fecha_caducidad) }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
        @error('fecha_caducidad')
        <p class="mt-2 text-sm text-red-600"> {{ $message }}</p>
    @enderror
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
