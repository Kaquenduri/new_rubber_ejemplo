<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;


class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('paginas.servicios', compact('servicios'));
    }

    public function create()
    {
        return view('servicios.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre_servicio' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'tiempo_estimado' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        // Subir las imágenes y guardar rutas string
        $imagen1Path = $request->file('imagen')->store('servicios', 'public');

        Servicio::create([
            'nombre_servicio' => $request->nombre_servicio,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'tiempo_estimado' => $request->tiempo_estimado,
            'imagen' => $imagen1Path,
        ]);

        return redirect()->route('servicios.index')->with('success', 'Servicio registrado correctamente.');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    public function update(Servicio $servicio, Request $request)
    {
        $request->validate([
            'nombre_servicio' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'tiempo_estimado' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Si hay imagen nueva, procesamos
        if ($request->hasFile('imagen')) {
            if ($servicio->imagen && \Storage::disk('public')->exists($servicio->imagen)) {
                \Storage::disk('public')->delete($servicio->imagen);
            }
    
            $rutaImagen = $request->file('imagen')->store('servicios', 'public');
    
            $servicio->update([
                'nombre_servicio' => $request->nombre_servicio,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'tiempo_estimado' => $request->tiempo_estimado,
                'imagen' => $rutaImagen,
            ]);
        } else {
            // Sin imagen nueva
            $servicio->update([
                'nombre_servicio' => $request->nombre_servicio,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'tiempo_estimado' => $request->tiempo_estimado,
            ]);
        }
    
        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado correctamente.');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado correctamente.');
    }
}

    

