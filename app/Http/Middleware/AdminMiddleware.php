<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->email !== 'admin@damkar.local') {
            abort(403, 'Akses Ditolak');
        }

        return $next($request);
    }
}