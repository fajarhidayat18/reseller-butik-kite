<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stok;
use App\Models\Barang;
use App\Models\Reseler;
use App\Models\Kategori;
use Yajra\Datatables\Datatables;


class StokController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        $stok = Stok::orderBy('created_at', 'desc')->get();
        $barang_1 = Barang::all();
        $kategori = Kategori::all();
        return view('backend.stok.index')->with([
            'stok' => $stok,
            'brang' => $barang_1,
            'ktgr' => $kategori
        ]);
    }
    public function save(Request $request)
    {
        Stok::create([
            'id_barang' => $request->id_brg,
            'harga_modal' => $request->hrg_mdl,
            'stok_awal' => $request->jmlh_stk,
            'stok_akhir' => $request->jmlh_stk,
            'reseller_id' => $request->res_id,
            'tanggal_pembelian' => $request->tgl_bli
        ]);
        return back();
    }

    public function update (Request $request)
    {
        $data = $request->all();
        Stok::where('id',$request->id)->update([
            'id_barang' => $request->id_brg,
            'harga_modal' => $request->hrg_mdl,
            'stok_awal' => $request->stk_awl,
            'stok_akhir' => $request->stk_akr,
            'tanggal_pembelian' => $request->tgl_bli
        ]);
        return back();
    }
    public function generate(){
        return view('backend.stok.generate');
    }

    public function createstok_m(){
        $stok = Stok::all();
        $barang_1 = Barang::all();
        return view('backend.stok.createstok_m')->with([
            'stok' => $stok,
            'brang' => $barang_1
        ]);
    }

    public function delete (request $request, $id)
    {
        Stok::where('id', $request->id)->delete();
        return back();
    }

    public function datatable()
    {
        return Datatables::of(Stok::query())->make(true);
    }
    
}