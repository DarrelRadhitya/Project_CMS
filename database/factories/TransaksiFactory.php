<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal_pinjam' => $this->faker->date('Y-m-d'),
            'tanggal_kembali' => $this->faker->date('Y-m-d'),
            'status' => $this->faker->randomElement(['lunas', 'dp']),
        ];
    }
}