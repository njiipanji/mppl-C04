<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Auth;

class PemanduMiddleware
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
        //dd(Auth::user());
        if(Auth::check()) {
            if (Auth::user()->roles_id == '1') {
                return $next($request);
                //return redirect('/pemandu');
            }
            return redirect('/pemandu/error');
        }
        else {
            return redirect('/');
        }
    }
}
