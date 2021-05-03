<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course100 = new Course();
        
        $course100->name = "course100name";
        $course100->description = "course100Description";
        $course100->category = "course100Description";
        $course100->save();
    }
}
