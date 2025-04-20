<?php

namespace App\Models;

class Playstation
{
    private static $data = [
        [
            'Id_Playstation' => 'PS01',
            'Jenis'=> 'Playstation 3',
            'Harga_Sewa'=> 40000,
            'Status'=> 'Disewa'
        ],
        [
            'Id_Playstation' => 'PS02',
            'Jenis'=> 'Playstation 3',
            'Harga_Sewa'=> 40000,
            'Status'=> 'Disewa'
        ],
        [
            'Id_Playstation' => 'PS03',
            'Jenis'=> 'Playstation 4',
            'Harga_Sewa'=> 80000,
            'Status'=> 'Tersedia'
        ],
        [
            'Id_Playstation' => 'PS04',
            'Jenis'=> 'Playstation 4',
            'Harga_Sewa'=> 80000,
            'Status'=> 'Tersedia'
        ],
        [
            'Id_Playstation' => 'PS05',
            'Jenis'=> 'Playstation 5',
            'Harga_Sewa'=> 120000,
            'Status'=> 'Tersedia'
        ],
    ];

    public static function all()
    {
        return self::$data;
    }

    public static function find($id)
    {
        foreach (self::$data as $Playstation) {
            if ($Playstation['Id_Playstation'] == $id) {
                return $Playstation;
            }
        }
        return null;
    }
}