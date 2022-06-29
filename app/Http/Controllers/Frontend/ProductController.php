<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Stok;
use App\Models\Reseller;
use App\Models\Stok_toko;

class ProductController extends Controller
{
    public function index($id)
    {
        $dProduct = Barang::find($id);      
        $reseller = Reseller::find($id);
        $Stok = Stok::leftJoin('stok_barang.reseller_id','reseller.nama')
        ->where('reseller_id' , $reseller)->get();
        return $reseller;
        $murah = Stok::where('id_barang',$id)
            ->orderBy('harga_jual', 'ASC')
            ->first();
        $termurah = $murah->harga_jual;
        $mahal = Stok::where('id_barang',$id)
            ->orderBy('harga_jual', 'DESC')
            ->first();
        $termahal = $mahal->harga_jual;
        return view('frontend.layouts.stuff',compact('dProduct','Stok','termurah','termahal'));
        // return $Stok;
    }

    public function detail($id)
    {
        $dProduct = Barang::all();
        return view('frontend.detail.detailbarang',['dProduct' => $dProduct]);
    }
}
