@extends('layouts.app')

@section('title', 'Citas')

@section('content')
    <h1>Citas</h1>
    <a href="{{ route('citas.create') }}">Nueva Cita</a>

    <table>
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Profesional</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                    <td>{{ $cita->profesional->nombre }} {{ $cita->profesional->apellido }}</td>
                    <td>{{ $cita->fecha_cita }}</td>
                    <td>{{ $cita->hora_cita }}</td>
                    <td>{{ $cita->motivo_consulta }}</td>
                    <td>
                        <a href="{{ route('citas.show', $cita) }}">Ver</a>
                        <a href="{{ route('citas.edit', $cita) }}">Editar</a>
                        <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar cita?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
