<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Harga;
use App\Models\Barang;

class HargaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        $harga = Harga::all();
        $barang_1 = Barang::all();
        return view('backend.harga.index')->with([
            'harga' => $harga,
            'brang' => $barang_1
        ]);
        return redirect()->back();
    }
    public function save(Request $request)
    {
        $data = $request->all();
        Harga::create($data);
        return redirect()->back();
    }
    public function update (Request $request)
    {
        $data = $request->all();
        $harga = Harga::find($request->id);
        $harga->update($data);
        return redirect()->back();
    }
    public function delete ($id)
    {
        $harga = Harga::find($id);
        $harga->delete();
        return redirect()->back();
    }
    
}