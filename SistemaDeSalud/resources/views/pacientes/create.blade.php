<!-- resources/views/pacientes/create.blade.php -->

@extends('layouts.app')

@section('title', 'Nuevo Paciente')

@section('content')
<h1>Crear Nuevo Paciente</h1>

<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
    </div>
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
    </div>
    <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="historial_medico">Historial Médico:</label>
        <textarea id="historial_medico" name="historial_medico" required></textarea>
    </div>
    <button type="submit">Guardar</button>
</form>
@endsection
