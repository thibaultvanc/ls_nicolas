<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */






    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->guest()) {

            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
               // \Flash::error('Veuillez vous connecter');
                return redirect()->guest('login');
            }
        }
        if (Auth::check()) {
            if (Auth::user()->email == 'info@organit.fr' || Auth::user()->email == 'guy@organit.fr'  || Auth::user()->email == 'jleleu@flandrinfinance.fr') {
            }
                return $next($request);
        }else{
            //dd('123');
            Flash::error('not autorized');
        }

    }
}
