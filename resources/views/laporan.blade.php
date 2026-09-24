<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $data['judul'] }}</h1>
    <p>Tanggal: {{ $data['tanggal'] }}</p>
    <p>Total Penjualan: {{ $data['total_penjualan'] }}</p>
    <p>Jumlah Transaksi: {{ $data['jumlah_transaksi'] }}</p>
    <p>Produk Terlaris: {{ $data['produk_terlaris'] }}</p>

</body>
</html>
