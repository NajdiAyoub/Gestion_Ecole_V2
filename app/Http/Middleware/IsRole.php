<?php

namespace App\Http\Middleware;

use Closure;

class IsRole
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
        if (auth()->user()->role==1 ){
            return $next($request);
        }
        return redirect('home')->with('error',"you don't have admin access.");
    }
}
