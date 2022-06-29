@extends('backend.layouts.app')
@section('title','Detail Reseller')
@section('content')
<?php
function rupiah($angka){

	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}
?>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card text-lift">
            <div class="card-header bg-success">
                <h3 class="card-title">
                    {{$reseller->nama_toko}}
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-md-4 col-sm-3 col-xs-3"> 
                            <img src="{{url($reseller->foto)}}" alt="Gambar" class="img-circle" width="260px" height="260px">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-9">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <label for="">
                                    Nama <br>
                                    Jenis Kelamin <br>
                                    Tanggal lahir <br>
                                    Username <br>
                                    Kontak <br>
                                    Email <br>
                                    Provinsi <br>
                                    Kabupaten/Kota <br>
                                    Kecamatan <br>
                                    Kode Pos <br>
                                    Alamat
                                </label>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                : {{$reseller->nama}} <br>
                                : {{$reseller->jenis_kelamin}} <br>
                                : {{$reseller->tgl_lahir}} <br>
                                : {{$reseller->name}} <br>
                                : {{$reseller->no_hp}} <br>
                                : {{$reseller->email}} <br>
                                : {{$provinsi->nama}} <br>
                                : {{$kota->nama}} <br>
                                : {{$kecamatan->nama}} <br>
                                : {{$reseller->kode_pos}} <br>
                                : {{$reseller->alamat}} <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="">
                            Deskripsi 
                        </label>
                    </div>
                    <div class="col-md-12">
                        {{$reseller->deskripsi}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Daftar Barang --}}
    <section class="content">
        <!-- card barang -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @foreach ($data_stoknya as $vB)
                    <a href="{{$vB->barang->nama_barang}}">
                        <div class="col-6 col-md-3 col-lg-2 p-2 d-flex align-items-stretch">
                            <div class="bg-content-produk">
                                <div class="d-flex position-relative overflow-hidden d-flex align-items-stretch">
                                    @if($vB->foto_brg_reseller) 
                                    <img src="{{url($vB->foto_brg_reseller)}}" class="image-content-produk take-image-drop-produk w-100" alt="produk" loading="lazy" height="200" width="100"> 
                                    @else
                                    <img src="{{url($vB->barang->foto)}}" class="image-content-produk take-image-drop-produk w-100" alt="produk" loading="lazy" height="200" width="100"> 
                                    @endif
                                </div>
                                <div class="px-1 py-2">
                                    <div class="mb-1 align-self-stretch">
                                        <a href="#" class="" target="_blank">
                                            <span>{{$vB->barang->nama_barang}}</span>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-stretch">
                                        <div class="text-truncate align-self-stretch">
                                            {{rupiah ($vB->harga_jual)}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Button Kembali --}}
    <div class="container">
        <div class="float-lift">
            <a href="{{ route('reseller')}}">
                <button type="button" class="btn btn-secondary">Kembali</button>
            </a>
            <br><br>
        </div>
    </div>
</div>
@endsection
