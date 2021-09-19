<?php

namespace App\Http\Middleware;

use Closure;

class userLogincheckMiddleware
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
        if ($request->session()->has('normaluser')) {
            return $next($request);
        } else {
            return redirect('/userloginpage');
        }
    }
}
