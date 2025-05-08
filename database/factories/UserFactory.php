<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $role=['student','doctor','engineer'];
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number'=>fake()->unique()->phoneNumber(),
            'national_num'=>fake()->unique()->numerify('##########'),
            'academic_id'=>fake()->unique()->numerify('##########'),
            'role_id'=> rand(1,4),
            "level"=> $this->faker->randomElement( ['first', 'second', 'third', 'fouth']),
            'password' => Hash::make('password123'),
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
