<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeAlat;
use App\Models\Keranjang;

class KeranjangController extends Controller
{
    // Menampilkan halaman keranjang (admin)
    public function index()
    {
        // Ambil semua data dari tabel keranjang
        $cart = Keranjang::all();

        return view('Admin.keranjang', compact('cart'));
    }

    public function checkout()
    {
        // Ambil semua item keranjang dari database
        $cart = \App\Models\Keranjang::all();

        // Hitung total harga
        $total = $cart->sum(function ($item) {
            return $item->harga * $item->jumlah;
        });

        // Kirim ke view
        return view('Admin.checkout', compact('cart', 'total'));
    }


    // Halaman nota / checkout user
    public function nota()
    {
        $cart = session()->get('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['harga_sewa'] * $item['jumlah']);

        return view('User.nota', compact('cart', 'total'));
    }

    // Tambahkan ke keranjang (disimpan ke DATABASE -> tabel keranjang)
    public function tambah($id)
    {
        $item = TipeAlat::findOrFail($id);

        Keranjang::create([
            'tipe_alat_id' => $item->id,
            'nama_alat'    => $item->nama_alat,
            'gambar'       => $item->gambar,
            'harga'       => $item->harga_sewa, // jangan NULL
            'jumlah'      => 1,
        ]);

        return back()->with('success', "{$item->nama_alat} berhasil ditambahkan ke keranjang!");
    }

    public function hapus($id)
    {
        // Hapus data
        $item = Keranjang::find($id);
        if ($item) {
            $item->delete();
        }

        // Simpan URL sebelumnya kalau bukan login atau keranjang
        $prev = url()->previous();
        if (!str_contains($prev, 'login') && !str_contains($prev, 'keranjang')) {
            session(['previous_url' => $prev]);
        }

        // Redirect ke halaman keranjang
        return redirect()->route('admin.keranjang')->with('success', 'Item berhasil dihapus!');
    }



    // Tambah ke keranjang menggunakan SESSION (bukan database)
    public function addToCart($id)
    {
        $alat = TipeAlat::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['jumlah']++;
        } else {
            $cart[$id] = [
                'nama_alat'   => $alat->nama_alat,
                'harga_sewa'  => $alat->harga_sewa,
                'jumlah'      => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Berhasil ditambahkan ke keranjang!');
    }
}
