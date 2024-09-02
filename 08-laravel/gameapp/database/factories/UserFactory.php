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
        $gender = fake()->randomElement($array = array('Female', 'Male'));
        $fullname = ($gender === 'Female') ? fake()->firstNameFemale() : fake()->firstNameMale();
        $photo = fake()->image(public_path('images'), 140, 140, null, false);
        return [
            'fullname' => $fullname . ' ' . fake()->lastName(),
            'document' => fake()->isbn13(),
            'gender' => $gender,
            'birthdate' => fake()->dateTimeBetween($startDate = '1974-01-01 00:00:00', $endDate = '2004-01-01 00:00:00'),
            'photo' => $photo,
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('12345'),
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
