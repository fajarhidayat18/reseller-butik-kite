<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reseller;
use App\Models\Barang;
use App\Models\Stok;
use Dotenv\Regex\Success;

class Brg_terjualController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        // return Stok::all();
        $brg_terjual = Stok::where('reseller_id', '!=', '')
            // ->select('reseller_id', 'id_barang', 'harga_jual')
            ->orderBy('reseller_id')
            ->get();
        return view('backend.brg_terjual.index')->with([
            'brg_terjual' => $brg_terjual
        ]);
    }
    public function save(Request $request) 
    {
        $data = $request->all();
        Toko::create($data);
        return redirect()->back()->with('success', 'Berhasil tambah kategori');
    }
    public function update (Request $request)
    {   
        $stok_sebulumnya = $request->stokakhir;
        $ygterjual = $request->brg_terjual;
        $hitung_stok = $request->sisastok - $ygterjual;
        $brgterjual = $request->brg_terjual;
        $hitung_terjual = $stok_sebulumnya + $ygterjual;
        // return $hitung_stok;
        Stok::where('id', $request->stokid )->update([
            'stok_akhir' => $hitung_stok
        ]);
        
        Brgterjual::where('id', $request->brgterjualid )->update([
            'terjual' => $hitung_terjual
        ]);
        return redirect()->back()->with('success', 'Berhasil edit toko');
    }
    public function delete ($id)
    {
        $toko = Toko::find($id);
        $toko->delete();
        return redirect()->back()->with('success', 'Berhasil hapus toko');
    }
    
}