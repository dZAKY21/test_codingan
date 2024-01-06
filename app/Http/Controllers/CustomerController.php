<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view("customers.index")->with("customers", $customers);
    }


    public function create()
    {
        return view("customers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama_customer" => "required",
            "alamat" => "required",
            "email" => "required|unique:customers",
            "foto" => "required| image"
        ]);

        // ambil extensi file foto
        $ext = $request->foto->getClientOriginalExtension();
        $validasi["foto"] = $request->email . "." . $ext;
        $request->foto->move(public_path("foto"), $validasi["foto"]);
        Customer::create($validasi);
        return redirect("customers")->with("success", "Data customer berhasil Disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customers)
    {
        $customers = Customer::all();        //dd(customer);
        return view("customers.edit")->with("customers", $customers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validasi = $request->validate([
            "nama_customer" => "required",
            "alamat" => "required",
            "email" => "required|unique:customers",
            "foto" => "image | nullable"
        ]);

        $ext = $request->foto->getClientOriginalExtension();
        $validasi["foto"] = $request->email . "." . $ext;
        $request->foto->move(public_path("foto"), $validasi["foto"]);

        $customer->update($validasi);
        return redirect("customers")->with("success", "Data customer berhasil Disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customers)
    {
        $customers->delete();
        return redirect("customers")->with("success", "Berhasil Dihapus");
    }
}
