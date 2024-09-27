<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Testimonio;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Ciudad;



class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $testimonios = Testimonio::all();
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $ciudades = Ciudad::all();
        //dd($testimonios);
        $half = ceil($services->count() / 2);
        $firstHalf = $services->slice(0, $half);
        $secondHalf = $services->slice($half);
        // dd($secondHalf);
        // dd($firstHalf);
        return view('service.service', [
            'services' => $services,
            'firstHalf' => $firstHalf,
            'secondHalf' => $secondHalf,
            'testimonios' => $testimonios,
            'paises' => $paises,
            'departamentos' => $departamentos,
            'ciudades' => $ciudades
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required|string',
            'state' => 'required|string|max:255',
        ]);


        $user = Auth::user();
        // Crear un nuevo servicio
        Service::create([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'state' => $request->input('state'),
            'register_user' => $user->id,
        ]);

        return redirect()->route('service')->with('success', 'Service added successfully!');
    }
}
