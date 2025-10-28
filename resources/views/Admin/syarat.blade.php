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
        <h1>Syarat & Ketentuan</h1>
    </section>

    <section class="contact-section">
        <div class="contact-info">
            <p><strong>Syarat & Ketentuan di DT Adventure:</strong><br>

                Wajib meninggalkan kartu identitas asli (KTP, SIM, Kartu Pelajar, dll).

                Booking alat minimal dengan DP 25%.

                Pengambilan alat minimal membayar uang muka 75%.

                Keterlambatan pengembalian alat dikenakan biaya tambahan sesuai waktu keterlambatan.

                Jika terjadi kerusakan, penyewa dikenakan biaya ganti rugi atau mengganti alat sesuai dengan kondisi
                saat menyewa.

                Jika alat yang disewakan tidak berfungsi, penyewa berhak mendapatkan potongan harga.n<br>

            </p>



            <p><strong>Aturan Pengembalian :</strong><br>

                Waktu (jam) pengembalian sama dengan waktu (jam) pengambilan.

                Jika terlambat kurang dari 5 jam, tidak dikenakan biaya tambahan (masih ditoleransi).

                Jika terlambat lebih dari 5 jam tetapi kurang dari 10 jam, dikenakan biaya tambahan sebesar ½ (setengah)
                harga sewa.

                Jika terlambat lebih dari 10 jam, dikenakan biaya tambahan sebesar 1 hari (24 jam) harga sewa</p>


            <p class="catatan">
                Perhitungan sewa berlaku per 24 jam (1 hari)
            </p>
        </div>

        <div class="contact-img">
            <img src="{{ asset('syarat.jpg') }}" alt="Syarat & Ketentuan ">
        </div>
    </section>

    <footer>
        <p>&copy; 2025 DT Adventure. All rights reserved.</p>
    </footer>

</body>

</html>
