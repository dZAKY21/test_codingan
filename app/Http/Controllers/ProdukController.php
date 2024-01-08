<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = Produk::all();
        return view("produk.create")->with("produks", $produks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama_produk" => "required",
            "harga" => "required",
            "stok" => "required",
            "deskripsi" => "required",


        ]);

        // simpan data ke tabel fakultas
        Produk::create($validasi);

        return redirect("produk")->with("success", "Data produk berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produks = Produk::find($id);        //dd(customer);
        return view("produk.edit")->with("produks", $produks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produks)
    {
        $validasi = $request->validate([
            "nama_produk" => "required",
            "harga" => "required",
            "stok" => "required",
            "deskripsi" => "required",


        ]);

        // simpan data ke tabel fakultas
        $produks->update($validasi);

        return redirect("kategori_produk")->with("success", "Data produk berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produks = Produk::find($id);
        $produks->delete();
        return redirect("produk")->with("success", "Berhasil Dihapus");
    }
}
