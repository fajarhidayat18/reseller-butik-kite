@extends('backend.layouts.app')
@section('title','Etalase Reseller')
@section('css')
@endsection
@section('content')
<?php
function rupiah($angka){

	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}
?>
<section class="content">
    <!-- card barang -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach ($stok as $vB)
                <div class="col-6 col-md-3 col-lg-2 p-2 d-flex align-items-stretch">
                    <a href="#modalbarang-{{$vB->id}}" data-toggle="modal">
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
                                    <h6 class="text-primary">
                                        {{$vB->barang->nama_barang}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Detail barang reseller -->
                <div class="modal fade" id="modalbarang-{{$vB->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h4 class="modal-title">Detail Barang</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="col-md-12 col-sm-7 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <label for="">
                                                Nama barang <br>
                                                Kategori <br>
                                                Harga jual <br>
                                                Stok Awal <br>
                                                Terjual <br>
                                                Stok Akhir <br>
                                                Keterangan
                                            </label>
                                        </div>
                                        <div class="col-md-9 col-sm-7">
                                            : {{$vB->barang->nama_barang}} <br>
                                            : {{$vB->barang->kategori->kategori}}<br>
                                            : {{rupiah ($vB->harga_jual)}} <br>
                                            : {{$vB->stok_awal}}<br>
                                            : {{$vB->stok_awal - $vB->stok_akhir}} <br>
                                            : {{$vB->stok_akhir}}
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>{{$vB->barang->ket}}</textarea> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection