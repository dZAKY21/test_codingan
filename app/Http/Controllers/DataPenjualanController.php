<?php

namespace App\Http\Controllers;

use App\Models\DataPenjualan;
use Illuminate\Http\Request;

class DataPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_penjualans = DataPenjualan::all();
        return view('dataPenjualan.index', compact('data_penjualans'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_penjualans = DataPenjualan::all();
        return view("dataPenjualan.create")->with("data_Penjualans", $data_penjualans);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "tanggal" => "required",
            "nama_produk" => "required",
            "total_penjulaan" => "required",
            "total_harga" => "required"

        ]);

        // simpan data ke tabel fakultas
        DataPenjualan::create($validasi);

        return redirect("dataPenjualan")->with("success", "Data data penjualan berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPenjualan $dataPenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_penjualans = DataPenjualan::find($id);        //dd(customer);
        return view("dataPenjualan.edit")->with("data_penjualans", $data_penjualans);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPenjualan $data_penjualans)
    {
        $validasi = $request->validate([
            "tanggal" => "required",
            "nama_produk" => "required",
            "total_penjulaan" => "required",
            "total_harga" => "required"

        ]);

        // simpan data ke tabel fakultas
        $data_penjualans->update($validasi);

        return redirect("dataPenjualan")->with("success", "Data penjualan berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data_penjualans = DataPenjualan::find($id);
        $data_penjualans->delete();
        return redirect("dataPenjualan")->with("success", "Berhasil Dihapus");
    }
}
