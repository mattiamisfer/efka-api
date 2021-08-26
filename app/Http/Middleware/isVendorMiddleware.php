<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isVendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // return $next($request);
       if(Auth::check() && Auth::user()->status ==1) {
       if( Auth::check() && Auth::user()->role == 'vendor'){
        return $next($request);
    }
} else{
        return redirect()->route('login');
    }
    }
}
