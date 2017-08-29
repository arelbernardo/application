<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class ProfileMiddleware
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
        $url = $request->url();
        $user = explode('/',$url)[3];
        if(User::where('username', $user)->count() === 0) {
            return abort(404);
        }
        return $next($request);
    }
}
