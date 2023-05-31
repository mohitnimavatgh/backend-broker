<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Auth::check() && auth()->user()->role_name == 'user'){
            return $next($request);
         }
         else {          
            return response()
                    ->json(['status' => false,'status_code'=> 401, 'message' => 'Unauthenticated'], 401);
         }
    }
}
