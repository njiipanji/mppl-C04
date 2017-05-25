<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Auth;

class RoleUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rolename)
    {
        if(Auth::check() && !Auth::user()->roleIs($rolename)) {
            return redirect('/pemandu/error');
        }
        
        return $next($request);
    }
}
