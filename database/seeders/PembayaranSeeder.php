<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            [
                'Jumlah_Bayar'=> 80000,
                'Metode_Pembayaran'=> 'cash',
                'Tanggal_Pembayaran'=> '2025-03-17'
            ],
            [
                'Jumlah_Bayar'=> 50000,
                'Metode_Pembayaran'=> 'transfer',
                'Tanggal_Pembayaran'=> '2025-03-17'
            ],
        ]);
    }
}