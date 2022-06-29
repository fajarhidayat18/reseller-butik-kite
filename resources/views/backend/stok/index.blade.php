@extends('backend.layouts.app')
@section('title','Stok')
@section('header','Stok')
@section('content')
<!-- Modal Tambah -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i>Tambah</a>
            <a href ="{{route('generate')}}" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus">Tambah Banyak</i></a>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Stok</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="{{url('/admin/stok/save')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Pilih Barang</label>
                                    <select name="id_brg" id="input" class="form-control" required="required">
                                        <option value="">- pilih-</option>
                                        @foreach ($brang as $b_brng)
                                        <option value="{{ $b_brng->id_barang }}">{{ $b_brng->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Stok</label>
                                    <input type="number" class="form-control" name="jmlh_stk" placeholder="Masukan jumlah stok">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="">Harga Modal</label>
                                    <input type="text" class="form-control" name="hrg_mdl" id="formatrupiah" placeholder="Masukan harga modal">
                                    {{-- @section('format_rupiah')
                                        <div class="jadi_rupiah">
                                            <input type="text" class="form-control" name="hrg_mdl" id="formatrupiah" placeholder="Masukan harga modal">
                                        </div>
                                    @endsection --}}
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pembelian</label>
                                    <input type="date" class="form-control" name="tgl_bli" placeholder="Masukan tanggal beli">
                                </div>
                                <input type="hidden" class="form-control" name="res_id" value="{{ 0 }}">
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
                        <th>Kategori</th>
                        <th>Barang</th>
                        <th>Harga Modal</th>
                        <th>Stok Awal</th>
                        <th>Stok Akhir</th>
                        <th>Resseler</th>
                        <th>Tgl Beli</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($stok as $s)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $s->barang->kategori->kategori }} </td>
                        <td> {{ $s->barang->nama_barang }} </td>
                        <td> {{ $s->harga_modal }} </td>
                        <td> {{ $s->stok_awal }} </td>
                        <td> {{ $s->stok_akhir }} </td>
                        <td>
                            @if($s->reseller_id != '') 
                                {{ $s->reseller->nama }} 
                            @else 
                                Gudang
                            @endif
                        </td>
                        <td> {{ $s->tanggal_pembelian }} </td>
                        <td>
                            <!-- modal update -->
                            <a class="btn btn-sm btn-warning" data-toggle="modal" href='#modaledit-{{$loop->iteration}}'>Edit</a>
                            <div class="modal fade modal-md" id="modaledit-{{$loop->iteration}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('updatestok')}}" method="POST" role="form">
                                                @csrf
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="{{$s->id}}">
                                                        <label>Pilih Barang</label>
                                                        <select name="id_brg" id="input" class="form-control" required="required">
                                                            <option value="{{ $s->barang->id_barang }}">{{ $s->barang->nama_barang }}</option>
                                                            @foreach ($brang as $b_brng)
                                                            <option value="{{ $b_brng->id_barang }}">{{ $b_brng->nama_barang }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Stok Awal</label>
                                                        <input type="number" class="form-control" name="stk_awl" value="{{$s->stok_awal}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Stok Akhir</label>
                                                        <input type="number" class="form-control" name="stk_akr" value="{{$s->stok_akhir}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Harga Modal</label>
                                                        <input type="number" class="form-control" name="hrg_mdl" value="{{$s->harga_modal}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tanggal Pembelian</label>
                                                        <input type="date" class="form-control" name="tgl_bli" value="{{$s->tanggal_pembelian}}" required>
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
                            <a class="btn btn-sm btn-danger" data-toggle="modal" href='#modalhapus-{{$loop->iteration}}'>Hapus</a>
                            <div class="modal fade" id="modalhapus-{{$loop->iteration}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Apakah anda ingin menghapus data ini</h4>
                                        <h5> <i> 
                                            <p>Nama barang <strong>{{$s->barang->nama_barang}}</strong></p>
                                        </h5></i >
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                        <a href="{{url('stok/delete/'.$s->id)}}">
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
@section('js')
<script>
// var input = document.getElementById('formatrupiah');
var input1 = document.querySelector('section#format_rupiah div.jadi_rupiah #formatrupiah')
input1.addEventListener('keyup', function(e)
{
	var 	number_string = bilangan.replace(/[^,\d]/g, '').toString(),
		split	= number_string.split(','),
		sisa 	= split[0].length % 3,
		rupiah 	= split[0].substr(0, sisa),
		ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
		
	if (ribuan) {
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
	
	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
});
</script>
@endsection