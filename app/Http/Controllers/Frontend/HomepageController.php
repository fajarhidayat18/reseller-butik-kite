<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Diskon;
use App\Models\Reseller;
use App\Models\Stok;
use App\Models\Stok_toko;
use App\Models\Brgterjual;
use App\Models\Peluncur;
use App\Models\Slider;

class HomepageController extends Controller
{
    public function index()
    {

        $reseller = Reseller::all();
        $preffedStuff = Stok::leftJoin('tb_barang', 'stok_barang.id_barang', 'tb_barang.id_barang')
            ->orderBy('stok_barang.tanggal_pembelian', 'desc')
            ->where('harga_jual', '!=', 0)
            ->where('reseller_id', '!=', 0)
            ->get();
        $newStuff = Stok::leftJoin('tb_barang', 'stok_barang.id_barang', 'tb_barang.id_barang')
            ->orderBy('stok_barang.created_at', 'desc')
            ->where('harga_jual', '!=', 0)
            ->where('reseller_id', '!=', 0)
            ->get();
        $sliders = Peluncur::all();

        // ->where('harga_jual', '!=', 0)
        // ->where('nama_barang', 'like', "%$query%")
        // ->with('reseller')
        // ->paginate(12);

        // $Brgterjual = Brgterjual::all();


        // return $reseller;
        return view('frontend.homepage.index')->with([
            'newStuff' => $newStuff,
            'preffedStuff' => $preffedStuff,
            'reseller' => $reseller,
            'sliders' => $sliders

            // 'kejual' => $Brgterjual,
        ]);
    }
    public function product()
    {
        $promos = Slider::get();
        $listStuff = Stok::leftJoin('tb_barang', 'stok_barang.id_barang', 'tb_barang.id_barang')
            // ->orderBy('stok_barang.created_at', 'desc')
            ->where('reseller_id', '!=', 0)
            ->where('harga_jual', '!=', 0)
            ->where('stok_akhir', '!=', 0)
            // ->where('nama_barang', 'like', "%$query%")
            ->with('reseller')
            ->with('kategori')
            // ->groupBy('id')
            // ->get()
            ->paginate(30);

        $newStuff = Stok::leftJoin('tb_barang', 'stok_barang.id_barang', 'tb_barang.id_barang')
            ->orderBy('stok_barang.created_at', 'desc')
            ->where('harga_jual', '!=', 0)
            ->where('reseller_id', '!=', 0)
            ->get();
        // return $newStuff;
        return view('frontend.homepage.product')->with([
            'product' => $listStuff,
            'promos' => $promos
        ]);
    }
    public function cari(Request $request)
    {
        $promos = Slider::get();
        $query = $request->input('nama');
        // $product = Barang::where('nama_barang', 'like', "%$query%")->with('stok')->get();
        $semua = Stok::leftJoin('tb_barang', 'stok_barang.id_barang', 'tb_barang.id_barang')
            ->where('reseller_id', '!=', 0)
            ->where('harga_jual', '!=', 0)
            ->where('stok_akhir', '!=', 0)
            ->where('nama_barang', 'like', "%$query%")
            // ->with('reseller')
            // ->first()
            // ->get()
            ->paginate(18);

        // return $semua;
        return view('frontend.homepage.product')->with([
            'product' => $semua,
            'promos' => $promos
        ]);
    }
}
