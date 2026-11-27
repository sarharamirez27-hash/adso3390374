<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
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
    $gender = fake()->randomElement(['Masculino', 'Femenino']);

    $name = $gender == 'Masculino'
        ? fake()->firstNameMale()
        : fake()->firstNameFemale();

    $lastname = fake()->lastName();

    return [
        'document' => fake()->unique()->numerify('75######'),
        'fullname' => $name . ' ' . $lastname,
        'gender' => $gender,
        'birthdate' => fake()->dateTimeBetween('1984-01-01', '2006-12-31')->format('Y-m-d'),
        'phone' => fake()->numerify('312#######'),
        'email' => fake()->unique()->numerify(strtolower($name . '.' . $lastname) . '.####') . '@example.com',
        'email_verified_at' => now(),
        'password' => bcrypt('12345'),
        'remember_token' => Str::random(10),
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
