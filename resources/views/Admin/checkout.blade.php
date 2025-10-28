<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="cart-page">
        <div class="cart-header">
            <a href="{{ route('admin.keranjang') }}" class="back-btn">Batalkan </a>
            <h2>Checkout</h2>
        </div>

        <div class="cart-container">
            <!-- Item 1 -->
            <div class="cart-item">
                <img src="https://via.placeholder.com/80" alt="Sepatu Hiking Uk 39">
                <div class="cart-info">
                    <h4>Sepatu Hiking Uk 39</h4>
                    <p>Rp 17.000</p>
                </div>
                <span class="remove-btn">×</span>
            </div>

            <!-- Item 2 -->
            <div class="cart-item">
                <img src="https://via.placeholder.com/80" alt="Jaket Anti UV M">
                <div class="cart-info">
                    <h4>Jaket Anti UV M</h4>
                    <p>Rp 14.000</p>
                </div>
                <span class="remove-btn">×</span>
            </div>
        </div>

        <!-- Ringkasan Total -->
        <div class="cart-footer">
            <div style="display: flex; justify-content: space-between; width: 100%; padding: 10px 0;">
                <span>Total 2 Produk</span>
                <span>Rp 32.000</span>
            </div>
        </div>

        <!-- Metode Pembayaran -->
        <div class="cart-footer"
            style="margin-top: 20px; background: rgba(255,255,255,0.1); padding: 15px 20px; border-radius: 15px;">
            <h3 style="margin-bottom: 10px; font-size: 1rem; color: white;">Metode Pembayaran</h3>
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
                <span>Transfer Bank BRI</span>
                <input type="radio" name="payment" checked style="accent-color: #FFD700;">
            </div>
            <p style="font-size: 0.85rem; color: #ccc; margin: 5px 0 15px 0;">
                No. Rek: 3889 0106 2824 838 (an Darmilgath)<br>
                Kirim bukti transfer ke nomer WhatsApp: 0882-3277-8958
            </p>
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <span>Cash</span>
                <input type="radio" name="payment" style="accent-color: #FFD700;">
            </div>
        </div>

        <!-- Total & Button -->
        <div class="cart-footer"
            style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-weight: bold; font-size: 1.1rem;">Total Rp 32.000</span>
            <button class="checkout-btn">Buat Pesanan</button>
        </div>
    </div>
</body>

</html>
