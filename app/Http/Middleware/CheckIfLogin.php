<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (backpack_auth()->guest()) {
            session()->push('REQUEST', $request->all());
            return redirect()->route('front.auth.login');
        }
        return $next($request);
    }
}
