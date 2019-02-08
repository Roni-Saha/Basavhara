<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class IsLoggedIn
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
        if(!Session::has('logid')){
            return redirect('/login');
        }
        return $next($request);
    }
}
