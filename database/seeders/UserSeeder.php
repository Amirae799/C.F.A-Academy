<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       /* $user=\App\Models\User::create([
            'name'=>'user3',
            'email'=>'user3@gmail.com',
            'password'=>Hash::make('123'),
        ]);

        $user->attachRole('parent');
        */
        $user=\App\Models\User::create([
            'name'=>'user4',
            'email'=>'user4@gmail.com',
            'password'=>Hash::make('123'),
        ]);

        $user->attachRole('student');
       // $user->attachRole('superadmin');
    }
}
