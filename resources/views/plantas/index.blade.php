@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <h1 class="text-2xl font-bold text-center">Index</h1>

    <section class="flex items-center justify-center gap-5 flex-col p-6 bg-gray-100">
        <section>
            <a href="{{ route('plantas.create') }}" class="bg-green-400 p-2 rounded-md text-lg">Agregar</a>
        </section>
        <div class="w-full overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6">Id</th>
                        <th class="py-3 px-6">Nombre Cientifico</th>
                        <th class="py-3 px-6">Nombre</th>
                        <th class="py-3 px-6">Descripcion</th>
                        <th class="py-3 px-6">Foto</th>
                        <th class="py-3 px-6">Tipo</th>
                        <th class="py-3 px-6">Necesidad de Riego</th>
                        <th class="py-3 px-6">Necesidad de Solar</th>
                        <th class="py-3 px-6">Necesidad de Fertilizacion</th>

                        <th class="py-3 px-6">Exposicion</th>
                        <th class="py-3 px-6">Fertilización</th>
                        <th class="py-3 px-6">Riegos</th>
                        <!-- Comparacion de Roles -->
                        @switch(Auth::user()->rol)
                            @case('admin')
                                <th class="py-3 px-6">Mostrar</th>
                                <th class="py-3 px-6">Actualizar</th>
                                <th class="py-3 px-6">Eliminar</th>
                            @break

                            @case('user')
                            @break

                            @default
                        @endswitch
                        <!-- Comparacion de Roles -->


                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($plantas as $item)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $item->id }}</td>
                            <td class="py-3 px-6">{{ $item->nombre_cientifico }}</td>
                            <td class="py-3 px-6">{{ $item->nombre_comun }}</td>
                            <td class="py-3 px-6">{{ $item->descripcion }}</td>
                            <td class="py-3 px-6">{{ $item->foto }}</td>
                            <td class="py-3 px-6">{{ $item->tipo }}</td>
                            

                            <td class="py-3 px-6">{{ $item->necesidad_riego }}</td>
                            <td class="py-3 px-6">{{ $item->necesidad_solar }}</td>
                            <td class="py-3 px-6">{{ $item->necesidad_fertilizacion }}</td>

                            <td class="py-3 px-6">
                                <a  class=" bg-yellow-600 p-2 rounded-lg text-white hover:bg-yellow-400" href="{{ route('exposicion.create',$item->id) }}">Exposición</a>
                            </td>
                            <td class="py-3 px-6">
                                <a class=" bg-blue-600 p-2 rounded-lg text-white hover:bg-blue-400" href="{{ route('fertilizacion.create',$item->id) }}">Fertilización</a>
                            </td>
                            <td class="py-3 px-6">
                                <a class=" bg-orange-600 p-2 rounded-lg text-white hover:bg-orange-400" href="{{ route('riegos.create',$item->id) }}">Riego</a>
                            </td>

                            <!-- Comparacion de Roles -->
                            @switch(Auth::user()->rol)
                                @case('admin')
                                    <td class="py-3 px-6">
                                        <a href="{{ route('plantas.show', $item->id) }}"
                                            class="p-2 bg-blue-500 rounded-md text-white">Mostrar</a>
                                    </td>
                                    <td class="py-3 px-6">
                                        <a href="{{ route('plantas.edit', $item->id) }}"
                                            class="p-2 bg-green-500 rounded-md text-white">Editar</a>
                                    </td>
                                    <td class="py-3 px-6">
                                        <form action="{{ route('plantas.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="p-2 bg-red-500 rounded-md text-white" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                @break

                                @case('user')

                                @break

                                @default
                            @endswitch
                            <!-- Fin Comparacion de Roles -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('js')
@endsection
