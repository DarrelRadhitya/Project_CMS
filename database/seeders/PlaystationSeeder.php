<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaystationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('playstations')->insert([
            [
                'jenis'=> 'Playstation 3',
                'harga_sewa'=> 40000,
                'status'=> 'disewakan'
            ],
            [
                'jenis'=> 'Playstation 3',
                'harga_sewa'=> 40000,
                'status'=> 'disewakan'
            ],
            [
                'jenis'=> 'Playstation 4',
                'harga_sewa'=> 80000,
                'status'=> 'tersedia'
            ],
            [
                'jenis'=> 'Playstation 4',
                'harga_sewa'=> 80000,
                'status'=> 'tersedia'
            ],
            [
                'jenis'=> 'Playstation 5',
                'harga_sewa'=> 120000,
                'status'=> 'tersedia'
            ],
        ]);
    }
}