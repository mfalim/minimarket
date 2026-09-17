<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-8">
    <div class="mx-auto max-w-5xl rounded-lg bg-white p-6 shadow">
        <h1 class="mb-6 text-2xl font-bold text-gray-800">
            Daftar Produk
        </h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-3 text-left">No</th>
                        <th class="border border-gray-300 px-4 py-3 text-left">Nama Produk</th>
                        <th class="border border-gray-300 px-4 py-3 text-left">SKU</th>
                        <th class="border border-gray-300 px-4 py-3 text-left">Harga</th>
                        <th class="border border-gray-300 px-4 py-3 text-left">Stok</th>
                        <th class="border border-gray-300 px-4 py-3 text-left">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="border border-gray-300 px-4 py-3">
                                {{ $item['nama'] }}
                            </td>
                            <td class="border border-gray-300 px-4 py-3">
                                {{ $item['sku'] }}
                            </td>
                            <td class="border border-gray-300 px-4 py-3">
                                {{ $item['harga'] }}
                            </td>
                            <td class="border border-gray-300 px-4 py-3">
                                {{ $item['stok'] }}
                            </td>
                            <td class="border border-gray-300 px-4 py-3">
                                <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}"
                                    class="h-16 w-16 rounded object-cover">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
