<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingDetail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('nota')->with('error', 'Keranjang kosong!');
        }

        $total = collect($cart)->sum(fn($item) => $item['harga_sewa'] * $item['jumlah']);

        // Simpan ke tabel booking
        $booking = Booking::create([
            'user_id' => Auth::id() ?? 1, // sementara pakai 1 jika belum login
            'kode_booking' => 'BK-' . strtoupper(Str::random(8)),
            'tanggal_booking' => now(),
            'total_harga' => $total,
            'status' => 'pending',
        ]);

        // Simpan detail tiap barang
        foreach ($cart as $id => $item) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'tipe_alat_id' => $id,
                'jumlah' => $item['jumlah'],
                'harga_sewa' => $item['harga_sewa'],
                'subtotal' => $item['harga_sewa'] * $item['jumlah'],
            ]);
        }

        // Hapus session keranjang
        session()->forget('cart');

        return redirect()->route('nota')->with('success', 'Booking berhasil dibuat!');
    }
}
