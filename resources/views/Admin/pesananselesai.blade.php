<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Selesai</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Styling khusus untuk popup sukses (opsional, jika tidak ada di style.css) */
        .success-popup {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 30px;
            max-width: 500px;
            margin: 100px auto;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            color: white;
        }

        .success-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00b894;
        }

        .success-message {
            font-size: 1.1rem;
            margin: 15px 0;
            line-height: 1.6;
        }

        .note {
            font-size: 0.85rem;
            color: #ccc;
            margin: 20px 0 25px;
            padding: 10px;
            background: rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: left;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .note::before {
            content: "•";
            color: #FFD700;
            font-weight: bold;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.3s;
            background: rgba(255,255,255,0.2);
            color: white;
        }

        .btn:hover {
            background: rgba(255,255,255,0.3);
        }
    </style>
</head>



<body>
    <div class="success-popup">
        <div class="success-icon">✓</div>
        <h2>Pesanan Berhasil Dibuat!</h2>
        <p class="success-message">Terima kasih telah melakukan pemesanan di DT Adventure.</p>

        <div class="note">
            Jika memilih transfer via BRI, silakan kirim bukti transfer ke WhatsApp admin di bawah ini untuk proses konfirmasi pembayaran lebih cepat.
        </div>

        <div class="btn-group">
            <button class="btn">Kirim Bukti Pembayaran via IT BRI</button>
            <button class="btn">Selesai</button>
        </div>
    </div>
</body>
</html>