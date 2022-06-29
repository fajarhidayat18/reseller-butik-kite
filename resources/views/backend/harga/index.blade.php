@extends('backend.layouts.app')
@section('title','Harga')
@section('header','Harga')
@section('content')
<!-- Modal Tambah -->
<div class="container">
    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> Tambah</a>
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Harga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    
                    <form action="{{url('/harga/save')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Harga Modal</label>
                            <input type="text" class="form-control" name="harga_modal" placeholder="Masukan harga modal">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Jual</label>
                            <input type="text" class="form-control" name="harga_jual" placeholder="Masukan harga jual">
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Barang</label>
                            <select name="barang_id" id="input" class="form-control" required="required">
                                <option value="">- pilih-</option>
                                @foreach ($brang as $b_brng)
                                <option value="{{ $b_brng->id_barang }}">{{ $b_brng->nama_barang }}</option>
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
    <hr>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Harga Modal</th>
                <th>Harga Jual</th>
                <th>Nama Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($harga as $hg)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$hg->harga_modal}}</td>
                <td>{{$hg->harga_jual}}</td>
                <td>{{$hg->barang->nama_barang}}</td>
                
                <td>
                    <!-- modal update -->
                    <a class="btn btn-warning" data-toggle="modal" href='#modaledit-{{$loop->iteration}}'>Edit</a>
                    <div class="modal fade modal-md" id="modaledit-{{$loop->iteration}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('updateharga')}}" method="POST" role="form">
                                        @csrf
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{$hg->id}}">
                                                <label>Harga Modal</label>
                                                <input type="text" class="form-control" name="harga_modal" value="{{$hg->harga_modal}}" placeholder="Masukkan kategori">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Harga Jual</label>
                                                <input type="text" class="form-control" name="harga_jual" value="{{$hg->harga_jual}}" placeholder="Masukan harga jual">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pilih Barang</label>
                                                <select name="barang_id" id="input" class="form-control" required="required">
                                                    <option value="{{ $hg->barang->id_barang }}">{{ $hg->barang->nama_barang }}</option>
                                                    @foreach ($brang as $b_brng)
                                                    <option value="{{ $b_brng->id_barang }}">{{ $b_brng->nama_barang }}</option>
                                                    @endforeach
                                                </select>
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
                    <!-- modal delete -->
                    <a class="btn btn-danger" data-toggle="modal" href='#modalhapus-{{$loop->iteration}}'>Hapus</a>
                <div class="modal fade" id="modalhapus-{{$loop->iteration}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h4>Apakah anda ingin menghapus harga?</h4>
                                <h5> <i> 
                                    <p>Harga Modal</p>    {{$hg->harga_modal}} <br> 
                                    <p>Harga Jual</p>    {{$hg->harga_jual}} 
                                </h5></i >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                <a href="{{url('harga/delete/'.$hg->id)}}">
                                <button type="button" class="btn btn-danger">Hapus</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
