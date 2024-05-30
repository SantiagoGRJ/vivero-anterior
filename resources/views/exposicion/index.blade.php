@extends('layouts.app')

@section('css')

@endsection

@section('content')

<h1 class="text-2xl font-bold text-center">Index</h1>

<section class="flex items-center justify-center gap-5 flex-col p-6 bg-gray-100">
    <section>
        <a href="{{ route('exposicion.create') }}" class="bg-green-400 p-2 rounded-md text-lg">Agregar</a>
    </section>
    <div class="w-full overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6">Id</th>
                    <th class="py-3 px-6">Id Planta</th>
                    <th class="py-3 px-6">Horas Directa</th>
                    <th class="py-3 px-6">Horas Indirecta</th>



                    <th class="py-3 px-6">Mostrar</th>
                    <th class="py-3 px-6">Actualizar</th>
                    <th class="py-3 px-6">Eliminar</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($exposicion as $item)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $item->id }}</td>
                    <td class="py-3 px-6">{{ $item->id_planta }}</td>
                    <td class="py-3 px-6">{{ $item->horas_directa }}</td>
                    <td class="py-3 px-6">{{ $item->horas_indirecta }}</td>



                    <td class="py-3 px-6">
                        <a href="{{ route('exposicion.show', $item->id) }}" class="p-2 bg-blue-500 rounded-md text-white">Mostrar</a>
                    </td>
                    <td class="py-3 px-6">
                        <a href="{{ route('exposicion.edit', $item->id) }}" class="p-2 bg-green-500 rounded-md text-white">Editar</a>
                    </td>
                    <td class="py-3 px-6">
                        <form action="{{ route('exposicion.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="p-2 bg-red-500 rounded-md text-white" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>



@endsection

@section('js')

@endsection
