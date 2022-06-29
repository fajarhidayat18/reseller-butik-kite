<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Dotenv\Regex\Success;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {
        $kategori = Kategori::all();
        return view('backend.kategori.index',compact('kategori'));
        // return $subkategori[] -> nama_kategori;
    }
    // Kategori
    public function save(Request $request) 
    {
        $data = $request->all();
        Kategori::create($data);
        return redirect()->back()->with('success', 'Berhasil tambah kategori');
    }
    // Sub Kategori
    public function create(Request $request)
    {
        $subdata = $request->all();
        Subkategori::create($data);
        return redirect()->back()->with('success', 'Berhasil tambah kategori');
    }
    public function update (Request $request)
    {
        $data = $request->all();
        $kategori = Kategori::find($request->id);
        $kategori->update($data);
        return redirect()->back()->with('success', 'Berhasil edit kategori');
        // return $kategori;
    }
    public function delete ($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->back()->with('success', 'Berhasil hapus kategori');
    }
    
}