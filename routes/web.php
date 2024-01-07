<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataPenjualanController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

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
    return view('layout.main');
});


Route::resource('produk', ProdukController::class);
Route::resource('kategori_produk', KategoriProdukController::class);
Route::resource('customers', CustomerController::class);
Route::resource('dataPenjualan', DataPenjualanController::class);
