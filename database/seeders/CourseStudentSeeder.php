<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_student')->insert([
         'course_id'=>'2',
         'student_id'=>'2',
         'status'=>'aprove',
         'created_at'=>now(),
         'updated_at'=>now(),

        ]);
    }
}
