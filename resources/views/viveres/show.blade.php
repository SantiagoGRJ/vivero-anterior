@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <div class="flex flex-col items-center">

            <h2 class="text-xl text-gray-700 mb-4 italic">{{ $vivere->nombre }}</h2>

        </div>
        <div class="mt-4">
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Cantidad:</span>
                <span class="text-gray-700">{{ $vivere->cantidad }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Tipo:</span>
                <span class="text-gray-700">{{ $vivere->udm }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Fecha de Compra:</span>
                <span class="text-gray-700">{{ $vivere->fecha_compra }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Fecha de Caducidad:</span>
                <span class="text-gray-700">{{ $vivere->fecha_caducidad }}</span>
            </div>

        </div>
        <div class="flex justify-between mt-6">
            <a href="{{ route('viveres.edit', $vivere->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Editar</a>
            <form action="{{ route('viveres.destroy', $vivere->id) }}" method="post">
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
