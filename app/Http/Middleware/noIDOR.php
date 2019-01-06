<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class noIDOR
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
        $allowed = ['admin'];
        if(in_array(Auth::user()->user_role, $allowed)) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
