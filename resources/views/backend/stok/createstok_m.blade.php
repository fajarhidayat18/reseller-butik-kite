@extends('backend.layouts.app')
@section('title','Stok')
@section('header','Stok')
@section('content')
<!-- Modal Tambah -->
<div class="container">
    <h4>
        <small>Tambah Data Stok</small>
        <div class="float-right">
            <a href ="{{route('stok')}}" class="btn btn-warning btn-sm">Kembali</a>
            <a href ="{{route('generate')}}" class="btn btn-info btn-sm">Tambah Data Lagi</a>
            <br>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <form action="{{route('save_createstok_m')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Barang</th>
                        <th>Harga Modal</th>
                        <th>Stok Awal</th>
                        <th>Tgl Beli</th>
                    </tr>
                    <?php
                    for($i=1; $i <=$_POST['count_add']; $i++){ ?>
                        <tr>
                            <td><?=$i ?></td>
                            <td>
                                <select name="brg-<?=$i?>" id="input" class="form-control" required="required">
                                    <option value="">- pilih-</option>
                                    @foreach ($brang as $b_brng)
                                    <option value="{{ $b_brng->id_barang }}">{{ $b_brng->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="hrg_m-<?=$i?>" class="form-control" required>
                            </td>
                            <td>
                                <input type="number" name="stok_awl-<?=$i?>" class="form-control" required>
                            </td>
                            {{-- karena harus isi semua data  --}}
                            <input type="hidden" name="stk_akr-<?=$i?>" value="0">
                            <input type="hidden" name="res_id-<?=$i?>" value="13">
                            <td>
                                <input type="date" name="tgl_bli-<?=$i?>" class="form-control" required>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection