<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Stok;
use App\Models\Kategori;
use App\Models\Reseller;
use App\Models\Toko;
use App\Models\Stok_toko;
use App\Models\Brgterjual;
use Image;

class BarangController extends Controller
{
    public function __construct(){
        $this->middleware('auth:user');
    }
    public function index(){
        $barang = Barang::orderBy('nama_barang', 'asc')->get();
        $stok = Stok::all();
        $res = Reseller::all();
        return view('backend.barang.index')->with([
            'databarang' => $barang,
            'dta_stk' => $stok,
            'datares' => $res
        ]);
    }
    public function create(){
        $kat_id = Kategori::all();
        return view ('backend.barang.create')->with([
            'datakategori_id' => $kat_id
        ]);
    }
    public function tambah_brg(Request $request){
        $ft_barang = "ft_barang/" .md5(date('dmyhis')) .'.webp';
        Image::make($request->foto)->encode('webp',100)->save($ft_barang);
        // $data = $request->all();
        $data['foto'] = $ft_barang;
        // Barang::create($data);
        // return $request;
        $brg = Barang::create([
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori,
            'foto' => $data['foto'],
            'ket' => $request->ket
        ]);
        Stok::create([
            'id_barang' => $brg->id_barang,
            'harga_modal' => $request->harga_awal,
            'harga_jual' => 0,
            'stok_awal' => $request->stok,
            'stok_akhir' => $request->stok,
            'reseller_id' => 0,
            'tanggal_pembelian' => $request->tgl_bli
        ]);

        return redirect()->back()->with('success','Tersimpan');
    }
    public function edit($id){
        $barang = Barang::find($id);
        $kategorii = Kategori::all();
        return view('backend.barang.edit')->with([
            'databarang' => $barang,
            'dataktr' => $kategorii
        ]);
        $barang->update($data);
        return redirect()->back();

    }
    public function update(request $request, $id){
        $data = $request->all();
        //ambil data
        $barang = Barang::find($request->id);
        // dd($barang);
        //kondisi upload data
        if ($request->foto == null) {
            //  Jika foto tidak di upload maka ubah data selain foto saja
            $barang->update($data);
            return redirect('barang');
        } else {
            //  Jika ada di upload maka ganti foto dan ubah selain foto
            $foto = "ft_barang/" .md5(date('dmyhis')) .'.webp';
            if ($request->foto) {
                if (file_exists($barang['foto'])) {
                    unlink($barang['foto']);
                }
            }
            $data['foto'] = $foto;
            Image::make($request->foto)->fit('200', '300')->encode('webp',100)->save($foto);
            $barang->update($data);
            return redirect()->back()->with('success','Diupdate');
        } 
    }
    public function hapus($id){
        $barang = Barang::find($id);
        $_stok = Stok::where('id_barang', '=', $barang->id_barang)->first();
        if (file_exists($barang->foto)){
            unlink($barang->foto);
        }
        if (file_exists($_stok->foto_brg_reseller)){
            unlink($_stok->foto_brg_reseller);
        }
        $barang->delete();
        $_stok->delete();
        return redirect()->back()->with('success','Dihapus');
    }

    public function detail_stok($id){
        $brg = Barang::find($id);
        $ressel = Reseller::All();
        // $toko = Toko::All();
        // $stk = Stok::where('id_barang', $id)->get();
        $stk = Stok::where('id_barang', $brg->id_barang)->orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.barang.detail_stok')->with([
            'detail_b' => $brg,
            'detail_rs' => $ressel,
            // 'detail_toko' => $toko,
            'detail_s' => $stk
            ]);
        }

    public function sent_res (Request $request)
    {
        // return $request;
        $stk_ke_ress = $request->jumlah_item;
        $stk_gudng = $request->stk_di_gudang;
        $hitung = $stk_gudng - $stk_ke_ress;
        if($stk_ke_ress > 0){
            if($stk_gudng){
                if($hitung >= 0){
                    $dta_stok = Stok::create([
                        'id_barang' => $request->id_brg,
                        'harga_modal' => $request->hrg_ke_resll,
                        'harga_jual' => 0,
                        'stok_awal' => $request->jumlah_item,
                        'stok_akhir' => $request->jumlah_item,
                        'reseller_id' => $request->res_id,
                        'tanggal_pembelian' => $request->tgl_bli
                    ]);
                    $data = Stok::where('id', $request->id_gudang )->update([
                        'stok_akhir' => $hitung,
                        'harga_jual' => $request->hrg_ke_resll
                    ]);
                    $info_success = 1;
                }else{ $info_success = 2; }
            }else{ $info_success = 0; }
            if($info_success == 1){
                return redirect()->back()->with('success','Tersimpan');
            }else if($info_success == 2){
                return redirect()->back()->with('error','Stok digudang kurang');
            }else{
                return redirect()->back()->with('error','Saat ini stok kosong');
            }
        }else{
            return redirect()->back()->with('error','Tidak ada yang dikirim ke reseller');
        }
    }
    // fungsi create blade php
    public function data_kategori($kategori_id)
    {
        $data = Kategori::where('id', $kategori_id )->get();
        return $data;
    }

}