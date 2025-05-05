<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis'; 
    protected $fillable = ['tanggal_pinjam', 'tanggal_kembali', 'status'];

    protected $primaryKey = 'id'; 

    public $incrementing = false; 
    protected $keyType = 'string';

    public static function getAll()
    {
        return Transaksi::all();
    }

    public static function find($id)
    {
        return Transaksi::where('id', $id)->first();
    }
}

