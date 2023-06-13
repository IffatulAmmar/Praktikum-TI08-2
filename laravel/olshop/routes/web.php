<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "selamat siang semuanya";
});

Route::get('/about', function (){
    return view('about',[
        "title" => "about",
        "nama" => "Muhammad Iffatul Ammar",
        "umur" => 19,
        'email' => "m.iffatul.a@gmail.com"
    ]);
});

Route::get('/nf', function (){
    return view('nf');
});

Route::get('/praktikum', function (){
    return view('praktikum');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/praktikuminput', [PraktikumController::class, 'index']);
Route::post('/praktikuminput', [PraktikumController::class, 'output']);

// ini route tampilan admin
route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/create', [KategoriController::class, 'create']);
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('/pesanan/update/{id}', [PesananController::class,'update']);
    Route::get('/pesanan/delete/{id}', [PesananController::class,'destroy']);

});


// route untuk tampilan frontend
route::prefix('frontend')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index_user']);
    Route::get('/about', [AboutController::class, 'index']);
});


