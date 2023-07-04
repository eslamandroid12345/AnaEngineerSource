<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Subscription;


class CheckSubscription
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Allow the admin to bypass the subscription check
        if ($user->isAdmin()) {
            return $next($request);
        }

        if (!$user->stripe_id) {
            return redirect('/plans');
        }

        $subscription = Subscription::retrieve($user->subscription_id);

        if (!$subscription || $subscription->status !== 'active') {
            return redirect('/plans');
        }

        return $next($request);
    }
}
