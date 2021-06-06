<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyAdminAllowed
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
        if(!Auth()->user()){
            return redirect()->route('login');
        }

        if(Auth()->user()->role=="admin"){
            return $next($request);
        }else{
            abort(404,"Page not found");
         }
    }
}
