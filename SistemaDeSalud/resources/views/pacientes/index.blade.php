<!-- resources/views/pacientes/index.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Pacientes')

@section('content')
<h1>Pacientes</h1>
<a href="{{ route('pacientes.create') }}">Nuevo Paciente</a>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </tr>
    @foreach ($pacientes as $paciente)
    <tr>
        <td>{{ $paciente->nombre }}</td>
        <td>{{ $paciente->apellido }}</td>
        <td>
            <a href="{{ route('pacientes.show', $paciente) }}">Ver</a>
            <a href="{{ route('pacientes.edit', $paciente) }}">Editar</a>
            <form method="POST" action="{{ route('pacientes.destroy', $paciente) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
