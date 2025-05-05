<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'Nomor_Telepon' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
        ];
    }
}