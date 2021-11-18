<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



     /*  $user=DB::table('admins')->insert([
            'name'=>'superadmin',
            'email'=>'superadmin@gmail.com',
            'password'=>Hash::make('123'),

        ]);
        $user->attachRole('superadmin');
         
*/
       $user= DB::table('admins')->insert([
            'name'=>'manger',
            'email'=>'manger@gmail.com',
            'password'=>Hash::make('123'),

        ]);
       // $user->attachRole('manger');

    }
}
