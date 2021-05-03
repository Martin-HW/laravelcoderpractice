<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

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
        $course2 = new Course();

        $course2->name = "name2";
        $course2->description = "description2";
        $course2->category = "category3";
        $course2->save();
    }
}
