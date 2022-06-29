<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stok;
use App\Models\Reseller;
use Auth;
use Image;

class StokResellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reseller');
    }
    /**
     * Show the profile for the given user.
     *
    * @param  int  $id
     * @return View
     */
    public function index()
    {
        // $reseller = Reseller::find($request->id);
        // $data = Stok::where('reseller_id',$reseller)->first();
        $data['auth'] = Auth::guard('reseller')->user()->id;
        $data['stok'] = Stok::where('reseller_id', $data['auth'])->get();
        // return $data;
        
        // return $data;
        return view('backend.reseller.stok.index', $data);
    }
    public function simpan_foto_barang_reseller(request $request)
    {
        // return $request->foto;
        $data_foto = Stok::find($request->id_stok);
        $foto = "ft_stok_resll/" .md5(date('dmyhis')) .'.webp';
        if ($request->foto) {
            if (file_exists($data_foto['foto_brg_reseller'])) {
                unlink($data_foto['foto_brg_reseller']);
            }
        }
        $data_f['foto'] = $foto;
        Image::make($request->foto)->fit('200', '300')->encode('webp',100)->save($foto);
        Stok::where('id', $request->id_stok )->update([
            'foto_brg_reseller' => $data_f['foto']
        ]);
        $data['auth'] = Auth::guard('reseller')->user()->id;
        $data['stok'] = Stok::where('reseller_id', $data['auth'])->get();
        return view('backend.reseller.stok.index', $data);
    }
    public function simpan_harga_barang_reseller(request $request)
    {
        // return $request;
        Stok::where('id', $request->id_stok )->update([
            'harga_jual' => $request->harga_jual
        ]);
        $data['auth'] = Auth::guard('reseller')->user()->id;
        $data['stok'] = Stok::where('reseller_id', $data['auth'])->get();
        return view('backend.reseller.stok.index', $data);
    }
    public function terjual_barang_reseller(request $request)
    {
        $cari = Stok::find($request->id);
        $hasil_hitung = $cari->stok_akhir - $request->terjual;
        Stok::where('id', $request->id )->update([
            'stok_akhir' => $hasil_hitung
        ]);
        $data['auth'] = Auth::guard('reseller')->user()->id;
        $data['stok'] = Stok::where('reseller_id', $data['auth'])->get();
        return view('backend.reseller.stok.index', $data);
    }
}