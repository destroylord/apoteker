<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;


    protected $table = 'obats';

    protected $fillable = [
        'nama',
        'jenis',
        'satuan',
        'harga_beli',
        'harga_jual',
        'stok'
    ];

}
