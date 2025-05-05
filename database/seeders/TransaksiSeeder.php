<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksis')->insert([
            [
                'tanggal_pinjam'=> '2025-03-17',
                'tanggal_kembali'=> '2025-03-19',
                'status'=> 'lunas'
            ],
            [
                'tanggal_pinjam'=> '2025-03-17',
                'tanggal_kembali'=> '2025-03-18',
                'status'=> 'dp'
            ],
        ]);
    }
}