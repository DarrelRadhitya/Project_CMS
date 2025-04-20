<?php

namespace App\Models;

class Pembayaran
{
    private static $data = [
        [
            'Id_Pembayaran' => 'B001',
            'Id_Transaksi'=> 'T001',
            'Jumlah_Bayar'=> 80000,
            'Metode_Pembayaran'=> 'Tunai',
            'Tanggal_Pembayaran'=> '17-03-2025'
        ],
        [
            'Id_Pembayaran' => 'B002',
            'Id_transaksi'=> 'T002',
            'Jumlah_Bayar'=> 50000,
            'Metode_Pembayaran'=> 'Transfer',
            'Tanggal_Pembayaran'=> '17-03-2025'
        ],
    ];

    public static function all()
    {
        return self::$data;
    }

    public static function find($id)
    {
        foreach (self::$data as $Pembayaran) {
            if ($Pembayaran['Id_Pembayaran'] == $id) {
                return $Pembayaran;
            }
        }
        return null;
    }
}