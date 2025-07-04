<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('paginas.inicio');
    }

    public function quienes()
    {
        return view('paginas.quienes');
    }

    public function contacto()
    {
        return view('paginas.contacto');
    }

}
