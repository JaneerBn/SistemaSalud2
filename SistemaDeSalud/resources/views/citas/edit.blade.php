@extends('layouts.app')

@section('title', 'Editar Cita Médica')

@section('content')
    <h1>Editar Cita Médica</h1>

    <form action="{{ route('citas.update', $cita) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="paciente_id">Paciente:</label>
        <select name="paciente_id" required>
            @foreach($pacientes as $paciente)
                <option value="{{ $paciente->id }}" {{ $paciente->id == $cita->paciente_id ? 'selected' : '' }}>
                    {{ $paciente->nombre }} {{ $paciente->apellido }}
                </option>
            @endforeach
        </select><br><br>

        <label for="profesional_id">Profesional:</label>
        <select name="profesional_id" required>
            @foreach($profesionales as $profesional)
                <option value="{{ $profesional->id }}" {{ $profesional->id == $cita->profesional_id ? 'selected' : '' }}>
                    {{ $profesional->nombre }} {{ $profesional->apellido }}
                </option>
            @endforeach
        </select><br><br>

        <label for="fecha_cita">Fecha:</label>
        <input type="date" name="fecha_cita" value="{{ $cita->fecha_cita }}" required><br><br>

        <label for="hora_cita">Hora:</label>
        <input type="time" name="hora_cita" value="{{ $cita->hora_cita }}" required><br><br>

        <label for="motivo_consulta">Motivo de Consulta:</label><br>
        <textarea name="motivo_consulta" rows="3" required>{{ $cita->motivo_consulta }}</textarea><br><br>

        <label for="notas">Notas del Profesional:</label><br>
        <textarea name="notas" rows="3">{{ $cita->notas }}</textarea><br><br>

        <button type="submit">Actualizar Cita</button>
    </form>
@endsection
