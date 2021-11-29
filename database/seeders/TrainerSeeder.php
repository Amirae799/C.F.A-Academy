<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name'=>'Ali Mohamed',
            'phone'=>'01234007788',
            'email'=>'ali@gmail.com',
            'password'=>Hash::make('123'),
            'deprt'=>'web development',
            'photo'=>'1.png',
        ]);
        Trainer::create([
            'name'=>'Amira Mohamed',
            'phone'=>'01234997788',
            'email'=>'amira@gmail.com',
            'password'=>Hash::make('123'),
            'deprt'=>'Graphic Desgin',
            'photo'=>'2.png',
        ]);
        Trainer::create([
            'name'=>'Mohamed Samy',
            'phone'=>'01885567788',
            'email'=>'mohamed@gmail.com',
            'password'=>Hash::make('123'),
            'deprt'=>'web Design',
            'photo'=>'3.png',
        ]);
        Trainer::create([
            'name'=>'Hany alaa',
            'phone'=>'01230527788',
            'email'=>'hany@gmail.com',
            'password'=>Hash::make('123'),
            'deprt'=>'web',
            'photo'=>'4.png',
        ]);
    }
}
