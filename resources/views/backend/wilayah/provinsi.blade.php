@extends('backend.layouts.app')
@section('title','Wilayah')
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
                                    <h4 class="modal-title">Tambah Provinsi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('saveprovinsi')}}" method="POST" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Provinsi">
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
                </div>
            </div>
            <hr>
            <table class="table" id="provinsi">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Provisi</a></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($provinsi as $p)    
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a href="{{ url('/admin/wilayah/' .$p->id)}}">{{$p->nama}}</a></td>
                        <td>
                            <!-- Modal Edit -->
                            <a class="btn btn-warning" data-toggle="modal" href='#modaledit-{{$p->id}}'><i class="fa fa-edit"></i></a>
                            <div class="modal fade" id="modaledit-{{$p->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h4 class="modal-title">Edit Provinsi</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('updateprovinsi')}}" method="POST" role="form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$p->id}}">
                                                <div class="form-group">
                                                    <label>Provinsi</label>
                                                    <input type="text" name="nama" class="form-control" value="{{$p->nama}}" placeholder="Provinsi">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-warning">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete -->
                            
                            <a class="btn btn-danger" data-toggle="modal" href='#modaldelete-{{$p->id}}'><i class="fa fa-trash"></i></a>
                            <div class="modal fade" id="modaldelete-{{$p->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title">Hapus Data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="text-capitalize">ingin menghapus data provinsi {{$p->nama}}</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{ url('/admin/wilayah/delete/' .$p->id)}}">
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
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#provinsi').DataTable();
    } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
@endsection