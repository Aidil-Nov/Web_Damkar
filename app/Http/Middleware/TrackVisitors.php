<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        VisitorStatistic::create([
            'ip_address' => $request->ip(),
            'page' => $request->url(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return $next($request);
    }

}
