<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Sewa | DT Adventure</title>
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
    <h1>Cara Penyewaan</h1>
    <p>DT Adventure memberikan dua metode penyewaan perlengkapan outdoor, kamu bisa pilih sesuai kebutuhanmu.</p>
</section>

<section class="cara-sewa">
    <div class="cara-content">
        <ol>
            <li>
                <strong>Sewa Offline (Datang Langsung ke Toko)</strong><br>
                Kamu bisa datang langsung ke toko kami untuk melihat pilihan perlengkapan secara langsung. Setelah menentukan barang yang ingin disewa, cukup isi formulir penyewaan di tempat dan lakukan pembayaran sesuai ketentuan.
            </li>
            <li>
                <strong>Sewa Online (Melalui Website / WhatsApp)</strong><br>
                Untuk kemudahan, kamu juga dapat melakukan pemesanan melalui website atau chat WhatsApp resmi DT Adventure. Pilih barang yang diinginkan dari halaman <em>Pricelist</em>, isi form pemesanan, kemudian tunggu konfirmasi ketersediaan dan instruksi pembayaran dari admin.
            </li>
        </ol>

        <p class="catatan">
            <strong>Catatan:</strong><br>
            - Harap membawa kartu identitas saat pengambilan barang.<br>
            - Untuk sewa online, proses pengambilan, konfirmasi pengembalian, serta pembayaran dapat dilakukan setelah barang siap diambil di toko.<br>
            - Barang wajib dikembalikan sesuai jadwal agar tidak dikenakan denda keterlambatan.
        </p>
    </div>

    <div class="cara-img">
        <img src="{{ asset('carasewa.jpg') }}" alt="DT Adventure Logo">
    </div>
</section>

<footer>
    <p>&copy; 2025 DT Adventure. All rights reserved.</p>
</footer>

</body>
</html>
