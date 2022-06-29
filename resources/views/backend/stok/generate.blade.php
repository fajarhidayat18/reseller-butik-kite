@extends('backend.layouts.app')
@section('title','Stok')
@section('header','Stok')
@section('content')
<!-- Modal Tambah -->
<div class="container">
    <h4>
        <small>Tambah Stok</small>
        <div class="float-right">
            <a href ="{{route('stok')}}" class="btn btn-warning btn-md"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="{{route('createstok')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="count_add">Banyak Record yang akan Ditambahkan</label>
                    <input type="number" name="count_add" id="count_add" maxlength="2" pattern="[0-9]+" class="form-control" placeholder="Isikan dengan angka" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="generate" value="Generate" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection