<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if($request->age &&  $request->age<18){
        //     return redirect('noacess');
        // }
        // echo "<h1> text from middle ware </h1>";
        return $next($request);
    }
}
