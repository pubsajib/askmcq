<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role=null)
    {
        if ($request->user() == null) {
            return response('Insufficient permissions', 401);
        }
        //dd($role);
        if ($request->user()->hasAnyRole($role) || !$role) {
            return $next($request);
        }
        return response('Insufficient permissions', 401);
    }
}
