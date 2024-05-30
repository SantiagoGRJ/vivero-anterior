@extends('layouts.app')

@section('css')

@endsection

@section('content')



<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <div class="flex flex-col items-center">

            <h2 class="text-xl text-gray-700 mb-4 italic">{{ $fertilizacion->nombre }}</h2>
        </div>
        <div class="mt-4">
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Tipo:</span>
                <span class="text-gray-700">{{ $fertilizacion->tipo }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Frecuencia</span>
                <span class="text-gray-700">{{ $fertilizacion->frecuencia }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Método</span>
                <span class="text-gray-700">{{ $fertilizacion->metodo }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Cantidad</span>
                <span class="text-gray-700">{{ $fertilizacion->cantidad }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Ultima aplicacion</span>
                <span class="text-gray-700">{{ $fertilizacion->fecha_ultima_aplicacion }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Próxima Aplicación</span>
                <span class="text-gray-700">{{ $fertilizacion->proxima_aplicacion }}</span>
            </div>



        </div>
        <div class="flex justify-between mt-6">
            <a href="{{ route('fertilizacion.edit', $fertilizacion->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Editar</a>
            <form action="{{ route('fertilizacion.destroy', $fertilizacion->id) }}" method="post">
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
