<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('booking')->insert([
            [
                'user_id' => 1,
                'kode_booking' => 'BOOK20251013180001',
                'tanggal_booking' => now(),
                'tanggal_mulai' => now()->addDays(1),
                'tanggal_selesai' => now()->addDays(3),
                'total_harga' => 300000,
                'status' => 'pending',
                'catatan' => 'Booking alat camping untuk liburan akhir pekan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' =>2,
                'kode_booking' => 'BOOK20251013180002',
                'tanggal_booking' => now(),
                'tanggal_mulai' => now()->addDays(2),
                'tanggal_selesai' => now()->addDays(4),
                'total_harga' => 450000,
                'status' => 'berlangsung',
                'catatan' => 'Penyewaan tenda dan sleeping bag.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'kode_booking' => 'BOOK20251013180003',
                'tanggal_booking' => now(),
                'tanggal_mulai' => now()->addDays(5),
                'tanggal_selesai' => now()->addDays(7),
                'total_harga' => 250000,
                'status' => 'selesai',
                'catatan' => 'Sewa kompor portable dan matras.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
