@extends('layouts.app')

@section('css')

@endsection

@section('content')

<h1 class="text-2xl font-bold text-center">Index</h1>

<section class="flex items-center justify-center gap-5  flex-col ">
    <section>
        <a class="bg-green-400 p-2 rounded-md text-lg" href="">Agregar</a>
    </section>
    <div  class="">
        <table class=" bg-white border border-gray-200">
            <thead>
                <tr class="w-full bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6">Id</th>
                    <th class="py-3 px-6">Nombre Cientifico</th>
                    <th class="py-3 px-6">Nombre</th>
                    <th class="py-3 px-6">Descripcion</th>
                    <th class="py-3 px-6">foto</th>
                    <th class="py-3 px-6">tipo</th>
                    <th class="py-3 px-6">necesidad de Riego</th>
                    <th class="py-3 px-6">necesidad de Solar</th>
                    <th class="py-3 px-6">necesidad de Fertilizacion</th>
                    <th class="py-3 px-6">Actualizar</th>
                    <th class="py-3 px-6">Eliminar</th>

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
                        <a href="{{ route('plantas.edit',$item->id) }}" class="p-2 bg-green-500 rounded-md text-white" >Editar</a>
                    </td>
                    <td class="py-3 px-6">
                        <form action="{{ route('plantas.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="p-2 bg-red-500 rounded-md text-white" type="submit">
                            Eliminar
                        </button>
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
