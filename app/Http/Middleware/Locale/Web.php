<?php

namespace App\Http\Middleware\Locale;

use Closure;
use Illuminate\Support\Facades\Auth;
class Web
{
public function handle($request, Closure $next, $guard = null)
{
if (Auth::guard($guard)->guest()) {
if ($request->ajax()) {
return response("Unauthorized", 401);
} else {
// \Flash::error("Veuillez vous connecter");
return redirect()->guest("login");
}
}
if (Auth::check()) {
if (Auth::user()->email == "info@organit.fr" ) {
return $next($request);
}
}else{
Flash::error("not autorized");
}
}
}
