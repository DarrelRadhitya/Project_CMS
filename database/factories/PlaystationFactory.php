<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaystationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis' => $this->faker->randomElement(['PS3', 'PS4', 'PS5']),
            'harga_sewa' => $this->faker->numberBetween(10000, 150000),
            'status' => $this->faker->randomElement(['tersedia', 'disewa']),
        ];
    }
}