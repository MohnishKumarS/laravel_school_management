<?php

namespace Database\Factories;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'std_id' => 4, // Reference to Standard factory
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->regexify('[7-9][0-9]{9}'),
            'year' => '2024-25',
        ];
    }
}
