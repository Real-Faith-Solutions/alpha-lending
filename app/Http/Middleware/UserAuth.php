<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $routeName = $request->path();

        if(!Auth::user() && (str_contains($routeName, 'user') == true || $routeName == 'logout')){
            return Redirect::to('/login');
        }

        if(Auth::user() && ($routeName == 'login')){
            return Redirect::to('user/dashboard');
        }

        return $next($request);
    }
}
