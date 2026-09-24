<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $kategori = "Elektronik";
        $daftarProduk = [
            ['id' => 1, 'nama' => 'Laptop Axioo','harga'=>6499000],
            ['id' => 2, 'nama' => 'Smartphone Samsung','harga'=>3999000],
            ['id' => 3, 'nama' => 'Printer Epson','harga'=>1499000],
            ['id' => 4, 'nama' => 'Headset Logitech','harga'=>499000],
        ];
        return view ('produk.index', compact('kategori', 'daftarProduk'));
    }

    public function show($id){
        return view ('produk.detail',['id' => $id]);
    }
    //
}
