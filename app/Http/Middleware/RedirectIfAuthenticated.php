<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        if (Auth::guard('patient')->check()) {
            return redirect()->intended(RouteServiceProvider::PATIENT);
        }
        if (Auth::guard('admin')->check()) {
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        if (Auth::guard('donor')->check()) {
            return redirect()->intended(RouteServiceProvider::DONOR);
        }

        return $next($request);
    }
}