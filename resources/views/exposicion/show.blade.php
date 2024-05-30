@extends('layouts.app')

@section('css')

@endsection

@section('content')


<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <div class="flex flex-col items-center">

            <h2 class="text-xl text-gray-700 mb-4 italic">{{ $exposicion->id_planta }}</h2>
        </div>
        <div class="mt-4">
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Horas Directas:</span>
                <span class="text-gray-700">{{ $exposicion->horas_directa }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Horas Indirectas:</span>
                <span class="text-gray-700">{{ $exposicion->horas_indirecta }}</span>
            </div>



        </div>
        <div class="flex justify-between mt-6">
            <a href="{{ route('exposicion.edit', $exposicion->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Editar</a>
            <form action="{{ route('exposicion.destroy', $exposicion->id) }}" method="post">
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
