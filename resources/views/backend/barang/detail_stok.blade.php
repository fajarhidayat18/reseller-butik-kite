@extends('backend.layouts.app')
@section('title','Barang')

@section('content')
<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Detail Barang</label>
                        </div>
                        <div class="col-md-12">
                            <img style="width:335px;height:335px;" src="{{ url($detail_b->foto)}}"><hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <Label>
                                Kategori <br>
                                Nama Barang <br>
                                Harga Modal <br>
                                Stok <br>
                            </Label>
                        </div>
                        <div class="col-md-8">
                            @if(empty($detail_b->Kategori->id))
                                kosong <br>
                            @else 
                                {{ $detail_b->Kategori->kategori }}<br>
                                {{-- {{ $detail_b->kategori->main_kategori }}<br> --}}
                            @endif
                            {{ $detail_b->nama_barang }}<br>
                            @if(empty($detail_s[0]->harga_modal))
                                kosong <br>
                            @else 
                                {{ rupiah($detail_s[0]->harga_modal) }}<br>
                            @endif
                            @if( Data::stok($detail_b->id_barang) )
                                {{ Data::stok($detail_b->id_barang) }}<br>
                            @else 
                                kosong <br>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="">List Stok</label>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Stok Awal</th>
                                <th>Stok Akhir</th>
                                <th>Harga Modal</th>
                                <th>Harga Jual</th>
                                <th>Lokasi Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_s as $dts)
                            <tr>
                                @if ($dts)
                                <td> {{ $dts->tanggal_pembelian }} </td>
                                <td> {{ $dts->stok_awal }} </td>
                                <td> {{ $dts->stok_akhir }} </td>
                                <td> {{ rupiah($dts->harga_modal) }} </td>
                                <td> {{ rupiah($dts->harga_jual) }} </td>
                                <td>
                                    @if($dts->reseller) 
                                        {{ $dts->reseller->nama }} 
                                    @else 
                                        Gudang
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info" data-toggle="modal" href='#modalhapus-{{ $loop->iteration }}'> <i> Kirim </i></a>
                                    <div class="modal fade" id="modalhapus-{{ $loop->iteration }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                    <h4 class="modal-title">Kirim ke Reseller</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <form action="{{url('admin/barang/sent_reseller')}}" method="POST" role="form" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                    @csrf
                                                        <section id="model_rupiah">
                                                        <div class="form-group">
                                                            <label for="">Nama Reseller</label>
                                                            <select name="res_id" class="form-control" required="required">
                                                                <option value="">- pilih-</option>
                                                                @foreach ($detail_rs as $d_res)
                                                                <option value="{{ $d_res->id }}">{{ $d_res->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                            <label for="">Nama Barang</label>
                                                            <input type="text" class="form-control" value=" {{ $detail_b->nama_barang }} " disabled >
                                                            <input type="hidden" class="form-control" name="id_brg" value=" {{ $detail_b->id_barang }} " >
                                                            <label for="">Harga</label>
                                                            <input type="number" class="form-control" name="hrg_ke_resll" >
                                                            <label for="">Jumlah Item</label>
                                                            <input type="hidden" class="form-control" name="stk_awl" value="{{ $dts->stok_akhir }}" >
                                                            <input type="number" class="form-control" name="jumlah_item">
                                                            <label for="">Tanggal</label>
                                                            <input type="date" class="form-control" name="tgl_bli">
                                                            @if(empty($dts->reseller))
                                                                <input type="hidden" name="id_gudang" value="{{ $dts->id }} ">
                                                                <input type="hidden" name="stk_di_gudang" value="{{ $dts->stok_akhir }} ">
                                                            @else
                                                                <input type="hidden" name="id_gudang" value="{{ $dts->id }} ">
                                                            @endif
                                                            {{-- input id toko  --}}
                                                            <input type="hidden" name="id_kategori_nya" value="{{ $detail_b->Kategori->id }} ">
                                                            {{-- <input type="hidden" name="id_toko_nya" value="{{ $id_tokonya }} "> --}}
                                                        </div>
                                                        </section>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </td>
                                @else
                                <td>
                                    {{ kosong }}
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $detail_s->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @section('js')
<script type="text/javascript">
	var rupiah1 = document.getElementById('format_rupiah');
    // var rupiah1 = document.querySelector('section#model_rupiah input #format_rupiah');
		rupiah1.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		rupiah1.value = formatRupiah(this.value, 'Rp. ');
	});
	/* Fungsi formatRupiah */
	function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
	// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
            separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
        }
 
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
@endsection --}}
