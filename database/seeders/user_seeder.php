<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create(
            [
                'id'=>'1',
                'name'=>'Admin',
               
                'password'=>bcrypt('123456'),
                'role'=>'Admin',
              
                'email'=>'admin@gmail.com',            
         
            ]
        );
    }
}
