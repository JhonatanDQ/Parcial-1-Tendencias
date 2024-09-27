<?php

namespace App\Http\Controllers\Testimonios;

use App\Models\Testimonio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonioController extends Controller
{
    // Mostrar todos los testimonios
    public function index()
    {
        $testimonios = Testimonio::all();
        return view('service.service', [
            'testimonios' => $testimonios,
        ]);
    }

}
