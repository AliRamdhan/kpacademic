<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lectures;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lectures>
 */
class LecturesFactory extends Factory
{
    protected $model = Lectures::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lectureName' => $this->faker->name,
            'lectureConcentration' => $this->faker->randomElement(['Informatika', 'Sistem Informasi', 'Teknik Komputer']),
        ];
    }
}
