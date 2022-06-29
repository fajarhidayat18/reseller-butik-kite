@extends('backend.layouts.app')
@section('title','Ubah Barang')
@section('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="card-title">
                        Ubah Barang
                    </h3>
                </div>
                <div class="container">
                    <div class="card-body">
                        <form action="{{url('/admin/barang/edit/'.$databarang->id_barang. '/update')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Name Barang</label>
                                        <input type="text" name="nama_barang" value="{{ $databarang->nama_barang }}" required="required" placeholder="Masukan Nama Anda" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="kategori_id" id="input" class="form-control" required="required">
                                            <option value="{{ $databarang->kategori->id }}">{{$databarang->kategori->kategori}}</option>
                                            @foreach ($dataktr as $d_kategori)
                                                <option value="{{ $d_kategori->id }}">{{ $d_kategori->kategori }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="ket" value="{{ $databarang->kategori }}" cols="30" rows="7" class="form-control" placeholder="Masukan Detail Barang" required="required">{{ $databarang->ket }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="text" value="{{ $databarang->foto }}">
                                                <input type="file" name="foto" class="custom-file-input upload" id="exampleInputFile" accept="image/*">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <small>Abaikan Jika Tidak Ingin Mengubah Foto</small>
                                        <div class="myTarget" style="z-index: 100;"></div>
                                    </div>        
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('barang')}}">
                                    <button type="button" class="btn btn-secondary">Kembali</button>
                                </a>
                                    <button type="submit" class="btn btn-warning">Simpan</button>
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