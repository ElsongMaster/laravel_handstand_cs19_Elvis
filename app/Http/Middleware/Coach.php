<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Coach
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
        if(Auth::check() && Auth::user()->role->nom === 'admin' || Auth::user()->role->nom === 'coach_lead' || Auth::user()->role->nom === 'coach'  ){

            return $next($request);
        }else{
            abort(403);
        }
    }
}
