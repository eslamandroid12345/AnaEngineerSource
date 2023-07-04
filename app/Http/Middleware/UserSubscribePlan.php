<?php

namespace App\Http\Middleware;

use App\Models\UserPlanSubscribe;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSubscribePlan
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
        $user = Auth::user();

        // Allow the admin to bypass the subscription check
        if ($user->isAdmin()) {
            return $next($request);
        }
        $palnUserSubscription = UserPlanSubscribe::where('user_id', '=', $user->id)
            ->where('status', '=', 'approve')
            ->first();
        if (!$palnUserSubscription) {
            return redirect('/plans')->with('subscribe', 'يرجي الاشتراك الان في اي باقه');
        } elseif (Carbon::now()->format('Y-m-d') < $palnUserSubscription->end_date) {
            return $next($request);
        } else {
            return redirect('/plans')->with('subscribe', 'يرجي تجديد الاشتراك لان  باقتك انتهت');
        }
    }
}
