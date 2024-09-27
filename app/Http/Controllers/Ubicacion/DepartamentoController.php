<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    // Mostrar todos los departamentos
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    // Mostrar el formulario para crear un nuevo departamento
    public function create()
    {
        return view('departamentos.create');
    }

    // Almacenar un nuevo departamento
    public function store(Request $request)
    {
        $request->validate([
            'pais_id' => 'required|exists:pais,id',
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'register_user' => 'required|string|max:255',
        ]);

        Departamento::create($request->all());

        return redirect()->route('departamentos.index')->with('success', 'Departamento creado exitosamente.');
    }

    // Mostrar un departamento específico
    public function show(Departamento $departamento)
    {
        return view('departamentos.show', compact('departamento'));
    }

    // Mostrar el formulario para editar un departamento
    public function edit(Departamento $departamento)
    {
        return view('departamentos.edit', compact('departamento'));
    }

    // Actualizar un departamento específico
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'pais_id' => 'required|exists:pais,id',
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'register_user' => 'required|string|max:255',
        ]);

        $departamento->update($request->all());

        return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado exitosamente.');
    }

    // Eliminar un departamento específico
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado exitosamente.');
    }
}
