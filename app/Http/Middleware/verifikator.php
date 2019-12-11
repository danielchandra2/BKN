<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class verifikator
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
        if(Auth::check() && Auth::user()->isRole()=="verifikator"){
        return $next($request);
        }
    return redirect('login');
    }
}
