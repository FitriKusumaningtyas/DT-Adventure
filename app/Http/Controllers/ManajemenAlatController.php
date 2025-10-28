<?php

namespace App\Http\Controllers;

use App\Models\KategoriAlat;
use App\Models\TipeAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenAlatController extends Controller
{
    public function index()
{
    $kategori = \App\Models\KategoriAlat::all();
    $items = \App\Models\TipeAlat::with('kategori')->latest()->get();

    return view('adminn.barang', compact('kategori', 'items'));
}


    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori_alat,id',
            'nama_alat' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga_sewa' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->hasFile('gambar')
            ? $request->file('gambar')->store('gambar_alat', 'public')
            : null;

        TipeAlat::create([
            'kategori_id' => $request->kategori_id,
            'nama_alat' => $request->nama_alat,
            'stok' => $request->stok,
            'harga_sewa' => $request->harga_sewa,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect()->back()->with('success', 'Barang berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $item = TipeAlat::findOrFail($id);

        if ($item->gambar && Storage::disk('public')->exists($item->gambar)) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->back()->with('success', 'Barang berhasil dihapus!');
    }
}
