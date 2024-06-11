<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GestionDeAcceso
{

    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado
        if (!auth()->check()) {
            abort(403, 'Lo siento, no tiene permisos para acceder a esta página');
        }

        // Verifica si el usuario es ADMIN
        if (auth()->user()->roles !== 'ADMIN') {
            abort(403, 'Lo siento, no tiene permisos para acceder a esta página');
        }


        return $next($request);
    }
}
