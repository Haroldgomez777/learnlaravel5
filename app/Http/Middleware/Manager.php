<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
{
    /**
     * Handle an incoming request.
     *
     * Manager middleware check if the user is Maager
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
                   if($f->contains('name','manager'))
                        {
                            return $next($request);
                        }

                    return redirect('/');
            }
    }
}
