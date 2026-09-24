<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <p>Anda sedang melihat detail produk dengan ID: {{ $id }}</p>
    <a href="{{ url('/produk') }}">Kembali ke Daftar Produk</a>
</body>
</html>
