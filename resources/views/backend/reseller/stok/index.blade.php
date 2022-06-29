@extends('backend.layouts.app')
@section('title','Stok Reseller')
@section('css')
<!-- Data Tables -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <div class="justify-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4>Stok</h4></div>
                        <div class="card-body">
                            <table class="table table-hover" id="stok">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Foto</th>
                                        <th>Nama Barang</th>
                                        <th>Stok Awal</th>
                                        <th>Stok Sekarang</th>
                                        <th>Harga Modal</th>
                                        <th>Harga Jual</th>
                                        <th>Terjual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stok as $s)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            {{-- ubah foto  --}}
                                            <a class="btn btn-warning" data-toggle="modal" href='#modal_foto-{{$loop->iteration}}'><i class="fas fa-images"></i></a>
                                            <div class="modal fade" id="modal_foto-{{$loop->iteration}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning">
                                                            <h4 class="modal-title">Foto barang</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <form action="{{ route('simpn_foto') }} " method="POST" role="form" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="id_stok" value="{{ $s->id }}" class="form-control">
                                                                    <label>Nama Barnag</label>
                                                                    <input type="text" name="nama_barang" value="{{ $s->barang->nama_barang }}" disabled class="form-control">
                                                                    <label for="exampleInputFile">Foto</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="hidden" value="{{ $s->foto_brg_reseller }}">
                                                                            <input type="file" name="foto" class="custom-file-input upload" id="exampleInputFile" accept="image/*">
                                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                    <small>Abaikan Jika Tidak Ingin Mengubah Foto</small>
                                                                    <div class="myTarget" style="z-index: 100;"></div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-warning">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- modal harga jual  --}}
                                            <a class="btn btn-info" data-toggle="modal" href='#modal_hrga_jual-{{$loop->iteration}}'><i class="fas fa-money-check-alt"></i></a>
                                            <div class="modal fade" id="modal_hrga_jual-{{$loop->iteration}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <h4 class="modal-title">Harga jual</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <form action="{{ route('simpn_harga') }} " method="POST" role="form" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="id_stok" value="{{ $s->id }}" class="form-control">
                                                                    <label>Nama Barnag</label>
                                                                    <input type="text" name="nama_barang" value="{{ $s->barang->nama_barang }}" disabled class="form-control">
                                                                    <label>Harga jual</label>
                                                                    <input type="number" name="harga_jual" min="0" value="{{ $s->harga_jual }}" required="required" placeholder="Masukan Nama Anda" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- modal barang terjual --}}
                                            <a class="btn btn-primary" data-toggle="modal" href='#modal_barang_terjual-{{$loop->iteration}}'><i class="fas fa-hand-holding-usd"></i></a>
                                            <div class="modal fade" id="modal_barang_terjual-{{$loop->iteration}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h4 class="modal-title">Barang terjual</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <form action="{{ route('barang_terjual') }} " method="POST" role="form" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="id" value="{{ $s->id }}" class="form-control">
                                                                    <label>Nama Barnag</label>
                                                                    <input type="text" name="nama_barang" value="{{ $s->barang->nama_barang }}" disabled class="form-control">
                                                                    <label>Sisa stok</label>
                                                                    <input type="text" name="stok_akhir" value="{{ $s->stok_akhir }}" disabled class="form-control">
                                                                    <label>Terjual</label>
                                                                    <input type="number" name="terjual" min="0" required="required" placeholder="Barang terjual hari ini" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        {{-- <td></td> --}}
                                        <td>
                                            @if($s->foto_brg_reseller) 
                                            <img src="{{url($s->foto_brg_reseller)}}" alt="Gambar" width="20px" height="30px"> 
                                            @else
                                            <img src="{{url($s->barang->foto)}}" alt="Gambar" width="20px" height="30px"> 
                                            @endif
                                        </td>
                                        <td>{{$s->barang->nama_barang}}</td>
                                        <td>{{$s->stok_awal}}</td>
                                        <td>{{$s->stok_akhir}}</td>
                                        <td>@Rupiah($s->harga_modal)</td>
                                        <td>@Rupiah($s->harga_jual)</td>
                                        <td>{{$s->stok_awal - $s->stok_akhir}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
        $(document).ready(function() {
            $('#stok').DataTable();
        } );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
@endsection

