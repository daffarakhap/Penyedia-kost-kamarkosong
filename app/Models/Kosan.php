<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    use HasFactory;

    protected $table = 'kosans';
    protected $fillable = [
        'nama_kos',
        'fasilitas',
        'luas_kamar',
        'ket_biaya_lain',
        'alamat',
        'NoWa',
        'jumlah',
        'harga',
        'image',
    ];
}
