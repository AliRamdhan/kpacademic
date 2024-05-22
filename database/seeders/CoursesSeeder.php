<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;
use App\Models\MBKMCourses;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courses::factory()->count(15)->create();

        $courses = [
            ['name' => 'Bangkit', 'duration' => '6 months'],
            ['name' => 'Kampus Merdeka', 'duration' => '12 months'],
            ['name' => 'Internship', 'duration' => '3 months'],
            ['name' => 'Independent Study', 'duration' => '4 months'],
        ];

        foreach ($courses as $course) {
            MBKMCourses::factory()->setCourseData($course)->create();
        }
    }
}
