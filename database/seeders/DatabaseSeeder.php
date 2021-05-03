<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

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
        User::factory(50)->create();
        Course::factory(50)->create();

        // $course2 = new Course();

        // $course2->name = "name2";
        // $course2->description = "description2";
        // $course2->category = "category3";
        // $course2->save();
        // $this->call(CourseSeeder::class);
    }
}
