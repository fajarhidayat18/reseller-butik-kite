@extends('backend.layouts.app')
@section('title','Daftar Reseller')
@section('css')
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('/')}}/template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('/')}}/template/plugins/toastr/toastr.min.css">
<!-- Data Tables -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <div class="justify-content">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('createreseller')}}" class="btn btn-lg btn-primary">Tambah</a>
                    <hr>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <table class="table" id="reseller">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Kontak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datareseller as $dr)   
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td> 
                                    <div class="row">
                                        <div class="col-md-2">
                                            @if ($dr->foto == null)
                                                <p>Foto Kosong</p>
                                            @else
                                                <img class="img-circle" width="45px" height="45px" src="{{ url($dr->foto)}}">
                                            @endif
                                        </div>
                                        <div class="col-md-10">
                                            {{$dr->nama}}
                                        </div>
                                    </div>
                                </td>
                                <td>{{$dr->name}}</td>
                                <td>{{$dr->email}}</td>
                                <td>{{$dr->no_hp}}</td>
                                <td>
                                    <a href="{{ url('/admin/reseller/detail/' .$dr->id)}}" class="btn btn-success">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/admin/reseller/edit/' .$dr->id)}}" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" data-toggle="modal" href='#modaldelete-{{$dr->id}}'><i class="fas fa-trash"></i> </a>
                                    <div class="modal fade lg-8 md-6 sm-12" id="modaldelete-{{$dr->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h4 class="modal-title">Hapus Reseller</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Ingin Menghapus Reseller Dengan Nama</h4>
                                                    <p>{{$dr->nama}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    <a href="{{ url('/admin/reseller/delete/' .$dr->id)}}">
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
    </div>
@endsection
@section('js')
   
    <script>
        $(document).ready(function() {
            $('#reseller').DataTable();
        } );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
@endsection
