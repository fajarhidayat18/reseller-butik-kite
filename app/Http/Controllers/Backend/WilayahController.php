<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use Yajra\Datatables\Datatables;


class WilayahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index_provinsi()
    {
        $provinsi = Provinsi::all();
        return view('backend.wilayah.provinsi', compact('provinsi'));
    }

    public function save_provinsi(request $request)
    {
        // $data = $request->all();
        // Provinsi::create($data);
        // return redirect()->back();

        $provinsi = new Provinsi();
        $provinsi->nama = $request->nama;
        $provinsi->save();
        return redirect()->back()->with('success','Berhasil Menambah Provinsi');
    }

    public function update_provinsi(request $request)
    {
        // $data = $request->all();
        // $provinsi = Provinsi::find($request->id);
        // $provinsi->update($data);
        // return redirect()->back();

        $provinsi = Provinsi::find($request->id);
        $provinsi->nama = $request->nama;
        $provinsi->save();
        return redirect()->back()->with('success','Berhasil Mengubah Provinsi');

    }

    public function delete_provinsi($id)
    {
        Provinsi::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Provinsi');
    }

    public function index_kota($provinsi)
    {
        // return 'halaman';
        $data['kota'] = Kota::where('id_provinsi', $provinsi)->get();
        $data['provinsi'] = $provinsi;
        return view('backend.wilayah.kota',$data);
        
    }

    public function save_kota(request $request , $provinsi)
    {
        Kota::create([
            'id_provinsi' => $provinsi,
            'nama' => $request->nama,
        ]);
        return redirect()->back()->with('success','Berhasil Menambah Kota');
    }

    public function update_kota(request $request , $provinsi)
    {

        $data = $request->all();
        Kota::where('id',$request->id)->update([
            'nama' => $request->nama
        ]);
        return redirect()->back()->with('success','Berhasil Mengubah Kota');

    }

    public function delete_kota(request $request, $id , $provinsi)
    {
        Kota::where('id', $request->id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Kota');
    }

    public function index_kecamatan($provinsi , $kota)
    {
        $data['provinsi'] = $provinsi;
        $data['kota'] = $kota; 
        $data['kecamatan'] = Kecamatan::where([
            'id_provinsi' => $provinsi,
            'id_kota' => $kota
        ])->get();
        
        return view('backend.wilayah.kecamatan' , $data);
    }

    public function save_kecamatan(request $request , $provinsi , $kota)
    {
        Kecamatan::create([
            'id_provinsi' => $provinsi,
            'id_kota' => $kota,
            'nama' => $request->nama
        ]);

        return redirect()->back()->with('success','Berhasil Menambah Kecamatan');
    }

    public function update_kecamatan(request $request , $provinsi , $kota)
    {
        $data = $request->all();
        Kecamatan::where('id',$request->id)->update([
            'nama' => $request->nama
        ]);
        return redirect()->back()->with('success','Berhasil Mengubah Kecamatan');
    }
   
    public function delete_kecamatan(request $request, $id , $provinsi, $kota)
    {
        Kecamatan::where('id', $request->id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Kecamatan');
    }

    public function datatable_provinsi()
    {
        return Datatables::of(Provinsi::query())->make(true);
    }

    public function datatable_kota()
    {
        return Datatables::of(Kota::query())->make(true);
    }

    public function datatable_kecamatan()
    {
        return Datatables::of(Kecamatan::query())->make(true);
    }

    public function kota_provinsi($id_provinsi)
    {
        $data = Kota::where('id_provinsi', $id_provinsi )->get();
        return $data;
    }

    public function kecamatan_kota($id_kota)
    {
        $data = Kecamatan::where('id_kota', $id_kota )->get();
        return $data;
    }

}