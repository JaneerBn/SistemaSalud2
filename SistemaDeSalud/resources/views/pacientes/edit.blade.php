<!-- resources/views/pacientes/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Editar Paciente')

@section('content')
<h1>Editar Paciente</h1>

<form action="{{ route('pacientes.update', $paciente) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $paciente->nombre }}" required>
    </div>
    <div>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="{{ $paciente->apellido }}" required>
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}" required>
    </div>
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ $paciente->direccion }}" required>
    </div>
    <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $paciente->telefono }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $paciente->email }}" required>
    </div>
    <div>
        <label for="historial_medico">Historial Médico:</label>
        <textarea id="historial_medico" name="historial_medico" required>{{ $paciente->historial_medico }}</textarea>
    </div>
    <button type="submit">Actualizar</button>
</form>
@endsection
