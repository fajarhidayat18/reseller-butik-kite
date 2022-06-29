<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use App\Models\Reseller;
use App\Models\Stok;
use Image;
use Auth;


class EtalaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reseller');
    }
    public function index()
    {
        $data['auth'] = Auth::guard('reseller')->user()->id;
        // return view('backend.reseller.etalase.index', $data);
        $data['stok'] = Stok::where('reseller_id', $data['auth'])->get();
        // return $stoknya;
    
        return view('backend.reseller.etalase.index', $data);
    }
}