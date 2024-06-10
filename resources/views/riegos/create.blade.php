@extends('layouts.app')

@section('css')

@endsection

@section('content')
<section class="flex flex-col items-center p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Crear</h1>
    <form action="{{ route('riegos.store') }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
        @csrf
        <div class="col-span-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Id Planta </label>
            <input id="nombre1" name="id_plantas" min="0" value="{{ old('id_plantas',$id) }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('id_plantas')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
        </div>
        <div class="col-span-1">
            <label for="metodo" class="block text-sm font-medium text-gray-700 mb-2">Método</label>
            <select
                class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="metodo">
                <option value="goteo" {{ old('metodo') == 'goteo' ? 'selected' : '' }}>Goteo
                </option>
                <option value="aspersion" {{ old('metodo' ) == 'aspersion' ? 'selected' : '' }}>Aspersión
                </option>
            </select>
            @error('metodo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="frecuencia" class="block text-sm font-medium text-gray-700 mb-2">Frecuencia</label>
            <select
                class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="frecuencia">
                <option value="diaria" {{ old('frecuencia' ) == 'goteo' ? 'selected' : '' }}>Diaria
                </option>
                <option value="semanal" {{ old('frecuencia' ) == 'semanal' ? 'selected' : '' }}>Semanal
                </option>
            </select>
            @error('frecuencia')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-1">
            <label for="fecha_compra" class="block text-sm font-medium text-gray-700 mb-2">Cantidad</label>
            <input id="nombre4" name="cantidad" min="0" value="{{ old('cantidad') }}" class="border border-gray-300 rounded-md p-2 w-full" type="number">
            @error('cantidad')
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
