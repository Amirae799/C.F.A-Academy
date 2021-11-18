<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  DB::table('roles')->insert([
            'name'=>'manger',
            'display_name'=>'manger',
            'description'=>'can do any thing',
          ]);
          DB::table('roles')->insert([
            'name'=>'superadmin',
            'display_name'=>'superadmin',
            'description'=>'can access home ,courses and blog pages',
          ]);
          DB::table('roles')->insert([
            'name'=>'admin',
            'display_name'=>'admin',
            'description'=>'can access home,blog,courses,user',
          ]);
          */
         /* DB::table('roles')->insert([
            'name'=>'normalTrainer',
            'display_name'=>'normal',
            'description'=>'can access home,control,courses',
          ]);
          DB::table('roles')->insert([
            'name'=>'superTrainer',
            'display_name'=>'super',
            'description'=>'can access home,control,courses,contactus,students',
          ]);*/
          DB::table('roles')->insert([
            'name'=>'partent',
            'display_name'=>'parent',
            'description'=>'can access home,control,courses,contactus',
          ]);
          DB::table('roles')->insert([
            'name'=>'student',
            'display_name'=>'student',
            'description'=>'can access home,courses',
          ]);

    }
}
