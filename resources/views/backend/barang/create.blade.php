@extends('backend.layouts.app')
@section('title','Tambah Barang')
@section('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">
                        Tambah Barang
                    </h3>
                </div>
                <div class="container">
                    <div class="card-body">
                    <!-- <form action="{{route('storereseller')}}" method="POST" role="form" enctype="multipart/form-data"> -->
                        
                        <form action="{{route('tambah_brg')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama_barang" required="required" placeholder="Masukan Nama Barang" class="form-control" required>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Kategori</label>
                                        <input type="text" name="kategori" class="form-control" required="required">
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Jumlah Stok</label>
                                        <input type="number" name="stok" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="kategori" id="kategori" class="form-control" required="required">
                                            <option value="">- pilih-</option>
                                            @foreach ($datakategori_id as $ket_id)
                                            <option value="{{ $ket_id->id }}">{{ $ket_id->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- 
                                        <div class="form-group">
                                        <label>Sub Kategori</label>
                                        <select name="kategori_id" id="sub_kategori" class="form-control" required="required">
                                            <option value="">- pilih-</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="ket" cols="30" rows="7" class="form-control" placeholder="Masukan Detail Barang" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-5" >
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" name="harga_awal" required="required" placeholder="Masukan harga awal barang" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal beli</label>
                                        <input type="date" name="tgl_bli" required="required" placeholder="Masukan Tanggal beli" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input upload" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="myTarget" style="z-index: 100;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('barang')}}">
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
        jqDisplay.html('<img src="' + imageSrc + '" alt="uploaded " style="height:250px;width:100%;">');
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
    //cari kota kota di provinsi yang di pilih
    $( "#kategori" ).change(function() {
        var id_opsi = $(this).val();        
        // alert( cari );
        // $cari = Kategori::find($id_opsi);
        // $.('#kota').empty();
        // hapus data kota sebelumnya dari select kota
        $('#sub_kategori').find('option').remove();
        // ambil data kota yang baru dari provinsi yang di pilih
        $( "#sub_kategori" ).append( '<option value=""> Pilih Sub kategori </option>' );
        $.get("{{url('/kategori/index')}}/"+ id_opsi, function(data, status){
            // console.log(data);
            $.each(data , function( index, value ) {
                // console.log(value);
                $( "#sub_kategori" ).append( '<option value="'+value.id_opsi+'"> '+value.kategori+' </option>' );
            });
        });
    });
</script>
@endsection