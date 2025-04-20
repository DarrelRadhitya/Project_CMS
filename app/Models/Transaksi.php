<?php

namespace App\Models;

class Transaksi
{
    private static $data = [
        [
            'Id_Transaksi' => 'T001',
            'Id_Pelanggan'=> 'P001',
            'Id_Playstation'=> 'PS01',
            'Tanggal_Pinjam'=> '17-03-2025',
            'Tanggal_Kembali'=> '19-03-2025',
            'Status'=> 'Lunas'
        ],
        [
            'Id_Transaksi' => 'T002',
            'Id_Pelanggan'=> 'P002',
            'Id_Playstation'=> 'PS02',
            'Tanggal_Pinjam'=> '17-03-2025',
            'Tanggal_Kembali'=> '18-03-2025',
            'Status'=> 'DP'
        ],
    ];

    public static function all()
    {
        return self::$data;
    }

    public static function find($id)
    {
        foreach (self::$data as $Transaksi) {
            if ($Transaksi['Id_Transaksi'] == $id) {
                return $Transaksi;
            }
        }
        return null;
    }
}