@extends('backend.layouts.app')
@section('title','Update Reseller')
@section('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="card-title">
                        Ubah Reseller
                    </h3>
                </div>
                <div class="container">
                    <div class="card-body">
                        <form action="" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" required="required" placeholder="Masukan Nama Anda" class="form-control" value="{{$reseller->nama}}">
                                    </div>
                                </div>    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" value="{{$reseller->tgl_lahir}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" cols="30" rows="15" class="form-control" placeholder="Masukan Alamat" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="number" name="no_hp" min="0" placeholder="Masukan Nomor Hp" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input upload" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="myTarget"></div>
                                    </div>
                                </div>
                            </div>  
                            <div class="float-right">
                                <a href="{{ route('reseller')}}">
                                    <button type="button" class="btn btn-secondary">Kembali</button>
                                </a>
                                    <button type="submit" class="btn btn-warning">Ubah</button>
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
@endsection