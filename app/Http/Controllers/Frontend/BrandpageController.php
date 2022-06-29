<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Reseller;
use App\Models\Stok;
use App\Models\Brgterjual;

class BrandpageController extends Controller
{
    public function index($id)
    {
        $myStore = Reseller::find($id);
        $viewStuff = Barang::all();
        $brg_terjual = Brgterjual::all();
        $data_stok = Stok::where('reseller_id', $myStore->id)->get();
        return view('frontend.brandPage')->with([
            'viewStuff' => $viewStuff, 
            'myStore' => $myStore,
            'data_stok' => $data_stok,
            'brg_terjual' => $brg_terjual 
        ]);
    }
}
