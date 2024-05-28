@extends('layouts.app')

@section('css')

@endsection

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <div class="flex flex-col items-center">
            <img src="{{ $planta->foto }}" alt="Foto de {{ $planta->nombre_comun }}" class="w-32 h-32 object-cover rounded-full mb-4">
            <h1 class="text-2xl font-bold mb-2">{{ $planta->nombre_comun }}</h1>
            <h2 class="text-xl text-gray-700 mb-4 italic">{{ $planta->nombre_cientifico }}</h2>
            <p class="text-gray-600 text-center mb-4">{{ $planta->descripcion }}</p>
        </div>
        <div class="mt-4">
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Tipo:</span>
                <span class="text-gray-700">{{ $planta->tipo }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Necesidad de Riego:</span>
                <span class="text-gray-700">{{ $planta->necesidad_riego }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Necesidad Solar:</span>
                <span class="text-gray-700">{{ $planta->necesidad_solar }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Necesidad de Fertilización:</span>
                <span class="text-gray-700">{{ $planta->necesidad_fertilizacion }}</span>
            </div>
        </div>
        <div class="flex justify-between mt-6">
            <a href="{{ route('plantas.edit', $planta->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Editar</a>
            <form action="{{ route('plantas.destroy', $planta->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Eliminar</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
