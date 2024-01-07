<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produks = KategoriProduk::all();
        return view('kategori_produk.index', compact('kategori_produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produks = KategoriProduk::all();
        return view("kategori_produk.create")->with("kategori_produks", $kategori_produks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama_kategori" => "required",
        ]);

        // simpan data ke tabel fakultas
        KategoriProduk::create($validasi);

        return redirect("kategori_produk")->with("success", "Data kategori produk berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori_produks = KategoriProduk::find($id);        //dd(customer);
        return view("kategori_produk.edit")->with("kategori_produks", $kategori_produks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriProduk $kategori_produks)
    {
        $validasi = $request->validate([
            "nama_kategori" => "required",
        ]);

        // simpan data ke tabel fakultas
        $kategori_produks->update($validasi);

        return redirect("kategori_produk")->with("success", "Data kategori produk berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori_produks = KategoriProduk::find($id);
        $kategori_produks->delete();
        return redirect("kategori_produk")->with("success", "Berhasil Dihapus");
    }
}
