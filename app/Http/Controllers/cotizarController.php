<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class cotizarController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('cotizaciones.index', compact('servicios'));
    }
}
