<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        return view('backend.dashboard');
    }
}