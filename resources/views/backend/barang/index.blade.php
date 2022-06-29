@extends('backend.layouts.app')
@section('title','Barang')
@section('css')
<!-- Data Tables -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
<div class="container">
    <div class="card">
    <div class="justify-content">
        <div class="container">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <a href="{{route('createbarang')}}" class="btn btn-md btn-primary">Tambah</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body"> 
                <div class="row">
                    <div class="col-md-12">
                        <table class="table" id="barang">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($databarang as $d_brng)   
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <?php
                                        $num_char = 25;
                                        $text = $d_brng->nama_barang;
                                        $panjang_teks = strlen($text);
                                        if($panjang_teks <= $num_char){
                                            $namanya = substr($text, 0, $num_char);
                                        }else{
                                            $namanya = substr($text, 0, $num_char) . '...';
                                        }
                                        ?>
                                        <a href="{{ url('admin/barang/detail_stok/' .$d_brng->id_barang)}}">{{$namanya}}</a>
                                    </td>
                                    <td> @if(!$d_brng->kategori->id) tidak terhubung @else {{  $d_brng->kategori->kategori }} @endif </td>
                                    
                                    <td>{{ Data::stok($d_brng->id_barang) }} item</td>
                                    <td><img style="width:100px;height:50px;" src="{{ url($d_brng->foto)}}"></td>
                                    <td>
                                        <!-- modal update -->
                                        <div class="row">
                                            <a class="btn btn-sm btn-success" data-toggle="modal" href='#modaledit-{{$loop->iteration}}'><i class="fa fa-eye"></i></a>
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
                                                                <img style="width:150px;height:100px;" src="{{ url($d_brng->foto)}}"><br>
                                                                <label>Nama barang</label>
                                                                <input type="text" class="form-control" name="kategori" value="{{$d_brng->nama_barang}}" readonly>
                                                                @if(empty($d_brng->kategori->kategori))
                                                                @else
                                                                <label>Kategori</label>
                                                                <input type="text" class="form-control" name="kategori" value="{{$d_brng->kategori->kategori}}" readonly>
                                                                @endif
                                                                <label>Keterangan</label>
                                                                <textarea name="ket" cols="30" rows="7" class="form-control" readonly>{{$d_brng->ket}}</textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{url('/admin/barang/edit/'.$d_brng->id_barang)}}" class="mx-2 pr-2  btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-danger" data-toggle="modal" href='#modaldelete-{{$d_brng->id_barang}}'><i class="fas fa-trash"></i> </a>
                                            <div class="modal fade lg-8 md-6 sm-12" id="modaldelete-{{$d_brng->id_barang}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <h4 class="modal-title">Hapus Barang</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Apakah anda ingin menghapus barang?</h4>
                                                            <p>{{$d_brng->nama_barang}}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <a href="{{ url('/admin/barang/hapus/' .$d_brng->id_barang)}}">
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </a>
                                                        </div>
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
    </div>
    </div>
</div>
@endsection
@section('js')
   
    <script>
        $(document).ready(function() {
            $('#barang').DataTable();
        } );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
@endsection