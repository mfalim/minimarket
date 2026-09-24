<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaporanPenjualanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard_pos',['nama_pegawai' => 'Agas', 'shift' => 'Pagi (08.00 - 15.00)']);
});

Route::get('/produk/{id}', function ($id) {
    return "Menampilkan data Produk dengan ID:" . $id;
});

Route::get('/produk/cari/{nama}', function ($nama = null) {
    if ($nama) {
        return "Menampilkan data Produk dengan nama: " . $nama;
    } else {
        return "Silahkan masukkan kata kunci pencarian di URL (contoh: /produk/cari/sabun)";
    }
});

Route::prefix('admin')->group(function () {
    Route::get('/produk', function () {
        return 'Halaman Kelola Produk';
    })->name('admin.produk');
    Route::get('/kategori', function () {
        return 'Halaman Kelola Kategori Produk';
    })->name('admin.kategori');
});

Route::prefix('kasir')->group(function () {
    Route::get('/transaksi', function () {
        return 'Halaman Input Transaksi Penjualan';
    })->name('kasir.transaksi');
});

Route::get('/produk-toko', function () {
    $produk = [
        [
            'nama' => 'Beras',
            'sku' => 'BRG001',
            'harga' => 'Rp15.000',
            'stok' => 50,
            'gambar' => 'images/beras.png',
        ],
        [
            'nama' => 'Minyak Goreng',
            'sku' => 'MYG002',
            'harga' => 'Rp12.000',
            'stok' => 25,
            'gambar' => 'images/minyak_goreng.png',
        ],
        [
            'nama' => 'Gula Pasir',
            'sku' => 'GLP003',
            'harga' => 'Rp10.000',
            'stok' => 30,
            'gambar' => 'images/gula_pasir.png',
        ],
    ];
    return view('daftar_produk', compact('produk'));
});

Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/{id}', [ProductController::class, 'show']);

Route::get('/laporan', LaporanPenjualanController::class);

// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Route::post('/login', [AuthController::class, 'login'])
//     ->name('login.authenticate');

// Route::post('/logout', [AuthController::class, 'logout'])
//     ->middleware('auth')
//     ->name('logout');

// Route::get('/posts', [PostController::class, 'index'])
//     ->middleware('auth');

// Route::middleware(['auth', 'role:admin'])
//     ->prefix('admin')
//     ->name('admin.')
//     ->group(function () {
//         Route::get('/', function () {
//             return view('admin');
//         })->name('home');

//         Route::get('/dashboard', function () {
//             return view('admin');
//         })->name('dashboard');
//     });

// Route::middleware(['auth', 'role:user'])
//     ->prefix('user')
//     ->name('user.')
//     ->group(function () {
//         Route::get('/', function () {
//             return view('user');
//         })->name('home');

//         Route::get('/dashboard', function () {
//             return view('user');
//         })->name('dashboard');
//     });
