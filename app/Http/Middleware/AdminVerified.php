<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
        if (auth()->user()->hasRole('admin','adminTorneo','adminTenista')) {
            return $next($request);
        }

        return redirect()->route('verification.notice');
    }
}
