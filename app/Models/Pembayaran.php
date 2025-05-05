<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans'; 
    protected $fillable = ['jumlah_bayar', 'metode_pembayaran', 'tanggal_pembayaran'];

    protected $primaryKey = 'id'; 

    public $incrementing = false; 
    protected $keyType = 'string';

    public static function getAll()
    {
        return Pembayaran::all();
    }

    public static function find($id)
    {
        return Pembayaran::where('id', $id)->first();
    }
}

