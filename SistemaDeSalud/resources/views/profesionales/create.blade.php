@extends('layouts.app')


@section('title', 'Crear Profesional')


@section('content')
    <h1>Nuevo Profesional</h1>
    <form action="{{ route('profesionales.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <input type="text" name="especialidad" placeholder="Especialidad"><br>
        <input type="text" name="horarios" placeholder="Horarios"><br>
        <input type="text" name="telefono" placeholder="Teléfono"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <button type="submit">Guardar</button>
    </form>
@endsection
