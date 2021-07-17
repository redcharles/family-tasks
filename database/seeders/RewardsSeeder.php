<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RewardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rewards = [
            'Play Nintendo (30 Minutes)' => [
                'quantity' => .5,
                'cost' => 1
            ],
            'Get a Snack' => [
                'quantity' => 1,
                'cost' => .25
            ],
            'Watch Phone/Tablet' => [
                'quantity' => .5,
                'cost' => 1
            ],
            '$10 on Amazon' => [
                'quantity' => 1,
                'cost' => 25
            ]
        ];

        foreach($rewards as $reward => $key){
            DB::table('rewards')->insert([
                'name' => $reward,
                'quantity' => $key['quantity'],
                'cost' => $key['cost']
            ]);
        }
    }
}
