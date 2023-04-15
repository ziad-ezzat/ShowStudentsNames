<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'city' => fake()->city(),
            'mobile_phone_number' => fake()->phoneNumber(),
            'email' => fake()->email()
        ];
    }
}
