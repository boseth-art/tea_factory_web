<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackLastActivity
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // Update last activity time
            $request->session()->put('last_activity', time());

            // Set first login time if not set
            if (!$request->session()->has('first_login')) {
                $request->session()->put('first_login', now());
            }
        }

        return $next($request);
    }
}
