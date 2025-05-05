<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    use HasFactory;

    protected $table = 'playstations'; 
    protected $fillable = ['jenis', 'harga_sewa', 'status'];

    protected $primaryKey = 'id'; 

    public $incrementing = false; 
    protected $keyType = 'string';

    public static function getAll()
    {
        return Playstation::all();
    }

    public static function find($id)
    {
        return Playstation::where('id', $id)->first();
    }
}

