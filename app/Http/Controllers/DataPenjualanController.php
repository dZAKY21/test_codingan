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
        return view("dataPenjualan.index", compact("dataPenjualan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_penjualans = DataPenjualan::all();
        return view("dataPenjualan.create")->with("dataPenjualan", $data_penjualans);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(DataPenjualan $dataPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPenjualan $dataPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPenjualan $dataPenjualan)
    {
        //
    }
}
