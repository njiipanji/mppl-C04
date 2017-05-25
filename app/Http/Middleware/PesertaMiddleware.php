<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Auth;

class PesertaMiddleware
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
            if (Auth::user()->roles_id == '3') {
                return $next($request);
                //return redirect('/oc');
            }
            return redirect('/peserta/error');
        }
        else {
            return redirect('/');
        }
    }
}
