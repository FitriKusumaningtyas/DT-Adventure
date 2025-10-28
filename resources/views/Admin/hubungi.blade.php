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


<section class="page-header">
    <h1>Hubungi Kami</h1>
</section>

<section class="contact-section">
    <div class="contact-info">
        <p><strong>🏠 Alamat Toko:</strong><br>
        Dusun Sepatan RT 09 RW 05 No. 8, Kecamatan Rawang, Kabupaten Pekalongann<br>
        <a href="https://maps.app.goo.gl/V4xexuZGeQUpcFpg7" target="_blank" class="link">Lihat di Google Maps</a></p>

        <p><strong>📞 Nomor WhatsApp / Telepon Admin:</strong><br>
        <a href="https://wa.me/6288232778958" target="_blank" class="link">+62 812-3456-7890</a></p>

        <p><strong>🕒 Jam Operasional:</strong><br>
        Senin – Sabtu : 08.00 – 20.00 WIB<br>
        Minggu : 09.00 – 15.00 WIB</p>

        <p><strong>📱 Media Sosial:</strong><br>
        Instagram: <a href="https://instagram.com/dtadventure" target="_blank" class="link">@dtadventure</a><br>
        TikTok: <a href="https://tiktok.com/@dtadventure" target="_blank" class="link">@dtadventure</a></p>

        <p class="catatan">
            Jika ada pertanyaan, info penyewaan, atau ingin mendapatkan informasi lebih lanjut, silakan hubungi kami melalui salah satu kontak di atas. Kami siap membantu!
        </p>
    </div>

    <div class="contact-img">
        <img src="{{ asset('syarat.jpg') }}" alt="Hubungi Kami">
    </div>
</section>

<footer>
    <p>&copy; 2025 DT Adventure. All rights reserved.</p>
</footer>

</body>
</html>
