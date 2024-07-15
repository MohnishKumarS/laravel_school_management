<?php

namespace Database\Factories;

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
            'std_id' => 2, // Reference to Standard factory
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'year' => '2024-25',
        ];
    }
}
