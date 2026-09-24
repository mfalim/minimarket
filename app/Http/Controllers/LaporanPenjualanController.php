<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            'judul' => 'Laporan Penjualan',
            'tanggal' => date('d-m-Y'),
            'total_penjualan' => 1500000,
            'jumlah_transaksi' => 25,
            'produk_terlaris' => 'Beras',
        ];
        return view('laporan', compact('data'));
        //
    }
}
