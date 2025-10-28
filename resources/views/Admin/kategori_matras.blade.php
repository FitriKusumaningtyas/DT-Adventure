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
      <h2>Tenda dan Alat Tidur</h2>
      <p>Istirahat seru di tengah alam dengan pilihan tenda dan alat tidur terbaik.</p>
    </div>
    <a href="{{ route('admin.keranjang') }}" class="cart-icon-link">🛒</a> 
  </div>

  <div class="produk-grid">
    <!-- Produk 1 -->
    <div class="produk-card">
      <img src="logo.jpg" alt="Tenda 4p">
      <div class="produk-info">
        <h3>Tenda 4P (4 Orang)</h3>
        <ul>
          <li>Bahan waterproof</li>
          <li>Mudah dipasang</li>
          <li>Ukuran luas untuk 4 orang</li>
        </ul>
        <div class="harga">Rp 30.000 / hari</div>
        <button class="tambah-btn">Tambah</button>
      </div>
    </div>

    <!-- Produk 2 -->
    <div class="produk-card">
      <img src="logo.jpg" alt="Sleeping Bag">
      <div class="produk-info">
        <h3>Sleeping Bag</h3>
        <ul>
          <li>Hangat dan nyaman</li>
          <li>Ukuran universal</li>
          <li>Bahan lembut dan ringan</li>
        </ul>
        <div class="harga">Rp 10.000 / hari</div>
        <button class="tambah-btn">Tambah</button>
      </div>
    </div>

    <!-- Produk 3 -->
    <div class="produk-card">
      <img src="logo.jpg" alt="Tenda 2P">
      <div class="produk-info">
        <h3>Tenda 2P (2 Orang)</h3>
        <ul>
          <li>Cocok untuk pasangan</li>
          <li>Ringkas dan kuat</li>
          <li>Anti air</li>
        </ul>
        <div class="harga">Rp 25.000 / hari</div>
        <button class="tambah-btn">Tambah</button>
      </div>
    </div>

    <!-- Produk 4 -->
    <div class="produk-card">
      <img src="logo.jpg" alt="Matras">
      <div class="produk-info">
        <h3>Matras 200x60</h3>
        <ul>
          <li>Empuk dan ringan</li>
          <li>Mudah dibersihkan</li>
        </ul>
        <div class="harga">Rp 7.000 / hari</div>
        <button class="tambah-btn">Tambah</button>
      </div>
    </div>

    <!-- Produk 5 -->
    <div class="produk-card">
      <img src="logo.jpg" alt="Flysheet">
      <div class="produk-info">
        <h3>Flysheet 4x3</h3>
        <ul>
          <li>Pelindung hujan dan sinar matahari</li>
          <li>Bahan waterproof</li>
        </ul>
        <div class="harga">Rp 10.000 / hari</div>
        <button class="tambah-btn">Tambah</button>
      </div>
    </div>
  </div>
</section>

</body>
</html>
