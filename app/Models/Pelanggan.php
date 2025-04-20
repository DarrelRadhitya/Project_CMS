<?php

namespace App\Models;

class Pelanggan
{
    private static $data = [
        [
            'Id_Pelanggan' => 'P001',
            'Nama' => 'Darrel Radhitya',
            'Nomor_Telepon' => '089508949112',
            'Email' => 'darrel.radhitya@gmail.com'
        ],
        [
            'Id_Pelanggan' => 'P002',
            'Nama' => 'Ariq Fairuza',
            'Nomor_Telepon' => '081315065766',
            'Email' => 'ariq.fairuza@gmail.com'
        ],
        
    ];

    public static function all()
    {
        return self::$data;
    }

    public static function find($id)
    {
        foreach (self::$data as $Pelanggan) {
            if ($Pelanggan['Id_Pelanggan'] == $id) {
                return $Pelanggan;
            }
        }
        return null;
    }
}