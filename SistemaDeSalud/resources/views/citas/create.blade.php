@extends('layouts.app')

@section('title', 'Nueva Cita Médica')

@section('content')
    <h1>Nueva Cita Médica</h1>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <label for="paciente_id">Paciente:</label>
        <select name="paciente_id" required>
            <option value="">Seleccione un paciente</option>
            @foreach($pacientes as $paciente)
                <option value="{{ $paciente->id }}">{{ $paciente->nombre }} {{ $paciente->apellido }}</option>
            @endforeach
        </select><br><br>

        <label for="profesional_id">Profesional:</label>
        <select name="profesional_id" required>
            <option value="">Seleccione un profesional</option>
            @foreach($profesionales as $profesional)
                <option value="{{ $profesional->id }}">{{ $profesional->nombre }} {{ $profesional->apellido }}</option>
            @endforeach
        </select><br><br>

        <label for="fecha_cita">Fecha:</label>
        <input type="date" name="fecha_cita" required><br><br>

        <label for="hora_cita">Hora:</label>
        <input type="time" name="hora_cita" required><br><br>

        <label for="motivo_consulta">Motivo de Consulta:</label><br>
        <textarea name="motivo_consulta" rows="3" required></textarea><br><br>

        <label for="notas">Notas del Profesional:</label><br>
        <textarea name="notas" rows="3"></textarea><br><br>

        <button type="submit">Guardar Cita</button>
    </form>
@endsection
