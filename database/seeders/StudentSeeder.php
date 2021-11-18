<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::create([
            'name'=>'Ali ',

            'email'=>'ali@gmail.com',

            'spec'=>'web development',

        ]);
        Student::create([
            'name'=>'ahmed ',

            'email'=>'ahmed@gmail.com',

            'spec'=>'web design',

        ]);
        Student::create([
            'name'=>'hala ',

            'email'=>'hala@gmail.com',

            'spec'=>'english',
          
        ]);
    }
}
