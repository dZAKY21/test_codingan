<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();
        return view("roles.index")->with("roles", $roles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Roles::all();
        return view("roles.create")->with("roles", $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "admin" => "required",
            "customer" => "required",

        ]);
        Roles::create($validasi);
        return redirect("roles")->with("success", "Data roles berhasil Disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roles = Roles::find($id);
        return view("roles.edit")->with("roles", $roles);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roles $roles)
    {
        $validasi = $request->validate([
            "admin" => "required",
            "customer" => "required",

        ]);
        $roles->update($validasi);
        return redirect("roles")->with("success", "Data roles berhasil Disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles = Roles::find($id);
        $roles->delete();
        return redirect("roles")->with("success", "Berhasil Dihapus");
    }
}
