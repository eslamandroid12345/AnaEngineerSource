<?php
namespace App\Http\Controllers;
use App\Models\Plan;
use App\Models\UserPlanSubscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe;
use Stripe\Customer;
class StripePaymentController extends Controller{

        public function stripe($id){
            $paln = Plan::findOrFail($id);
            return view('stripe')->with(['plan' => $paln]);
        }

        public function stripePost(Request $request){

            try {


                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                Stripe\Charge::create([
                    "amount" => 100 * $request->price,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Test payment from itsolutionstuff.com."
                ]);
                if ($request->type == 'month') {
                    UserPlanSubscribe::create([
                        'user_id' => Auth::id(),
                        'plan_id' => $request->plan_id,
                        'start_date' => Carbon::now()->format('Y-m-d'),
                        'end_date' => Carbon::now()->addDays(29)->format('Y-m-d')
                    ]);
                } elseif ($request->type == 'half_year') {
                    UserPlanSubscribe::create([
                        'user_id' => Auth::id(),
                        'plan_id' => $request->plan_id,
                        'start_date' => Carbon::now()->format('Y-m-d'),
                        'end_date' => Carbon::now()->addMonths(6)->format('Y-m-d'),
                    ]);
                } else {
                    UserPlanSubscribe::create([
                        'user_id' => Auth::id(),
                        'plan_id' => $request->plan_id,
                        'start_date' => Carbon::now()->format('Y-m-d'),
                        'end_date' => Carbon::now()->addYear()->format('Y-m-d'),
                    ]);

                }

                return view('Front.plans.subscription_success');
            } catch (Stripe\Exception\CardException $e) {
                $error = $e->getMessage();
                Session::flash('error', $error);
                return back()->withErrors(['stripeError' => $error]);
            }


        }
}
