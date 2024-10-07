<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [
            [
                'name' => 'Basic',
                'price' => '200000',
                'active_period_in_month' => 3,
                'features' => json_encode(['feature 1', 'feature 2']),
            ],
            [
                'name' => 'Premium',
                'price' => '800000',
                'active_period_in_month' => 6,
                'features' => json_encode(['feature 1', 'feature 2', 'feature 3', 'feature 4']),
            ]
        ];

        Subscription::insert($subscriptions);
    }
}
