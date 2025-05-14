<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    use HasFactory;

    protected $table = 'playstations';
    protected $fillable = [
        'jenis', 
        'harga_sewa', 
        'status'
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_playstation');
    }
}
