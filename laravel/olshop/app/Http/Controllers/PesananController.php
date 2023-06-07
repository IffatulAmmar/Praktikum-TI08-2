<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.produk.pesanan', ['pesanan'=>$pesanan->getAllData()]);
    }
}
