<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Auth;

class OCMiddleware
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
        if(Auth::check()) {
            if (Auth::user()->roles_id == '2') {
                return $next($request);
                //return redirect('/oc');
            }
            return redirect('/oc/error');
        }
        else {
            return redirect('/');
        }
    }
}
