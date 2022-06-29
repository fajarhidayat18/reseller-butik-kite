@extends('backend.layouts.app')
@section('title','Profile Reseller')
@section('css')
    
@endsection
@section('content')
    <div class="container">
        <div class="justify-content">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>Profil Reseller</h4>
                </div>
                <div class="container">
                    <div class="card-body">
                        <form action="{{url('setprofile')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Toko</label>
                                        <input type="text" value="" name="nama_toko"  required="required" placeholder="Masukan Nama Toko Anda" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="number" name="no_hp" min="0" placeholder="Masukan Nomor Hp" class="form-control" required="required" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" value="" name="nama"  required="required" placeholder="Masukan Nama Anda" class="form-control">
                                    </div>
                                </div>   
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" value="" name="name" required="required" placeholder="Masukan Username Anda" class="form-control">
                                    </div>
                                </div>    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            {{-- <option @if($reseller->jenis_kelamin == 'laki-laki') selected @endif value="laki-laki">Laki - Laki</option> --}}
                                            {{-- <option @if($reseller->jenis_kelamin == 'perempuan') selected @endif value="perempuan">Perempuan</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" required="required" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Email" class="form-control" value="">
                                    </div>  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <small class="position-absolute">Abaikan Jika Tidak Ingin Mengganti Password</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="number" name="kode_pos" min="0" class="form-control" placeholder="Kode Pos" value="">
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select name="provinsi" id="provinsi" class="form-control">
                                                <option value=""> Pilih Kota </option>
                                            {{-- @foreach ($wilayah['provinsi'] as $prov)
                                                <option value="{{$prov->id}}" {{ ( $reseller->provinsi == $prov->id) ? 'selected' : '' }}>{{$prov->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kabupaten / Kota</label>
                                        <select name="kota" id="kota" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select name="kecamatan" id="kecamatan" class="form-control">
                                                
                                        </select>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input upload" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <small>Abaikan Jika Tidak Ingin Mengubah Foto</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="myTarget"></div>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                {{-- <a href="{{ route('reseller')}}"> --}}
                                    {{-- <button type="button" class="btn btn-secondary">Kembali</button>
                                </a>
                                    <button type="submit" class="btn btn-warning">Edit</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection
