<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'user_id',
        'kode_booking',
        'tanggal_booking',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_harga',
        'status',
        'catatan',
    ];

    public function details()
    {
        return $this->hasMany(BookingDetail::class);
    }
}
