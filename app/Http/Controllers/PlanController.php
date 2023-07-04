<?php

namespace App\Http\Controllers;

use App\Models\UserPlanSubscribe;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        $palnUserSubscription = UserPlanSubscribe::where('user_id','=',Auth::id())->where('status','=','approve')->first();
        return view("Front.plans.plans", compact("plans","palnUserSubscription"));
    }

    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("Front.plans.subscription", compact("plan", "intent"));
    }

    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        try {
            $subscription = $request->user()
                ->newSubscription($request->plan, $plan->stripe_plan)
                ->create($request->token);

            return view("Front.plans.subscription_success");
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Payment failed. Please check your balance and try again.']);
        }
    }

}
