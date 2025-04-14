@extends('layouts.app')

@section('title', 'Editar Profesional')

@section('content')
    <h1>Editar Profesional</h1>
    <form action="{{ route('profesionales.update', $profesional) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="nombre" value="{{ $profesional->nombre }}"><br>
        <input type="text" name="apellido" value="{{ $profesional->apellido }}"><br>
        <input type="text" name="especialidad" value="{{ $profesional->especialidad }}"><br>
        <input type="text" name="horarios" value="{{ $profesional->horarios }}"><br>
        <input type="text" name="telefono" value="{{ $profesional->telefono }}"><br>
        <input type="email" name="email" value="{{ $profesional->email }}"><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection