<?php

namespace Database\Seeders;

use App\Models\AddCatagory;
use Illuminate\Database\Seeder;

class Catagory_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddCatagory::create([
            'catagory_name'=>'catagory 1'
        ]);
        AddCatagory::create([
            'catagory_name'=>'catagory 2'
        ]);
        AddCatagory::create([
            'catagory_name'=>'catagory 3'
        ]);
        AddCatagory::create([
            'catagory_name'=>'catagory 4'
        ]);
        AddCatagory::create([
            'catagory_name'=>'catagory 5'
        ]);

    }
}
