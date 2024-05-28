@extends('layouts.app')

@section('css')

@endsection

@section('content')

<section class="flex">
    <h1>Crear</h1>
    <form action="{{ route('plantas.store') }}" method="post">
    <label for="">Nombre</label>
    <input type="text">
    </form>
</section>

@endsection

@section('js')

@endsection
