<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MBKMCourses;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MBKMCourses>
 */
class MBKMCoursesFactory extends Factory
{
    protected $model = MBKMCourses::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courses = [
            ['name' => 'Bangkit', 'duration' => '6 months'],
            ['name' => 'Kampus Merdeka', 'duration' => '12 months'],
            ['name' => 'Internship', 'duration' => '3 months'],
            ['name' => 'Independent Study', 'duration' => '4 months'],
        ];

        $course = $this->faker->randomElement($courses);

        return [
            'mbkmCoursesName' => $course['name'],
            'mbkmCoursesDuration' => $course['duration'],
        ];
    }
}
