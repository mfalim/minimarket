<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Kategori Produk: {{ $kategori }}</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarProduk as $produk)
                <tr>
                    <td>{{ $produk['id'] }}</td>
                    <td>{{ $produk['nama'] }}</td>
                    <td>Rp {{ number_format($produk['harga'], 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ url('/produk/' . $produk['id']) }}">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
