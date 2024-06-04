@extends('layouts.app')

@section('css')

@endsection

@section('content')


<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('fertilizacion.store') }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        <div class="col-span-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Id Planta </label>
            <input id="id_planta" name="id_planta" value="{{ old('id_planta',5) }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('id_planta')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="cantidad" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
            <input id="nombre2" name="nombre" value="{{ old('nombre') }}" class="border border-gray-300 rounded-md p-2 w-full" type="text">
            @error('nombre')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
            <select
                class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="tipo">
                <option value="organico" {{ old('tipo', ) == 'organico' ? 'selected' : '' }}>Orgánico
                </option>
                <option value="quimico" {{ old('tipo', ) == 'quimico' ? 'selected' : '' }}>Químico
                </option>
            </select>
            @error('tipo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="frecuencia" class="block text-sm font-medium text-gray-700 mb-2">Frecuencia</label>
            <select
                class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="frecuencia">
                <option value="mensual" {{ old('frecuencia', ) == 'mensual' ? 'selected' : '' }}>Mensual
                </option>
                <option value="bimestral" {{ old('frecuencia', ) == 'bimestral' ? 'selected' : '' }}>Bimestral
                </option>
            </select>
            @error('frecuencia')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="frecuencia" class="block text-sm font-medium text-gray-700 mb-2">Método</label>
            <select
                class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="metodo">
                <option value="diluido en agua" {{ old('metodo', ) == 'diluido en agua' ? 'selected' : '' }}>Diluido en agua
                </option>
                <option value="directamente en el suelo" {{ old('metodo', ) == 'directamente en el suelo' ? 'selected' : '' }}>Directamente en el suelo
                </option>
            </select>
            @error('metodo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">Cantidad</label>
            <input id="" name="cantidad" value="{{ old('cantidad') }}" min="0" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('cantidad')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">Ultima Aplicación</label>
            <input id="" name="fecha_ultima_aplicacion" value="{{ old('fecha_ultima_aplicacion') }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
            @error('fecha_ultima_aplicacion')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1 m-auto">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">Próxima Aplicación </label>
            <input id="" name="proxima_aplicacion" value="{{ old('proxima_aplicacion') }}" class="border border-gray-300 rounded-md p-2 w-full" type="date">
            @error('proxima_aplicacion')
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
