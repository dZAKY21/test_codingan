<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view("supplier.index")->with("suppliers", $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view("supplier.create")->with("suppliers", $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama_supplier" => "required",
            "barang" => "required",
            "alamat_supplier" => "required",

        ]);
        Supplier::create($validasi);
        return redirect("supplier")->with("success", "Data roles berhasil Disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $suppliers = Supplier::find($id);
        return view("supplier.edit")->with("suppliers", $suppliers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $suppliers)
    {
        $validasi = $request->validate([
            "nama_supplier" => "required",
            "barang" => "required",
            "alamat_supplier" => "required",

        ]);
        $suppliers::update($validasi);
        return redirect("supplier")->with("success", "Data roles berhasil Disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->delete();
        return redirect("supplier")->with("success", "Berhasil Dihapus");
    }
}
