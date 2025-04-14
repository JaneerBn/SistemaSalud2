<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesionales = Profesional::all();
        return view('profesionales.index', compact('profesionales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesionales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profesional->delete();

        return redirect()->route('profesionales.index')->with('success', 'Profesional eliminado correctamente.');

    }
}
