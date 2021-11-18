<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TrainerSeeder;
use Database\Seeders\CourseStudentSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(CatSeeder::class);
        $this->call(CourseStudentSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(TrainerSeeder::class);
    }
}
