@extends('layouts.app')

@section('css')

@endsection

@section('content')

<div class="container mx-auto pb-6">
    <!-- Información de la Planta -->
    <div class="flex items-center justify-center gap-5 min-h-screen bg-gray-100">
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
                    <span class="font-semibold text-gray-700">Necesidad de Fertil`ización:</span>
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

    <!-- Sección de Riegos y Exposiciones -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Tabla de Riegos -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Riegos</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Método</th>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Frecuencia</th>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($planta->riegos as $item)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-300">{{ $item->metodo }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $item->frecuencia }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $item->cantidad }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabla de Exposiciones -->
        <div class="bg-white p-6 rounded-lg shadow-lg ">
            <h2 class="text-2xl font-bold mb-4">Exposiciones</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Horas Directa</th>
                            <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Horas Indirecta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($planta->exposiciones as $item)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-300">{{ $item->horas_directa }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $item->horas_indirecta }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tabla de Fertilizaciones -->
    <div class="bg-white p-6 rounded-lg shadow-lg mt-6">
        <h2 class="text-2xl font-bold mb-4">Fertilizaciones</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Nombre</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Tipo</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Frecuencia</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Método</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Cantidad</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Última Aplicación</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Próxima Aplicación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($planta->fertilizaciones as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->nombre }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->tipo }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->frecuencia }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->metodo }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->cantidad }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->fecha_ultima_aplicacion }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $item->proxima_aplicacion }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('js')

@endsection
