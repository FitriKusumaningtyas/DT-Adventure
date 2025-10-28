<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DT Adventure</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="{{ asset('logo.png') }}" alt="DT Adventure Logo" class="logo">
            </div>
            <nav>
                <a href="{{ route('admin.hubungin') }}">BERANDA</a>
                <a href="{{ route('admin.pricelist') }}">PRICELIST</a>
                <a href="{{ route('admin.carasewa') }}">CARA SEWA</a>
                <a href="{{ route('admin.hubungi') }}">HUBUNGI KAMI</a>
                <a href="{{ route('admin.login') }}">LOGIN</a>
            </nav>
        </div>
    </header>



    <section class="produk-container">
        <div class="produk-header">
            <div>
                <h2>Peralatan Masak</h2>
                <p>Praktis dan aman, cocok untuk camping dan tracking.</p>
            </div>
            <a href="{{ route('admin.keranjang') }}" class="cart-icon-link">
                🛒
                @php
                    $cartCount = session('cart') ? array_sum(array_column(session('cart'), 'jumlah')) : 0;
                @endphp
                @if ($cartCount > 0)
                    <span class="cart-count">{{ $cartCount }}</span>
                @endif
            </a>

        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="produk-grid">
            @forelse($items as $item)
                <div class="produk-card">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_alat }}" width="100">
                    <div class="produk-info">
                        <h3>{{ $item->nama_alat }}</h3>
                        <p>{{ $item->deskripsi }}</p>
                        <div class="harga">Rp {{ number_format($item->harga_sewa, 0, ',', '.') }} / hari</div>
                        <form action="{{ route('tambah.keranjang', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="tambah-btn">Tambah</button>
                        </form>

                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada alat pada kategori ini.</p>
            @endforelse
        </div>



    </section>

</body>

</html>
