@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <section class="flex flex-col items-center p-6 bg-gray-100">
        <h1 class="text-2xl font-bold mb-4">Crear</h1>
        <form action="{{ route('plantas.store') }}" method="post"
            class="w-full max-w-md bg-white p-6 rounded-lg shadow-md grid grid-cols-2 gap-4">
            @csrf
            <div class="col-span-1">
                <label for="nombre_cientifico" class="block text-sm font-medium text-gray-700 mb-2">Nombre Científico</label>
                <input id="nombre_cientifico" name="nombre_cientifico" class="border border-gray-300 rounded-md p-2 w-full"
                    type="text" value="{{ old('nombre_cientifico') }}">
                    @error('nombre_cientifico')
                    <p class="mt-2 text-sm text-red-600" >{{ $message }}</p>
                    @enderror
            </div>
            <div class="col-span-1">
                <label for="nombre_comun" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
                <input id="nombre_comun" name="nombre_comun" class="border border-gray-300 rounded-md p-2 w-full"
                    type="text" value="{{ old('nombre_comun') }}">
                    @error('nombre_comun')
                    <p class="mt-2 text-sm text-red-600" >{{ $message }}</p>
                    @enderror
            </div>
            <div class="col-span-1">
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
                <input id="descripcion" name="descripcion" class="border border-gray-300 rounded-md p-2 w-full"
                    type="text" value="{{ old('descripcion') }}">
                    @error('descripcion')
                    <p class="mt-2 text-sm text-red-600" >{{ $message }}</p>
                    @enderror
            </div>
            <div class="col-span-1">
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Foto</label>
                <input id="foto" name="foto" class="border border-gray-300 rounded-md p-2 w-full"
                type="text" value="{{ old('foto') }}">
                @error('foto')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-1">
                <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
                <input id="tipo" name="tipo" class="border border-gray-300 rounded-md p-2 w-full"
                type="text" value="{{ old('tipo') }}" >
                @error('tipo')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-1">
                <label for="necesidad_riego" class="block text-sm font-medium text-gray-700 mb-2">Necesita Riego</label>
                <select
                    class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    name="necesidad_riego">
                    <option value="" disabled {{ old('necesidad_riego') === null ? 'selected' : '' }}>Seleccione el Campo</option>
                    <option value="1" {{ old('necesidad_riego') == 1 ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ old('necesidad_riego') == 0 ? 'selected' : '' }}>No</option>
                </select>
                @error('necesidad_solar')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-1">
                <label for="necesidad_solar" class="block text-sm font-medium text-gray-700 mb-2">Necesita Luz
                    Solar?</label>
                <select
                    class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    name="necesidad_solar">
                    <option value="" disabled {{ old('necesidad_solar') === null ? 'selected' : '' }}>Seleccione el Campo</option>
                    <option value="1" {{ old('necesidad_solar') == 1 ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ old('necesidad_solar') == 0 ? 'selected' : '' }}>No</option>
                </select>
                @error('necesidad_solar')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-1">
                <label for="necesidad_" class="block text-sm font-medium text-gray-700 mb-2">Necesita Luz
                    Fertilización?</label>
                <select
                    class="form-select block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    name="necesidad_fertilizacion">
                    <option value="" disabled {{ old('necesidad_fertilizacion') === null ? 'selected' : '' }}>Seleccione el Campo</option>
                    <option value="1" {{ old('necesidad_fertilizacion') == 1 ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ old('necesidad_fertilizacion') == 0 ? 'selected' : '' }}>No</option>
                </select>
                @error('necesidad_fertilizacion')
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
