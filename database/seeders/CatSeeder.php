<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cat::create([
            'name'=>'web development',


        ]);
        Cat::create([
            'name'=>'Graphic desgin',


        ]);
        Cat::create([
            'name'=>'English',


        ]);
        Cat::create([
            'name'=>'Android',


        ]);
    }
}
