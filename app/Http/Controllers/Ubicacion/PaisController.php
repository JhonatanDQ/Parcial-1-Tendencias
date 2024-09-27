<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    // Mostrar todos los países
    public function index()
    {
        $paises = Pais::all();
        return view('paises.index', compact('paises'));
    }

    // Mostrar el formulario para crear un nuevo país
    public function create()
    {
        return view('paises.create');
    }

    // Almacenar un nuevo país
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'register_user' => 'required|string|max:255',
        ]);

        Pais::create($request->all());

        return redirect()->route('paises.index')->with('success', 'País creado exitosamente.');
    }

    // Mostrar un país específico
    public function show(Pais $pais)
    {
        return view('paises.show', compact('pais'));
    }

    // Mostrar el formulario para editar un país
    public function edit(Pais $pais)
    {
        return view('paises.edit', compact('pais'));
    }

    // Actualizar un país específico
    public function update(Request $request, Pais $pais)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'register_user' => 'required|string|max:255',
        ]);

        $pais->update($request->all());

        return redirect()->route('paises.index')->with('success', 'País actualizado exitosamente.');
    }

    // Eliminar un país específico
    public function destroy(Pais $pais)
    {
        $pais->delete();
        return redirect()->route('paises.index')->with('success', 'País eliminado exitosamente.');
    }
}
