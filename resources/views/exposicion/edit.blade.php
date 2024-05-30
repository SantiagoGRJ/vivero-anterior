@extends('layouts.app')

@section('css')

@endsection

@section('content')

<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('exposicion.update',$exposicion->id) }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')
        <div class="col-span-1">
            <label for="nombre_cientifico" class="block text-sm font-medium text-gray-700 mb-2">Id Planta</label>
            <input id="nombre1" name="" value="{{ $exposicion->id_planta }}" class="border border-gray-300 rounded-md p-2 w-full" type="text" disabled>
            <input id="nombre1" name="id_planta" value="{{ $exposicion->id_planta }}" class="border border-gray-300 rounded-md p-2 w-full" type="hidden" >
        </div>
        <div class="col-span-1">
            <label for="nombre_comun" class="block text-sm font-medium text-gray-700 mb-2">Horas directa</label>
            <input id="nombre2" name="horas_directa" value="{{ $exposicion->horas_directa }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
        </div>
        <div class="col-span-2 m-auto">
            <label for="nombre3" class="block text-sm font-medium text-gray-700 mb-2">Horas Indirecta</label>
            <input id="nombre3" name="horas_indirecta" value="{{ $exposicion->horas_indirecta }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
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
