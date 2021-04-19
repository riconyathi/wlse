<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        //dd($request->user()->role->name == "admin");
        if(!($request->user()->role->name == "admin")){
            abort(403,"You are not Authorized");
        }

        return $next($request);
    }
}
