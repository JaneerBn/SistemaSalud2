<!-- resources/views/pacientes/show.blade.php -->

@extends('layouts.app')

@section('title', 'Detalles del Paciente')

@section('content')
<h1>Detalles del Paciente</h1>

<ul>
    <li><strong>Nombre:</strong> {{ $paciente->nombre }}</li>
    <li><strong>Apellido:</strong> {{ $paciente->apellido }}</li>
    <li><strong>Fecha de Nacimiento:</strong> {{ $paciente->fecha_nacimiento }}</li>
    <li><strong>Dirección:</strong> {{ $paciente->direccion }}</li>
   
