<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    protected $model = Courses::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coursesName' => $this->faker->words(3, true),
            'coursesSKS' => $this->faker->numberBetween(1, 4),
            // 'coursesLecture' => $this->faker->name,
            // 'coursesDate' => $this->faker->date
        ];
    }
}
