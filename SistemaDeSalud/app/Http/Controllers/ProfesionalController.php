<?php

namespace App\Http\Controllers;

use App\Models\Profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    public function index()
    {
        $profesionales = Profesional::all();
        return view('profesionales.index', compact('profesionales'));
    }

    public function create()
    {
        return view('profesionales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'especialidad' => 'required',
            'horarios' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:profesionales,email',
        ]);

        Profesional::create($request->all());

        return redirect()->route('profesionales.index')->with('success', 'Profesional creado correctamente.');
    }

    public function show(Profesional $profesional)
    {
        return view('profesionales.show', compact('profesional'));
    }

    public function edit(Profesional $profesional)
    {
        return view('profesionales.edit', compact('profesional'));
    }

    public function update(Request $request, Profesional $profesional)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'especialidad' => 'required',
            'horarios' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:profesionales,email,' . $profesional->id,
        ]);

        $profesional->update($request->all());

        return redirect()->route('profesionales.index')->with('success', 'Profesional actualizado correctamente.');
    }

    public function destroy(Profesional $profesional)
    {
        $profesional->delete();

        return redirect()->route('profesionales.index')->with('success', 'Profesional eliminado correctamente.');
    }
}