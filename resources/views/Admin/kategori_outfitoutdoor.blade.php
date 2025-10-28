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
      <h2>Outfit Outdoor</h2>
      <p>Pakaian nyaman dan tahan cuaca untuk hiking & trekking.</p>
    </div>
    <a href="{{ route('admin.keranjang') }}" class="cart-icon-link">🛒</a> 
  </div>
  
  <div class="produk-grid">
    <!-- Produk 1 -->
    <a href="{{ route('admin.kategori_sepatuhiking') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('sepatuhiking.jpg') }}" alt="Sepatu Hiking">   
            <p>Sepatu Hiking</p>  
        </div>
    </a>

    <!-- Produk 2 -->
    <a href="{{ route('admin.kategori_jaketgorpcore') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('jaketgorpcore.jpg') }}" alt="Jaket Gorpcore">   
            <p>Jaket Gorpcore</p>  
        </div>
    </a>

    <!-- Produk 3 -->
    <a href="{{ route('admin.kategori_jaketgelembung') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('jaketgelembung.jpg') }}" alt="Jaket Gelembung">   
            <p>Jacket Puffer/Gelembung</p>  
        </div>
    </a>

    <!-- Produk 5 -->
    <a href="{{ route('admin.kategori_jaketantiuv') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('jaketantiuv.jpg') }}" alt="Jaket Anti UV">   
            <p>Jacket Anti UV (Perempuan)</p>  
        </div>
    </a>

    <!-- Produk 6 -->
    <a href="{{ route('admin.kategori_celanacargo') }}" class="card-link">
        <div class="product-card">
            <img src="{{ asset('celanacargo.jpg') }}" alt="celanacrago">   
            <p>Celana Cargo</p>  
        </div>
    </a>

    
</div>


</section>

</body>
</html>
