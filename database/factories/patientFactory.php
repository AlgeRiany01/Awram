<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\patient>
 */
class patientFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->unique()->phoneNumber(),
            'nat' => fake()->unique()->numerify('############'),
            'char' => fake()->name(),
            'email_verified_at' => now(),
            'password' =>  Hash::make('123123123'),
            'remember_token' => Str::random(10),
        ];
    }
}
