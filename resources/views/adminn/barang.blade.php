@extends('layouts.app')

@section('title', 'Manajemen Alat Camping')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Manajemen Alat Camping</h2>

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    {{-- Form Tambah Alat --}}
    <div class="card mb-5 shadow border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Alat Baru</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('adminn.barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Kategori</label>
                        <select name="kategori_id" class="form-select" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($kategori as $kat)
                                <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Nama Alat</label>
                        <input type="text" name="nama_alat" class="form-control" required placeholder="Contoh: Sleeping Bag">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Stok</label>
                        <input type="number" name="stok" class="form-control" min="0" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Harga Sewa (Rp)</label>
                        <input type="number" name="harga_sewa" class="form-control" min="0" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Gambar</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Tuliskan deskripsi alat..."></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100 fw-semibold">+ Tambah Alat</button>
            </form>
        </div>
    </div>

    {{-- Tabel Daftar Alat --}}
    <div class="card shadow border-0">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Daftar Alat Camping</h5>
        </div>
        <div class="card-body">
            @if($items->count())
                <div class="table-responsive">
                    <table class="table table-bordered align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Alat</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga Sewa</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" width="80" class="rounded">
                                        @else
                                            <small class="text-muted">Tidak ada</small>
                                        @endif
                                    </td>
                                    <td>{{ $item->nama_alat }}</td>
                                    <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <form action="{{ route('adminn.barang.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus item ini?')" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center text-muted mb-0">Belum ada alat yang ditambahkan.</p>
            @endif
        </div>
    </div>
</div>
@endsection
