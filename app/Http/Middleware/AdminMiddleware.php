<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isadmin()) { // Zorg ervoor dat je een isAdmin() methode hebt
            return $next($request);
        }

        return redirect('/'); // Of een andere redirect als de gebruiker geen admin is
    }
}

?>