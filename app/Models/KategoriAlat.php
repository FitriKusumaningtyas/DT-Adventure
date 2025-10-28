<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAlat extends Model
{
    use HasFactory;

    protected $table = 'kategori_alat';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    // Relasi ke tipe alat (1 kategori punya banyak tipe alat)
    public function tipeAlat()
    {
        return $this->hasMany(TipeAlat::class, 'kategori_id');
    }
}
