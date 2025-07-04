<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoCMaillable;
use App\Models\Servicio;


class ContactoController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('contactos.index', compact('servicios'));

    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'empresa' => 'nullable|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'nullable|string|max:20',
            'servicio' => 'nullable|string|max:100',
            'mensaje' => 'required|string',
        ]);

        Mail::to('sandbox@mailtrap.io')->send(new ContactoCMaillable($data));
        
        return redirect()->route('contacto.index')->with('success', 'Formulario enviado correctamente.');;
    }
}
