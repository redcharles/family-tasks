<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familyMembers = [
            'Georgia' => [
                'points' => 0,
                'phone_number' => null
            ],
            'Destinee (Mom)' => [
                'points' => 99.99,
                'phone_number' => '6062408911'
            ],
            'Charles (Dad)' => [
                'points' => 100.75,
                'phone_number' => '6062252944'
            ],
            'Avy' => [
                'points' => 0,
                'phone_number' => null
            ],
            'Kaidence' => [
                'points' => 0,
                'phone_number' => null
            ],
            'Zoey' => [
                'points' => 0,
                'phone_number' => null
            ],
            'Booker' => [
                'points' => 100,
                'phone_number' => null
            ]
        ];
        foreach($familyMembers as $member => $key){
            $insert = DB::table('family_members')->insert([
                'name' => $member,
                'balance' => $key['points'],
                'phone_number' => $key['phone_number']
            ]);
        }
        
    }
}
