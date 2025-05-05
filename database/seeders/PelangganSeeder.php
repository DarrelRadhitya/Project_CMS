<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            [
                'nama' => 'Yosias Wellem Kainama',
                'no_telepon' => '081208776745',
                'email' => 'Yosias.Wellem@gmail.com',
            ],
            [
                'nama' => 'Ariq Fairuza Kusman',
                'no_telepon' => '081215065766',
                'email' => 'ariq.fairuza@gmail.com',
            ],
            [
                'nama' => 'Galih Novan',
                'no_telepon' => '089542163345',
                'email' => 'Galih.Novan@gmail.com',
            ],
        ]);
    }
}