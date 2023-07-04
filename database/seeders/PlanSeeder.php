<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $plans =
        [
                [
                    'name' => 'standared',
                    'slug' => 'plan1',
                    'stripe_plan' =>'price_1MPTR0DUf5Zc7RkN95Yhh8lw',
                    'price' => 10,
                    'description' => 'test',
                ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
