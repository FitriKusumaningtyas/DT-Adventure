<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang'; // nama tabel di database (sesuaikan)

    protected $fillable = [
        'tipe_alat_id',
        'nama_alat',
        'gambar',
        'harga',
        'jumlah',
    ];
}
