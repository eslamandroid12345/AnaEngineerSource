<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class isLogin
{

    public function handle(Request $request, Closure $next)
    {


        if (Auth::check())
        {
            return $next($request);
        }
            return redirect (route('auth.login'));
    }
}
