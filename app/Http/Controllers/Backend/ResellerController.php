<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reseller;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Barang;
use App\Models\Stok;
use Illuminate\Support\Facades\Hash;
use Image;

class ResellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    public function index()
    {   
        // return 'h1';
        $reseller = Reseller::all();
        return view('backend.reseller.admin.index')->with([
            'datareseller' => $reseller
        ]);
    }

    public function show($id)
    {
        $reseller = Reseller::find($id);
        // wilayah
        $d_provinsi = Provinsi::find($reseller->provinsi);
        $d_kota = Kota::find($reseller->kota);
        $d_kecamatan = Kecamatan::find($reseller->kecamatan);
        $viewBarang = Barang::all();
        $stoknya = Stok::where('reseller_id', $reseller->id)->get();
        // return $stoknya;
        return view('backend.reseller.admin.detail')->with([
            'data_stoknya' => $stoknya,
            'viewBarang' => $viewBarang,
            'reseller' => $reseller,
            'provinsi' => $d_provinsi,
            'kota' => $d_kota,
            'kecamatan' => $d_kecamatan
        ]);
    }
    public function create()
    {
        // return 'Hai';
        $wilayah['provinsi'] = Provinsi::all();
        $wilayah['kota'] = Kota::all();
        $wilayah['kecamatan'] = Kecamatan::all();
        // dd ($wilayah);
        return view ('backend.reseller.admin.create' , compact('wilayah'));
    }

    public function store(request $request)
    {
        $request->validate([
            'nama' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'password' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ]);
        // Encrypt Foto
        $foto = "ft_reseller/" .md5(date('dmyhis')).'.webp';
        Image::make($request->foto , $request->foto_kronologi)->encode('webp',100)->save($foto);

                
        // Encrypt Password
        $hpassword = Hash::make($request->password, [
            'rounds' => 12,
        ]);

        $reseller = $request->all();
        $reseller['foto'] = $foto;
        $reseller['foto_kronologi'] = $foto;
        $reseller['password'] = $hpassword;
        Reseller::create($reseller);

        // return $reseller;


        return redirect()->route('reseller')->with('success',' Berhasil Menambahkan Data');
    }

    public function edit($id)
    {
        $reseller = Reseller::find($id);
        $wilayah['provinsi'] = Provinsi::all();
        $wilayah['kota'] = Kota::all();
        $wilayah['kecamatan'] = Kecamatan::all();
        // dd($id);
        // dd($wilayah);
        return view('backend.reseller.admin.edit', compact('wilayah'))->with([
            'reseller' => $reseller 
        ]);
    }

    public function update(request $request, $id)
    {
        $data = $request->all();
        //GET DATA
        $reseller = Reseller::find($request->id);
        // dd($reseller);
        // CHANGE PASSWORD
        
        if ($request->password != null) { // Jika Password Di Isi //
            $data['password'] = Hash::make($request->password, [
                'rounds' => 12,
            ]);
        }else { //unset = menghilangkan variable $data['password'] supaya tidak di ubah di database
            unset($data['password']);
        }

        //CHANGE FOTO
        if ($request->foto) {
            $foto = "ft_reseller/" .md5(date('dmyhis')).'.webp';
            $data['foto'] = $foto;
            $berhasil = Image::make($request->foto)->fit(200,200)->encode('webp')->save($foto);
            if ($berhasil) {
                // echo 'berhasil upload |';
                if (file_exists($reseller->foto)) {
                    // echo 'file sebelumnya masih ada |';
                    unlink($reseller->foto);
                }
            }
        }
        $reseller->update($data);
        // return 'cie berubah';
        return redirect()->route('reseller')->with('success','Berhasil Mengubah Data');
    
    }

    public function delete ($id)
    {
        $reseller = Reseller::find($id);
        if (file_exists($reseller->foto)){
            unlink($reseller->foto);
        }
        $reseller->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data');
    }
    // public function home()
    // {
    //     $viewBarang = Barang::all();
    //     return view('backend.reseller.admin.detail')->with([
    //         'viewBarang' => $viewBarang
    //     ]);
    // }
}