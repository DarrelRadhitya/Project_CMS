<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jumlah_bayar' => $this->faker->numberBetween(10000, 1000000),
            'metode_pembayaran' => $this->faker->randomElement(['cash', 'transfer']),
            'tanggal_pembayaran' => $this->faker->date('Y-m-d'),
        ];
    }
}