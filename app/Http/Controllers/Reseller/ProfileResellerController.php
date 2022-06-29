<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use App\Models\Reseller;
use Auth;


class ProfileResellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reseller');
    }
    public function index()
    {
        $data['auth'] = Auth::guard('reseller')->user()->id;
        return view('backend.reseller.profil.index', $data);
    }
}