<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Nota Pembelian</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

  <h2>Nota Pembelian</h2>

  <table border="1" cellpadding="10">
    <tr>
      <th>Nama Alat</th>
      <th>Jumlah</th>
      <th>Harga Sewa</th>
      <th>Subtotal</th>
    </tr>

    @foreach($cart as $id => $item)
      <tr>
        <td>{{ $item['nama_alat'] }}</td>
        <td>{{ $item['jumlah'] }}</td>
        <td>Rp {{ number_format($item['harga_sewa'], 0, ',', '.') }}</td>
        <td>Rp {{ number_format($item['harga_sewa'] * $item['jumlah'], 0, ',', '.') }}</td>
      </tr>
    @endforeach
  </table>

  <tr>
    <td colspan="3"><strong>Total</strong></td>
    <td><strong>Rp {{ number_format($total, 0, ',', '.') }}</strong></td>
  </tr>
</table>

<form action="{{ route('checkout') }}" method="POST">
  @csrf
  <button type="submit" class="checkout-btn">Checkout Sekarang</button>
</form>

</body>
</html>
