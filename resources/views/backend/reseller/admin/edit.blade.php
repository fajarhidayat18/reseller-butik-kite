@extends('backend.layouts.app')
@section('title','Edit Reseller')
@section('css')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="card-title">
                        Edit Reseller
                    </h3>
                </div>
                <div class="container">
                    <div class="card-body">
                        <form action="{{url('/admin/reseller/edit/'.$reseller->id. '/update')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Toko</label>
                                        <input type="text" value="{{$reseller->nama_toko}}" name="nama_toko"  required="required" placeholder="Masukan Nama Toko Anda" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" value="{{$reseller->nama}}" name="nama"  required="required" placeholder="Masukan Nama Anda" class="form-control">
                                    </div>
                                </div>   
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" value="{{$reseller->name}}" name="name" required="required" placeholder="Masukan Username Anda" class="form-control">
                                    </div>
                                </div>    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            
                                            <option @if($reseller->jenis_kelamin == 'laki-laki') selected @endif value="laki-laki">Laki - Laki</option>
                                            <option @if($reseller->jenis_kelamin == 'perempuan') selected @endif value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" required="required" value="{{$reseller->tgl_lahir}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Email" class="form-control" value="{{$reseller->email}}">
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
                                        <input type="number" name="kode_pos" min="0" class="form-control" placeholder="Kode Pos" value="{{$reseller->kode_pos}}">
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select name="provinsi" id="provinsi" class="form-control">
                                                <option value=""> Pilih Kota </option>
                                            @foreach ($wilayah['provinsi'] as $prov)
                                                <option value="{{$prov->id}}" {{ ( $reseller->provinsi == $prov->id) ? 'selected' : '' }}>{{$prov->nama}}</option>
                                            @endforeach
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
                                        <textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat" required="required">{{$reseller->alamat}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" cols="30" rows="5" class="form-control">{{$reseller->deskripsi}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="number" name="no_hp" min="0" placeholder="Masukan Nomor Hp" class="form-control" required="required" value="{{$reseller->no_hp}}">
                                    </div>
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
                                <a href="{{ route('reseller')}}">
                                    <button type="button" class="btn btn-secondary">Kembali</button>
                                </a>
                                    <button type="submit" class="btn btn-warning">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){

    $('input.upload').on('change', addFile);

    });

    function addFile (event) {

    var jqDisplay = $('div.myTarget');
    var reader = new FileReader();
    var selectedFile = event.target.files[0];

    reader.onload = function (event) {
        var imageSrc = event.target.result;
        jqDisplay.html('<img src="' + imageSrc + '" alt="uploaded " style="height:160px;width:100%;">');
    };
    reader.readAsDataURL(selectedFile); 
    }
</script>
<script src="{{asset('/')}}/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>

<script>
    kota_provinsi();
    // filter kota dari provinsi
    $("#provinsi").change(function(){
       kota_provinsi();
    });

    function kota_provinsi() {
        var id_provinsi = $('#provinsi').val();
        // alert(id_provinsi);
        $('#kota').find('option').remove();
        $("#kota").append('<option value="">Pilih Kota</option');
        $.get("{{ url('/admin/kota_provinsi')}}/" + id_provinsi , function(data , value){
            $.each(data , function(index , value){
                $("#kota").append('<option value="'+value.id+'"> '+value.nama+' </option>')
            });
        $('#kota').val({{$reseller->kota}});
        kecamatan_kota();
        });
    }

    // filter kecamatan dari Kota
    function kecamatan_kota() {
        var id_kota = $('#kota').val();
        $('#kecamatan').find('option').remove();
        $("#kecamatan").append('<option value=""> Pilih Kecamatan</option>');


        $.get("{{url ('/admin/kecamatan_kota')}}/" + id_kota , function (data,status){
            $.each(data,function(index, value){
                $("#kecamatan").append('<option value="'+value.id+'">'+value.nama+'</option>')
            });

            $('#kecamatan').val({{$reseller->kecamatan}});
        });
    }
    $("#kota").change(function(){
        kecamatan_kota();
    });
</script>    
{{-- CK Editor --}}
<script>
    CKEDITOR.replace( 'deskripsi');
</script>
<script>
    CKEDITOR.replace('alamat');
</script>
@endsection