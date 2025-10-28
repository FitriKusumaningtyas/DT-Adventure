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
      <h2>Kebutuhan Tracking</h2>
      <p>Semua yang kamu butuhkan saat tracking ada disini, dari carrier hingga kacamata gunung.</p>
    </div>
    <a href="{{ route('admin.keranjang') }}" class="cart-icon-link">
        🛒
        @php
            $cartCount = session('cart') ? array_sum(array_column(session('cart'), 'jumlah')) : 0;
        @endphp
        @if($cartCount > 0)
            <span class="cart-count">{{ $cartCount }}</span>
        @endif
    </a>
     
  </div>
  
  <div class="produk-grid">
    <!-- Produk 1 -->
    <a href="{{ route('admin.kategori_carrier') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('carrier.jpg') }}" alt="Carrier">   
            <p>Carrier</p>  
        </div>
    </a>

    <!-- Produk 2 -->
    <a href="{{ route('admin.kategori_daypack') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('daypack.jpg') }}" alt="Daypack">   
            <p>Daypack</p>  
        </div>
    </a>

    <!-- Produk 3 -->
    <a href="{{ route('admin.kategori_hydropack') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('hydropack.jpg') }}" alt="Hydropack">   
            <p>Hydropack</p>  
        </div>
    </a>

    <!-- Produk 4 -->
    <a href="{{ route('admin.kategori_trackingpole') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('trackingpole.jpg') }}" alt="Tracking Pole">   
            <p>Tracking Pole</p>  
        </div>
    </a>

    <!-- Produk 5 -->
    <a href="{{ route('admin.kategori_headlamp') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('headlamp.jpg') }}" alt="Headlamp">   
            <p>Headlamp</p>  
        </div>
    </a>

    <!-- Produk 6 -->
    <a href="{{ route('admin.kategori_powerbank') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('powerbank.jpg') }}" alt="Powerbank">   
            <p>Powerbank</p>  
        </div>
    </a>

    <!-- Produk 7 -->
    <a href="{{ route('admin.kategori_kacamatagunung') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('kacamatagunung.jpg') }}" alt="Kacamata Gunung">   
            <p>Kacamata Gunung</p>  
        </div>
    </a>

    <!-- Produk 8 -->
    <a href="{{ route('admin.kategori_timbanganportable') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('timbanganportable.jpg') }}" alt="Timbangan Portable">   
            <p>Timbangan Portable</p>  
        </div>
    </a>
</div>


</section>

</body>
</html>
