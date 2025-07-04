<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('paginas.proyectos', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empresa_contratante' => 'required|string|max:255',
            'servicios_empleados' => 'required|string',
            'imagen_1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imagen_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'imagen_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Subir las imágenes y guardar rutas string
        $imagen1Path = $request->file('imagen_1')->store('proyectos', 'public');
        // 1 imagen obligatorio | 2 restantes son opcionales 
        $imagen2Path = $request->hasFile('imagen_2') ? $request->file('imagen_2')->store('proyectos', 'public') : null;
        $imagen3Path = $request->hasFile('imagen_3') ? $request->file('imagen_3')->store('proyectos', 'public') : null;
    
        // Crear el proyecto
        Proyecto::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'empresa_contratante' => $request->empresa_contratante,
            'servicios_empleados' => $request->servicios_empleados,
            'imagen_1' => $imagen1Path,
            'imagen_2' => $imagen2Path,
            'imagen_3' => $imagen3Path,
        ]);
    
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    public function edit(Proyecto $proyecto)
    {
      return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Proyecto $proyecto, Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empresa_contratante' => 'required|string|max:255',
            'servicios_empleados' => 'required|string',
            'imagen_1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'imagen_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'imagen_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Procesar las imágenes si se subieron
        if ($request->hasFile('imagen_1')) {
            if ($proyecto->imagen_1 && \Storage::disk('public')->exists($proyecto->imagen_1)) {
                \Storage::disk('public')->delete($proyecto->imagen_1);
            }
            $ruta1 = $request->file('imagen_1')->store('proyectos', 'public');
        } else {
            $ruta1 = $proyecto->imagen_1;
        }
    
        if ($request->hasFile('imagen_2')) {
            if ($proyecto->imagen_2 && \Storage::disk('public')->exists($proyecto->imagen_2)) {
                \Storage::disk('public')->delete($proyecto->imagen_2);
            }
            $ruta2 = $request->file('imagen_2')->store('proyectos', 'public');
        } else {
            $ruta2 = $proyecto->imagen_2;
        }
    
        if ($request->hasFile('imagen_3')) {
            if ($proyecto->imagen_3 && \Storage::disk('public')->exists($proyecto->imagen_3)) {
                \Storage::disk('public')->delete($proyecto->imagen_3);
            }
            $ruta3 = $request->file('imagen_3')->store('proyectos', 'public');
        } else {
            $ruta3 = $proyecto->imagen_3;
        }
    
        // Actualizar el proyecto con los nuevos datos
        $proyecto->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'empresa_contratante' => $request->empresa_contratante,
            'servicios_empleados' => $request->servicios_empleados,
            'imagen_1' => $ruta1,
            'imagen_2' => $ruta2,
            'imagen_3' => $ruta3,
        ]);
    
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }

}
