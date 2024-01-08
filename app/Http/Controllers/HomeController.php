<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DataPenjualan;
use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\Roles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function _construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::all();
        $data_penjualans = DataPenjualan::all();
        $kategori_produks = KategoriProduk::all();
        $produks = Produk::all();
        $roles = Roles::all();
        // $grafik_mhs = DB::select("SELECT prodis.nama , COUNT(*) as jumlah FROM `prodis`
        // JOIN mahasiswas ON prodis.id = mahasiswas.prodi_id
        // GROUP BY prodis.nama");

        return view('home')
            ->with('customers', $customers)
            ->with('data_penjualans', $data_penjualans)
            ->with('kategori_produks', $kategori_produks)
            // ->with('grafik_mhs', $grafik_mhs);
            ->with('produks', $produks)
            ->with('roles', $roles);


    }
}
