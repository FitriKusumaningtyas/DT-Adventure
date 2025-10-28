<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricelist | DT Adventure</title>
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


    <section class="page-header">
        <h1>PRICELIST</h1>
        <p>Temukan berbagai perlengkapan petualangan terbaik untuk mendukung setiap langkahmu menuju puncak tertinggi.
        </p>

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

    </section>

    <section class="pricelist-container">
        <a href="{{ route('admin.kategori_tenda') }}" class="card-link">
            <div class="product-card">

                <img src="{{ asset('tenda.jpg') }}" alt="Tenda dan Alat Kamp">
                <h3>Tenda dan Alat Kamp</h3>
            </div>
        </a>

        <a href="{{ route('admin.kategori_kebutuhantracking') }}" class="card-link">
            <div class="product-card">
                <img src="{{ asset('kebutuhantracking.jpg') }}" alt="Kebutuhan Tracking">
                <h3>Kebutuhan Tracking</h3>
            </div>
        </a>


        <a href="{{ route('admin.kategori_peralatanmasak') }}" class="card-link">
            <div class="product-card">
                <img src="{{ asset('peralatanmasak.jpg') }}"alt="Peralatan Masak">
                <h3>Peralatan masak</h3>
            </div>
        </a>

        <a href="{{ route('admin.kategori_outfitoutdoor') }}" class="card-link">
            <div class="product-card">
                <img src="{{ asset('outfitoutdoor.jpg') }}" alt="Outfit Outdoor">
                <h3>Outfit Outdoor</h3>
            </div>
        </a>

        <a href="{{ route('admin.kategori_perlengkapantambahan') }}" class="card-link">
            <div class="product-card">
                <img src="{{ asset('perlengkapantambahan.jpg') }}"alt="Perlengkapan Tambahan">
                <h3>Perlengkapan Tambahan</h3>
            </div>
        </a>

    </section>

    <footer>
        <p>&copy; 2025 DT Adventure. All rights reserved.</p>
    </footer>

</body>

</html>
