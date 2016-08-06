<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * Admin middleware check if the user is Admin 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->guest())
        {
            return redirect()->guest('login');
        }
        else 
            {
                   $f = Auth::user()->role()->get();
                   if($f->contains('name','admin'))
                        {
                            return $next($request);
                        }

                    return redirect('/');
            }
    }
}
