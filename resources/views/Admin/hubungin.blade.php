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

    <section class="hero">
        <div class="hero-content">
            <h1>HI, PETUALANG!</h1>
            <p>DT Adventure hadir dengan perlengkapan mendaki terbaik, lengkap dengan berbagai pilihan ukuran dan warna
                untuk kenyamanan aktivitas alam kamu.</p>
            <p>Yuk, daftar sekarang dan temukan perlengkapan yang cocok untukmu!</p>
            <button>Jelajahi Sekarang</button>
        </div>
    </section>


    <section class="kategori">
        <h2>KATEGORI</h2>
        <div class="kategori-grid">
            <a href="{{ route('admin.pricelist') }}" class="kategori-item">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/price-tag.png" alt="Pricelist">
                <p>Pricelist</p>
            </a>
            <a href="{{ route('admin.carasewa') }}" class="kategori-item">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/open-book--v1.png" alt="Cara Penyewaan">
                <p>Cara Penyewaan</p>
            </a>
            <a href="{{ route('admin.syarat') }}"class="kategori-item">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/agreement.png" alt="Syarat & Ketentuan">
                <p>Syarat & Ketentuan</p>
            </a>
            <a href="{{ route('admin.kategori_tenda') }}" class="kategori-item">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/shopping-bag.png" alt="Data Pemesanan">
                <p>Data Pemesanan</p>
            </a>
        </div>
    </section>

    <section class="quotes">
        <h2>QUOTES</h2>
        <div class="quotes-grid">
            <div class="quote-box">“Gunung mengajarkan kita arti dari langkah kecil menuju puncak tertinggi.”</div>
            <div class="quote-box">“Petualangan sejati dimulai ketika kamu keluar dari zona nyamanmu.”</div>
            <div class="quote-box">“Setiap perjalanan adalah kisah baru yang menunggu untuk diceritakan.”div>
            </div>
    </section>

    <section class="about">
        <h2>DT Adventure</h2>
        <p>Teman Setia Aktivitas Outdoor mu</p>
        <p>DT Adventure menyediakan perlengkapan outdoor lengkap untuk menemani petualanganmu. Kami berkomitmen
            memberikan pengalaman terbaik bagi setiap pelanggan, dengan produk berkualitas dan layanan terpercaya.</p>
    </section>

</body>

</html>
