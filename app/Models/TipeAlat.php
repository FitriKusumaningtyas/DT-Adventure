<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeAlat extends Model
{
    use HasFactory;

    protected $table = 'tipe_alat';

    protected $fillable = [
        'kategori_id',
        'nama_alat',
        'gambar',
        'stok',
        'harga_sewa',
        'deskripsi',
    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(KategoriAlat::class, 'kategori_id');
    }
}
