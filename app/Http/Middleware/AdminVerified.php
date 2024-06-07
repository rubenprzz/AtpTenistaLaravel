<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminVerified
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

            if (Auth::check() && Auth::user()->role === 'admin' || Auth::user()->role === 'adminTorneo' || Auth::user()->role === 'adminTenista' ) {
                return $next($request);
            }

            return redirect('/')->with('error', 'No tienes acceso a esta sección');
        }
}
