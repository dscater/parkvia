<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Permiso
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $permiso): Response
    {
        $auth = Auth::user();
        if ($auth->hasPermiso($permiso) || $auth->tipo == 'CONTROL') {
            return $next($request);
        }
        abort(401);
        // return $next($request);
    }
}
