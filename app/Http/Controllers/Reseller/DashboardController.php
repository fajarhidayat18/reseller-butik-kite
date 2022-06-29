<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use App\Models\Stok;
use Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reseller');
    }
    public function index()
    {  
        // $stok = Stok::where('id_barang')->groupBy('id_reseller')->get();
        // return $stok;
        $data['auth'] = Auth::guard('reseller')->user()->id;
        return view('backend.reseller.dashboard.index', $data);
    }
}