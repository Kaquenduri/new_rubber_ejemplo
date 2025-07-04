<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarUsuarioRol
{
    public function handle(Request $request, Closure $next, string $tipo)
    {
        if (auth()->check() && auth()->user()->rol === $tipo) {
            return $next($request);
        }

        return response()->view('errores.403_personalizado', [], 403);
    }
}