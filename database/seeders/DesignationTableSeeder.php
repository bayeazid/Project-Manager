<?php

namespace Database\Seeders;

use App\Models\UserDesignation;
use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDesignation::create([
           'user_designations'=>'H.R. manager'
        ]);
        UserDesignation::create([
            'user_designations'=>'Designer'
        ]);
        UserDesignation::create([
           'user_designations'=>'Programmer'
        ]);
        UserDesignation::create([
            'user_designations'=>'Project Manager'
        ]);
        UserDesignation::create([
           'user_designations'=>'General Manager'
        ]);
        UserDesignation::create([
            'user_designations'=>'Business Development Manager'
        ]);
        UserDesignation::create([
            'user_designations'=>'Content Writer'
        ]);
        UserDesignation::create([
            'user_designations'=>'System Administrator'
        ]);

    }
}
