<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;


class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    private function activePlan()
    {
        $active = Auth::user() ? Auth::user()->lastActiveUserSubscription : null;

        if (!$active) {
            return null;
        }

        $lastDay = Carbon::parse($active->update_at)->addMonths($active->subscription->active_period_in_month);
        $activeDays = Carbon::parse($active->update_at)->diffInDays($lastDay);
        $remainingActiveDays = Carbon::parse($active->expired_date)->diffInDays(Carbon::now());

        return [
            'name' => $active->subscription->name,
            'remainingActiveDays' => $remainingActiveDays,
            'activeDays' => $activeDays
        ];
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
                'activePlan' => $this->activePlan(),
            ],
            'ziggy' => function () {
                return (new Ziggy)->toArray();
            },
        ]);
    }
}
