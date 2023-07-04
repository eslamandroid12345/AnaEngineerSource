<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckEnrollment
{

      public function handle($request, Closure $next)
        {
            if (!Auth::check() || !Auth::user()->enrolledIn($course)) {
                return redirect('/');
            }

            return $next($request);
        }
}
