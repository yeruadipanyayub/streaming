<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class SubscriptionController extends Controller
{
    public function index()
    {
        $plan = Subscription::all();

        // return [
        //     'subs' => $subs
        // ];
        return Inertia::render(
            'User/Dashboard/Subscription/Index',
            [
                'plan' => $plan,
            ]
        );
    }


    public function usersubscribe(Request $request, Subscription $subscription)
    {
        $data = [
            'user_id' => Auth::id(),
            'subscription_id' => $subscription->id,
            'price' => $subscription->price,
            'expired_date' => Carbon::now()->addMonths($subscription->active_period_in_month),
            'payment_status' => 'success',
        ];

        $userSubscription = UserSubscription::create($data);

        // return $data;
        return redirect(route('user.dashboard.index'));
    }
}
