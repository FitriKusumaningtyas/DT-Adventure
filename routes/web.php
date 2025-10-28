<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\ManajemenAlatController;
use App\Models\TipeAlat;
use App\Models\KategoriAlat;
use App\Http\Controllers\KeranjangController;

// Tampilkan keranjang
Route::get('/admin/keranjang', [KeranjangController::class, 'index'])
    ->name('admin.keranjang');;

// Tambah barang ke keranjang
Route::get('/add-to-cart/{id}', [KeranjangController::class, 'addToCart'])
    ->name('keranjang.add');

// Optional (jika ingin pakai POST)
Route::post('/tambah-ke-keranjang/{id}', [KeranjangController::class, 'tambah'])
    ->name('tambah.keranjang');

Route::delete('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus'])
    ->name('keranjang.hapus');



// Halaman nota
Route::get('/nota', [KeranjangController::class, 'nota'])->name('nota');


Route::get('/adminn/barang', [ManajemenAlatController::class, 'index'])->name('adminn.barang.index');
Route::post('/adminn/barang', [ManajemenAlatController::class, 'store'])->name('adminn.barang.store');
Route::delete('/adminn/barang/{id}', [ManajemenAlatController::class, 'destroy'])->name('adminn.barang.destroy');


Route::get('/', function () {
    return redirect('/admin/login');
});

// ==================== ADMIN LOGIN ====================

// halaman login admin
Route::get('/admin/login', function () {
    return view('Admin.login');
})->name('admin.login');




// proses login admin
Route::post('/admin/login', function (Request $request) {
    $admin = DB::table('admins')->where('email', $request->email)->first();

    if ($admin && Hash::check($request->password, $admin->password)) {
        session(['is_admin' => true, 'admin_name' => $admin->name]);
        return redirect()->route('admin.hubungin');
    }

    return back()->withErrors(['login' => 'Email atau password salah!']);
})->name('admin.login.submit');

// dashboard admin
Route::get('/admin/hubungin', function () {
    if (!session('is_admin')) {
        return redirect()->route('admin.login');
    }

    return view('Admin.hubungin', [
        'admin_name' => session('admin_name')
    ]);
})->name('admin.hubungin');

// logout admin
Route::post('/admin/logout', function () {
    session()->forget(['is_admin', 'admin_name']);
    return redirect()->route('admin.login');
})->name('admin.logout');



Route::get('/admin/carasewa', function () {
    return view('Admin.carasewa');
})->name('admin.carasewa');

Route::get('/admin/pricelist', function () {
    return view('Admin.pricelist');
})->name('admin.pricelist');


Route::get('/admin/kategori_tenda', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Tenda dan Alat Tidur')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_tenda', compact('items', 'kategori'));
})->name('admin.kategori_tenda');

Route::get('/admin/kategori_carrier', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Carrier')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_carrier', compact('items', 'kategori'));
})->name('admin.kategori_carrier');


Route::get('/admin/kategori_daypack', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Daypack')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_daypack', compact('items', 'kategori'));
})->name('admin.kategori_daypack');

Route::get('/admin/kategori_hydropack', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Hydropack')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_hydropack', compact('items', 'kategori'));
})->name('admin.kategori_hydropack');


Route::get('/admin/kategori_trackingpole', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Tracking Pole')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_trackingpole', compact('items', 'kategori'));
})->name('admin.kategori_trackingpole');

Route::get('/admin/kategori_headlamp', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Headlamp')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_headlamp', compact('items', 'kategori'));
})->name('admin.kategori_headlamp');

Route::get('/admin/kategori_powerbank', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Powerbank')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_powerbank', compact('items', 'kategori'));
})->name('admin.kategori_powerbank');

Route::get('/admin/kategori_kacamatagunung', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Kacamata Gunung')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_kacamatagunung', compact('items', 'kategori'));
})->name('admin.kategori_kacamatagunung');

Route::get('/admin/kategori_timbangan portable', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Kebutuhan Tracking-Timbangan Portable')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_timbanganportable', compact('items', 'kategori'));
})->name('admin.kategori_timbanganportable');

Route::get('/admin/kategori_peralatanmasak', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Peralatan Masak')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_peralatanmasak', compact('items', 'kategori'));
})->name('admin.kategori_peralatanmasak');



Route::get('/admin/kategori_sepatuhiking', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Outfit Outdoor-Sepatu Hiking')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_sepatuhiking', compact('items', 'kategori'));
})->name('admin.kategori_sepatuhiking');



Route::get('/admin/kategori_jaketgorpcore', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Outfit Outdoor-Jaket Gorpcore')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_jaketgorpcore', compact('items', 'kategori'));
})->name('admin.kategori_jaketgorpcore');

Route::get('/admin/kategori_jaketgelembung', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Outfit Outdoor-Jaket Gelembung')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_jaketgelembung', compact('items', 'kategori'));
})->name('admin.kategori_jaketgelembung');

Route::get('/admin/kategori_jaketantiuv', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Outfit Outdoor-Jaket Anti UV')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_jaketantiuv', compact('items', 'kategori'));
})->name('admin.kategori_jaketantiuv');

Route::get('/admin/kategori_celanacargo', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Outfit Outdoor-Celana Cargo')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_celanacargo', compact('items', 'kategori'));
})->name('admin.kategori_celanacargo');


Route::get('/admin/kategori_perlengkapantambahan', function () {
    $kategori = KategoriAlat::where('nama_kategori', 'Perlengkapan Tambahan')->first();

    $items = $kategori
        ? TipeAlat::where('kategori_id', $kategori->id)->get()
        : collect(); // kosong jika kategori belum ada

    return view('Admin.kategori_perlengkapantambahan', compact('items', 'kategori'));
})->name('admin.kategori_perlengkapantambahan');



Route::get('/admin/hubungi', function () {
    return view('Admin.hubungi');
})->name('admin.hubungi');


Route::get('/admin/syarat', function () {
    return view('Admin.syarat');
})->name('admin.syarat');


Route::get('/admin/kategori_kebutuhantracking', function () {
    return view('Admin.kategori_kebutuhantracking');
})->name('admin.kategori_kebutuhantracking');


Route::get('/admin/kategori_outfitoutdoor', function () {
    return view('Admin.kategori_outfitoutdoor');
})->name('admin.kategori_outfitoutdoor');


Route::get('/admin/isidata', function () {
    return view('Admin.isidata');
})->name('admin.isidata');

Route::get('/admin/kategori_penerangan', function () {
    return view('Admin.kategori_penerangan');
})->name('admin.kategori_penerangan');


// Tampilkan halaman checkout dengan isi keranjang dari database
Route::get('/admin/checkout', [KeranjangController::class, 'checkout'])
    ->name('admin.checkout');

Route::post('/admin/checkout', function (Illuminate\Http\Request $request) {
    // Kalau mau kirim data ke checkout.blade.php
    return view('admin.checkout', [
        'nama' => $request->nama,
        'whatsapp' => $request->whatsapp,
        'email' => $request->email,
        'hari' => $request->hari,
    ]);
})->name('admin.checkout');


Route::get('/admin/pesananselesai', function () {
    return view('Admin.pesananselesai');
})->name('admin.pesananselesai');
