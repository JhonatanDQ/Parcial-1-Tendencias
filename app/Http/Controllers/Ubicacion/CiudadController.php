<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    // Mostrar todas las ciudades
    public function index()
    {
        $ciudades = Ciudad::all();
        return view('ciudades.index', compact('ciudades'));
    }

    // Mostrar el formulario para crear una nueva ciudad
    public function create()
    {
        return view('ciudades.create');
    }

    // Almacenar una nueva ciudad
    public function store(Request $request)
    {
        $request->validate([
            'departamento_id' => 'required|exists:departamentos,id',
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'register_user' => 'required|string|max:255',
        ]);

        Ciudad::create($request->all());

        return redirect()->route('ciudades.index')->with('success', 'Ciudad creada exitosamente.');
    }

    // Mostrar una ciudad específica
    public function show(Ciudad $ciudad)
    {
        return view('ciudades.show', compact('ciudad'));
    }

    // Mostrar el formulario para editar una ciudad
    public function edit(Ciudad $ciudad)
    {
        return view('ciudades.edit', compact('ciudad'));
    }

    // Actualizar una ciudad específica
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'departamento_id' => 'required|exists:departamentos,id',
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'register_user' => 'required|string|max:255',
        ]);

        $ciudad->update($request->all());

        return redirect()->route('ciudades.index')->with('success', 'Ciudad actualizada exitosamente.');
    }

    // Eliminar una ciudad específica
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('ciudades.index')->with('success', 'Ciudad eliminada exitosamente.');
    }
}

