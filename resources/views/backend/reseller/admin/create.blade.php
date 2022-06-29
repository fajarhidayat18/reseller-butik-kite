@extends('backend.layouts.app')
@section('title','Tambah Reseller')
@section('css')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">
                        Tambah Reseller
                    </h3>
                </div>
                <div class="container">
                    <div class="card-body">
                        <form action="{{route('storereseller')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Toko</label>
                                        <input type="text" name="nama_toko" placeholder="Masukan Nama Toko Anda" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="number" name="no_hp" min="0" placeholder="Masukan Nomor Hp" class="form-control" placeholder="Contoh = 85753495541">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" placeholder="Masukan Nama Anda" class="form-control">
                                    </div>
                                </div>   
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="name" placeholder="Masukan Username Anda" class="form-control">
                                    </div>
                                </div>    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="">-</option>
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="number" name="kode_pos" min="0" class="form-control" placeholder="Kode Pos">
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select name="provinsi" id="provinsi" class="form-control">
                                                <option value=""> Pilih Provinsi </option>
                                            @foreach ($wilayah['provinsi'] as $prov)
                                                <option value="{{$prov->id}}">{{$prov->nama}}</option>
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
                                        <textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" cols="30" rows="5" class="form-control" placeholder="Masukan Deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input profile" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile2">Foto Kronologi</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto_kronologi" class="custom-file-input apalah" id="exampleInputFile2" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile2">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="#" id="viewPertama" width="400" alt="&nbsp;">
                                    <div class="FotoProfile">Foto Profile</div>
                                </div>
                                <div class="col-md-6">
                                    <img src="#" id="viewKedua" width="400" alt="&nbsp;">
                                    <div class="FotoKronologi"><H1>Foto Kronologi</H1></div>
                                </div>                            
                            </div>
                            <div class="float-right">
                                <a href="{{ route('reseller')}}">
                                    <button type="button" class="btn btn-secondary">Kembali</button>
                                </a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
{{-- Script untuk menampilkan gambar setelah di input ke dalam data --}}
<script>
    jQuery(document).ready(function() {
        // Gambar ke 1
        function bacaGambarProfile(input) {
            if(input.files && input.files[0]) {
                var pembaca = new FileReader();
                pembaca.onload = function(e) {
                    $('#viewPertama').attr('src', e.target.result);
                }
                pembaca.readAsDataURL(input.files[0]);
            }
        }
        $('.profile').change(function() {
            bacaGambarProfile(this);
        });
        // Gambar ke 2
        function bacaGambar(input) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#viewKedua').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('.apalah').change(function() {
            bacaGambar(this);
        });
        
    });
</script>
<script src="{{asset('/')}}/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
{{-- End Script --}}
<script>
    //cari kota kota di provinsi yang di pilih
    $( "#provinsi" ).change(function() {
        var id_provinsi = $(this).val();
        // alert( id_provinsi );
        // $.('#kota').empty();
        // hapus data kota sebelumnya dari select kota
        $('#kota').find('option').remove();
        // ambil data kota yang baru dari provinsi yang di pilih
        $( "#kota" ).append( '<option value=""> Pilih Kota </option>' );
        $.get("{{url('/admin/kota_provinsi')}}/"+ id_provinsi, function(data, status){
            // console.log(data);
            $.each(data , function( index, value ) {
                // console.log(value);
                $( "#kota" ).append( '<option value="'+value.id+'"> '+value.nama+' </option>' );
            });
        });
    });
    
    // cari kecamatan dari kota yang di pilih

    $("#kota").change(function(){
        var id_kota = $(this).val();
        // console.log(id_kota);
        $('#kecamatan').find('option').remove();
        $( "#kecamatan" ).append( '<option value=""> Pilih Kecamatan </option>' );

        $.get("{{url ('/admin/kecamatan_kota')}}/"+ id_kota, function (data,status){
            // console.log(data);
            $.each(data, function(index, value){
                // console.log(value);
                $("#kecamatan").append( '<option value="'+value.id+'"> '+value.nama+' </option>' )
            });
        });
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