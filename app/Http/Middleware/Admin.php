<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'welfarehome') {
            return redirect()->route('scout');
        }

        if (Auth::user()->role == 'donor') {
            return $next($request);
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
    }

}
