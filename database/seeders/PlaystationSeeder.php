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
                'Jenis'=> 'Playstation 3',
                'Harga_Sewa'=> 40000,
                'Status'=> 'disewa'
            ],
            [
                'Jenis'=> 'Playstation 3',
                'Harga_Sewa'=> 40000,
                'Status'=> 'disewa'
            ],
            [
                'Jenis'=> 'Playstation 4',
                'Harga_Sewa'=> 80000,
                'Status'=> 'disewa'
            ],
            [
                'Jenis'=> 'Playstation 4',
                'Harga_Sewa'=> 40000,
                'Status'=> 'disewa'
            ],
            [
                'Jenis'=> 'Playstation 5',
                'Harga_Sewa'=> 120000,
                'Status'=> 'disewa'
            ],
        ]);
    }
}