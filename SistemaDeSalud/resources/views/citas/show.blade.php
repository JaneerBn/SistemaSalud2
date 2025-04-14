@extends('layouts.app')

@section('title', 'Detalles de la Cita Médica')

@section('content')
    <h1>Detalles de la Cita</h1>

    <p><strong>Paciente:</strong> {{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
    <p><strong>Profesional:</strong> {{ $cita->profesional->nombre }} {{ $cita->profesional->apellido }}</p>
    <p><strong>Fecha:</strong> {{ $cita->fecha_cita }}</p>
    <p><strong>Hora:</strong> {{ $cita->hora_cita }}</p>
    <p><strong>Motivo de la Consulta:</strong> {{ $cita->motivo_consulta }}</p>
    <p><strong>Notas del Profesional:</strong> {{ $cita->notas }}</p>

    <a href="{{ route('citas.edit', $cita) }}">Editar</a> |
    <a href="{{ route('citas.index') }}">Volver al listado</a>
@endsection
