<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validarUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {        
        $usuario = $request->session()->get('user'); //Auth::user();
        if ($usuario!=null && $usuario->tipo=="cliente")
            return $next($request);
        else
            abort(403, 'Acceso denegado');
    }
}
