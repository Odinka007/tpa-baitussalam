<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            if (in_array(Auth::user()->role, $roles)) {
                return $next($request); // Lanjutkan permintaan jika role cocok
            } else {
                return redirect('/home'); // Redirect jika role tidak cocok
            }
        }

        return redirect('/login'); // Redirect jika user belum login
    }
}
