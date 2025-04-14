@extends('layouts.app')

@section('title', 'Lista de Profesionales')

@section('content')
    <h1>Profesionales</h1>
    <a href="{{ route('profesionales.create') }}">Nuevo Profesional</a>
    <table>
        <tr>
            <th>Nombre</th><th>Especialidad</th><th>Acciones</th>
        </tr>
        @foreach($profesionales as $profesional)
            <tr>
                <td>{{ $profesional->nombre }} {{ $profesional->apellido }}</td>
                <td>{{ $profesional->especialidad }}</td>
                <td>
                    <a href="{{ route('profesionales.show', $profesional) }}">Ver</a>
                    <a href="{{ route('profesionales.edit', $profesional) }}">Editar</a>
                    <form method="POST" action="{{ route('profesionales.destroy', $profesional) }}" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection