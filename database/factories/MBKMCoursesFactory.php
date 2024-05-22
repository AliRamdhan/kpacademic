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
        return [
            'mbkmCoursesName' => $this->faker->word,
            'mbkmCoursesDuration' => $this->faker->word,
        ];
    }

    /**
     * Configure the factory to accept custom course data.
     */
    public function setCourseData(array $course): self
    {
        return $this->state(function () use ($course) {
            return [
                'mbkmCoursesName' => $course['name'],
                'mbkmCoursesDuration' => $course['duration'],
            ];
        });
    }
}
