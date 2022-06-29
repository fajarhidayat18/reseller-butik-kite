@extends('backend.layouts.app')
@section('title','Slider')
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
                                        <h4 class="modal-title">Tambah Slider</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('createslider')}}" method="POST" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Toko Peluncur</label>
                                                {{-- <input type="text" name="toko" class="form-control"> --}}
                                                <select name="toko" id="toko" class="form-control">
                                                    <option value="- pilih -"></option>
                                                    @foreach ($resellers as $reseller)
                                                <option value="{{$reseller->nama_toko}}">{{$reseller->nama_toko}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Descripsi Anda</label>
                                                <input type="text" name="describsi" class="form-control">
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
                    </a>
                </div>
            </div>
            <hr>
            <table class="table" id="slider">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto barang</th>
                        <th>toko peluncur</th>
                        <th>descripsi dari peluncur</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slider as $key => $val)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img style="width:250px;height:100px;" src="{{url($val->foto)}}" alt="Foto Slider"></td>
                        <td>{{$val->toko}}</td>
                        <td>{{$val->describsi}}</td>
                        <td>
                            <!-- Modal Edit -->
                            <a class="btn btn-warning" data-toggle="modal" href='#modaledit-{{$val->id}}'><i class="fa fa-edit"></i></a>
                            <div class="modal fade" id="modaledit-{{$val->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h4 class="modal-title">Edit Slider</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('updateslider')}}" method="POST" role="form" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$val->id}}">
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" name="foto" class="form-control">
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

                            <a class="btn btn-danger" data-toggle="modal" href='#modaldelete-{{$val->id}}'><i class="fa fa-trash"></i></a>
                            <div class="modal fade" id="modaldelete-{{$val->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title">Hapus Slider</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="text-capitalize">ingin menghapus slider di bawah ini </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{url('admin/slider/delete/'.$val->id)}}">
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
        $('#slider').DataTable();
    } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
@endsection
