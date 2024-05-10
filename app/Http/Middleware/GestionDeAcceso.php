<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GestionDeAcceso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ! Si no se está logeado no se puede acceder a ninguna página
        if (!auth()->check()) {
            abort(403, 'Lo siento, no tiene permisos para acceder a esta página');
        }
        if (!auth()->user()->roles != 'ADMIN') {
            abort(403, 'Lo siento, no tiene permisos para acceder a esta página');
        }

        return $next($request);
    }
}
