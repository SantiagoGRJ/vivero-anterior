@extends('layouts.app')

@section('css')

@endsection

@section('content')

<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('exposicion.store') }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        <div class="col-span-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Id Planta </label>
            <input id="id_planta" name="id_planta" value="{{ old('id_planta') }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('id_planta')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="cantidad" class="block text-sm font-medium text-gray-700 mb-2">Horas Directas</label>
            <input id="horas_directa" name="horas_directa" value="{{ old('horas_directa') }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('horas_directa')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-2 m-auto">
            <label for="udm" class="block text-sm font-medium text-gray-700 mb-2">Horas Indirecta</label>
            <input id="horas_indirecta" name="horas_indirecta" value="{{ old('horas_directa') }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('horas_indirecta')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
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
