<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'cgpa' => fake()->randomFloat(2, 2.00, 4.00),
        ];
    }
}
