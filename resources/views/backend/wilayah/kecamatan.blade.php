@extends('backend.layouts.app')
@section('title','Kecamatan')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <div class="justify-content">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" data-toggle="modal" href='#modaltambah'><i class="fa fa-plus"></i>&nbsp; Tambah</a>
                    <div class="modal fade" id="modaltambah">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title">Tambah Kecamatan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url ('/admin/wilayah/' .$provinsi. '/' .$kota. '/save')}}" method="POST" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Kecamatan">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="float-right">
                        <a href="{{ url('/admin/wilayah/'.$provinsi)}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
            <hr>
            <table class="table" id="kecamatan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kecamatan</a></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kecamatan as $kc)            
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kc->nama}}</td>
                        <td>
                            <!-- Modal Edit -->
                            <a class="btn btn-warning" data-toggle="modal" href='#modaledit-{{$kc->id}}'><i class="fa fa-edit"></i></a>
                            <div class="modal fade" id="modaledit-{{$kc->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h4 class="modal-title">Edit Kecamatan</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url ('/admin/wilayah/' .$provinsi. '/' .$kota. '/update')}}" method="POST" role="form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$kc->id}}">
                                                <div class="form-group">
                                                    <label>Kecamatan</label>
                                                    <input type="text" name="nama" class="form-control" value="{{$kc->nama}}" placeholder="Kecamatan">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete -->
                            <a class="btn btn-danger" data-toggle="modal" href='#modaldelete-{{$kc->id}}'><i class="fa fa-trash"></i></a>
                            <div class="modal fade" id="modaldelete-{{$kc->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title">Hapus Data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="text-capitalize">ingin menghapus data Kecamatan</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{ url ('/admin/wilayah/' .$provinsi. '/' .$kota. '/delete/' .$kc->id)}}">
                                                <button type="button" class="btn btn-danger">Save changes</button>
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
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#kecamatan').DataTable();
    } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    
@endsection