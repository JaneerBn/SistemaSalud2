@extends('layouts.app')


@section('title', 'Detalle del Profesional')


@section('content')
    <h1>{{ $profesional->nombre }} {{ $profesional->apellido }}</h1>
    <p><strong>Especialidad:</strong> {{ $profesional->especialidad }}</p>
    <p><strong>Horarios:</strong> {{ $profesional->horarios }}</p>
    <p><strong>Teléfono:</strong> {{ $profesional->telefono }}</p>
    <p><strong>Email:</strong> {{ $profesional->email }}</p>
    <a href="{{ route('profesionales.index') }}">Volver</a>
@endsection


