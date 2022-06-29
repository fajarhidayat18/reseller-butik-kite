<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibController extends Controller
{
    public function index()
    {
        return view('frontend.lib.faq');
    }
    public function job()
    {
        return view('frontend.lib.job');
    }
    public function promo()
    {
        return view('frontend.lib.promo');
    }
    public function hakcipta()
    {
        return view('frontend.lib.hakcipta');
    }
    public function licensi()
    {
        return view('frontend.lib.licensi');
    }
    public function privasi()
    {
        return view('frontend.lib.privasi');
    }
    public function kontak()
    {
        return view('frontend.lib.kontak');
    }
    public function dukung()
    {
        return view('frontend.lib.dukung');
    }
}
