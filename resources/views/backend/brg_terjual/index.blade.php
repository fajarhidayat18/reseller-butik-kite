@extends('backend.layouts.app')
@section('title','Barang Terjual')
@section('header','Barang Terjual')
@section('content')
<?php function rupiah($angka){ $hasil_rupiah = "Rp. " . number_format($angka,2,',','.'); return $hasil_rupiah; } ?>
<!-- Modal Tambah -->
<div class="container">
    <div class="card">
        {{-- <div class="card-header">
            <a class="btn btn-sm btn-primary float-right" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> Tambah</a>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="{{url('/toko/save')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Toko</label>
                                    <input type="text" class="form-control" name="nama_toko" placeholder="Masukan Nama toko" required>
                                    <label for="">Reseller</label>
                                    <select name="reseller_id" id="" class="form-control" required="required">
                                        <option value="">- pilih -</option>
                                        @foreach ($ress as $res)
                                        <option value="{{ $res->id }}">{{ $res->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Toko</th>
                        <th>Barang</th>
                        <th>Harga jual</th>
                        <th>Stok Awal</th>
                        <th>Terjual</th>
                        <th>Sisa stok</th>
                        {{-- <th>Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($brg_terjual as $brg_t)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $brg_t->reseller->nama_toko }} </td>
                        <td>{{ $brg_t->barang->nama_barang }} </td>
                        <td>{{ rupiah($brg_t->harga_jual) }} </td>
                        <td>{{ $brg_t->stok_awal }} </td>
                        <td>{{ $brg_t->stok_awal - $brg_t->stok_akhir }} </td>
                        <td>{{ $brg_t->stok_akhir }} </td>
                        {{-- <td>{{ $brg_t->Barang->nama_barang }} </td>
                        <td>{{ rupiah($brg_t->harga_terjual) }} </td>
                        <td>{{ $brg_t->Stok->stok_awal }} </td>
                        <td>{{ $brg_t->terjual }} </td>
                        <td>{{ $brg_t->Stok->stok_akhir }} </td>
                        <td> --}}
                            <!-- modal update -->
                            {{-- <a class="btn btn-sm btn-info" data-toggle="modal" href='#modaledit-{{$loop->iteration}}'><i>Barang terjual</i></a> --}}
                            <div class="modal fade modal-md" id="modaledit-{{$loop->iteration}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form action="{{route('update_brg_terjual')}}" method="POST" role="form"> --}}
                                            @csrf
                                            <div class="form-group">
                                                {{-- <input type="hidden" name="brgterjualid" value="{{$brg_t->id}}">
                                                <input type="hidden" name="stokid" value="{{$brg_t->Stok->id}}">
                                                <input type="hidden" name="stokakhir" value="{{ $brg_t->terjual }}">
                                                <input type="hidden" name="sisastok" value="{{ $brg_t->Stok->stok_akhir }}">
                                                <label for="">Barang terjual</label>
                                                <input type="text" class="form-control" name="brg_terjual" placeholder="Jumlah barang terjual hari ini" required> --}}
                                                {{-- <label for="">Reseller</label>
                                                <select name="reseller_id" id="" class="form-control" required="required">
                                                <option value="">- pilih -</option>
                                                    @foreach ($ress as $res)
                                                    <option @if($t->reseller->id == $res->id ) selected @endif value="{{ $res->id }}">{{ $res->nama }}</option>
                                                    @endforeach
                                                </select> --}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-warning">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <!-- modal delete -->
                            <a class="btn btn-sm btn-danger" data-toggle="modal" href='#modalhapus-{{$loop->iteration}}'>Hapus</a>
                            <div class="modal fade" id="modalhapus-{{$loop->iteration}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Apakah anda ingin menghapus</h4>
                                            <h5><strong> <i> {{$t->nama_toko}} </strong></i ></h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                            <a href="{{url('toko/delete/'.$t->id)}}">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection        