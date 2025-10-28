<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan - Adventure</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .form-container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 1.8rem;
            color: #FFD700;
            margin-bottom: 5px;
        }

        .form-subtitle {
            font-size: 0.95rem;
            color: #e0e0e0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #f2f2f2;
        }

        .input-field {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.2);
            color: white;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .input-field:focus {
            outline: none;
            border-color: #00b894;
            background: rgba(0, 0, 0, 0.3);
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: #00b894;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #019875;
            transform: translateY(-2px);
        }

        body {
            background: linear-gradient(180deg, #004466 0%, #006688 100%);
            background-attachment: fixed;
            color: white;
            overflow-x: hidden;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <a href="{{ session('previous_url', route('admin.keranjang')) }}" class="back-btn">
        <span class="arrow">←</span> Kembali Ke Keranjang
    </a>

    <div class="form-container">
        <div class="header">
            <h1 class="form-title">ISI DATA BUAT PEMESANAN</h1>
            <p class="form-subtitle">Lengkapi data dirimu untuk memudahkan proses pemesanan</p>
        </div>

        <!-- Tambahkan action dan method -->
        <form action="{{ route('admin.checkout') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama" class="label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="input-field"
                    placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div class="form-group">
                <label for="whatsapp" class="label">Nomor WhatsApp</label>
                <input type="tel" id="whatsapp" name="whatsapp" class="input-field"
                    placeholder="Masukkan nomor WhatsApp Anda" required>
            </div>

            <div class="form-group">
                <label for="email" class="label">Email</label>
                <input type="email" id="email" name="email" class="input-field"
                    placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="hari" class="label">Berapa hari peminjaman? (Booking +7 hari sebelum kegiatan)</label>
                <input type="number" id="hari" name="hari" class="input-field"
                    placeholder="Masukkan jumlah hari" min="1" required>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="submit-btn">KIRIM</button>
        </form>
    </div>
</body>

</html>
