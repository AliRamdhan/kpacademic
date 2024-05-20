<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Students;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'studentName' => $this->faker->name,
            'studentNim' => $this->faker->unique()->numerify('NIM#####'),
            'studentProdi' => $this->faker->randomElement(['Informatika', 'Sistem Informasi', 'Teknik Komputer']),
            'studentSKS' => $this->faker->numberBetween(0, 150),
            'studentSemester' => $this->faker->numberBetween(1, 8),
        ];
    }
}
