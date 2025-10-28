<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="cart-page">
        <div class="cart-header">
            <a href="{{ session('previous_url', route('admin.pricelist')) }}" class="back-btn">
                <span class="arrow">←</span> Kembali
            </a>
            <h2>Keranjang Saya ({{ count($cart) }})</h2>
        </div>


        <div class="cart-container">
            <h2>Keranjang Saya ({{ count($cart) }})</h2>

            @if (count($cart) > 0)
                @foreach ($cart as $item)
                    <div class="cart-item">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_alat }}" width="100">
                        <div class="cart-info">
                            <h4>{{ $item->nama_alat }}</h4>
                            <p>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                            <p>Jumlah: {{ $item->jumlah }}</p>
                        </div>

                        <form action="{{ route('keranjang.hapus', $item->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus item ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-hapus">Hapus</button>
                        </form>
                    </div>
                @endforeach
            @else
                <p>Keranjang masih kosong.</p>
            @endif

            <a href="{{ route('admin.isidata') }}" class="card-link">
                <!-- Tombol Checkout -->
                <button class="btn-checkout">Checkout</button>
            </a>
        </div>
    </div>
</body>

</html>
