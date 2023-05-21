<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PraktikumController;

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
