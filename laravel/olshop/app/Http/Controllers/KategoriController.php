<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = new KategoriProduk();
        return view('admin.produk.kategori', ['kategori'=>$kategori->getAllData()]);
    }
}
