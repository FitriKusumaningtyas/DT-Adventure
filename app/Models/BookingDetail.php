<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $table = 'booking_detail';

    protected $fillable = [
        'booking_id',
        'tipe_alat_id',
        'jumlah',
        'harga_sewa',
        'subtotal',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
