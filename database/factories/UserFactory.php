<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name_id' => fake()->numberBetween(1, 10),
            'middle_name_id' => fake()->numberBetween(1, 11),
            'last_name_id' => fake()->numberBetween(2, 11),
            'suffix_name_id' => fake()->numberBetween(1, 11),
            'age' => fake()->numberBetween(18, 50),
            'birth_date' => fake()->date(),
            'gender_id' => fake()->numberBetween(1, 2),
            'address' => strtoupper(fake()->streetAddress()),
            'contact_number' => fake()->phoneNumber(),
            'email_address' => fake()->safeEmail(),
            'username' => fake()->userName(),
            'password' => bcrypt('123'),
            'role_id' => fake()->numberBetween(1, 2),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
