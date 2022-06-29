@extends('backend.layouts.app')
@section('title','Kategori')
@section('header','Kategori')
@section('content')
<!-- Modal Tambah -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <a class="btn btn-md btn-primary" data-toggle="modal" href='#modal-id'>Tambah</a>
            </div>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kategori</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/admin/kategori/save')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <input type="text" class="form-control" name="kategori" placeholder="Masukan kategori">
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
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($kategori as $kt)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kt->kategori}}</td>
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
                                            <form action="{{route('updatekategori')}}" method="POST" role="form">
                                            @csrf
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{$kt->id}}">
                                                <label>Kategori</label>
                                                <input type="text" class="form-control" name="kategori" value="{{$kt->kategori}}" placeholder="Masukkan kategori">
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
                                            <h4>Apakah anda ingin menghapus kategori?</h4>
                                            <h5> <i> {{$kt->kategori}} </i ></h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                            <a href="{{url('/admin/kategori/delete/'.$kt->id)}}">
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
    </div>
</div>
@endsection
