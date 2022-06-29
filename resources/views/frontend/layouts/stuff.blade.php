@extends('frontend.layouts.app')
@section('title', 'Detail Barang')
@section('header')
<!-- Demo styles -->
<style>
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .swiper-container {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .gallery-top {
        height: 300px;
        width: 100%;
    }

    .gallery-thumbs {
        height: 50%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
        width: 30%;
        height: 100%;
        opacity: 0.5;
    }

    .gallery-thumbs .swiper-slide-thumb-active {
        opacity: 1;
    }

    .overflowy {
        width: auto;
        height: 150px;
        overflow-y: scroll;
    }

    .overflowx {
        width: auto;
        height: 150px;
        overflow-x: scroll;
    }
    .table-container{
        overflow: auto;
    }
    .img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
}
.gambar {
    width: 60px;
    height: 60px;
}

</style>
@endsection
@section('content')

<!-- Main content -->
<section class="content bg-light">

    <!-- Default box -->
    <div class="container">
        <div class="card card-solid">
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <!-- Swiper -->
                        <input type="hidden" name="id" value="{{$dProduct->id}}">
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper img-zoom-container">
                                <div class="swiper-slide" id="myimage"><img class="w-100" src="{{ url($dProduct->foto)}}"></div>
                                <div id="myresult" class="img-zoom-result"></div>
                                <div class="swiper-slide" id="myimage"><img class="w-100" src="{{ url($dProduct->foto)}}"></div>
                                <div id="myresult" class="img-zoom-result"></div>
                                <div class="swiper-slide" id="myimage"><img class="w-100" src="{{ url($dProduct->foto)}}"></div>
                                <div id="myresult" class="img-zoom-result"></div>
                                <div class="swiper-slide" id="myimage"><img class="w-100" src="{{ url($dProduct->foto)}}"></div>
                                <div id="myresult" class="img-zoom-result"></div>
                            </div>
                        </div>
                            {{-- Add Arrows --}}
                            <div class="swiper-button-next swiper-button-black"></div>
                            <div class="swiper-button-prev swiper-button-black"></div>

                        <div class="swiper-container gallery-thumbs" style="height: 60px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="w-100" src="{{ url($dProduct->foto)}}" alt="">
                                </div>
                                <div class="swiper-slide"><img class="w-100" src="{{ url($dProduct->foto)}}" alt="">
                                </div>
                                <div class="swiper-slide"><img class="w-100" src="{{ url($dProduct->foto)}}" alt="">
                                </div>
                                <div class="swiper-slide"><img class="w-100" src="{{ url($dProduct->foto)}}" alt="">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="img-zoom-container">
                        <img id="myimage" src="{{ url($dProduct->foto)}}" width="300" height="240">
                            <div id="myresult" class="img-zoom-result"></div>
                          </div> --}}
                    </div>
                    <hr>
                    <div class="col-12 col-sm-6 bg-light">
                        <h3>{{$dProduct->nama_barang}}</h3>
                        <div class="bordered">
                        </div>
                        <hr>
                        <h5 class="float-left">Harga</h5>
                        <h6 class="float-right">Starting at <br> {{$termurah}}-{{$termahal}}</h6>
                        <br>
                        <p class="mb-0 float-right" style="color: #24446f">

                        </p>
                        <br>
                        <hr>
                        <h5>Deskripsi Barang:</h5>
                        <p class="float-left">{{$dProduct->ket}}</p><br>
                        <hr>
                        <!-- {{-- size
                            <h4 class="mt-3">Size <small>Please select one</small></h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                    <span class="text-xl">S</span>
                                    <br>
                                    Small
                                </label>
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                    <span class="text-xl">M</span>
                                    <br>
                                    Medium
                                </label>
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                                    <span class="text-xl">L</span>
                                    <br>
                                    Large
                                </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                            <span class="text-xl">XL</span>
                            <br>
                            Xtra-Large
                        </label>
                        </div> --}} -->

                        <!-- <h5>Available color</h5>
                        <div class="container">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label class="btn btn-default text-center active">
                                            Red
                                            <br>
                                            <i class="fas fa-circle fa-2x text-red"></i>
                                        </label>
                                    </div>
                                    <div class="col-xs-1">
                                        <label class="btn btn-default text-center">
                                            Yellow
                                            <br>
                                            <i class="fas fa-circle fa-2x text-yellow"></i>
                                        </label>
                                    </div>
                                    <div class="col-xs-1">
                                        <label class="btn btn-default text-center">
                                            Green
                                            <br>
                                            <i class="fas fa-circle fa-2x text-green"></i>
                                        </label>
                                    </div>
                                    <div class="col-xs-1">
                                        <label class="btn btn-default text-center">
                                            Blue
                                            <br>
                                            <i class="fas fa-circle fa-2x text-blue"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="mt-4">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6285753495541"
                                class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Order">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Order Whatsapp
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        @foreach($Stok as $rs)
        <div class="">
        <input type="hidden" name="id" value="{{$rs->id}}">
            <table class="mb-2" border="0" width="100%" height="20%" bg-color="blue">
                <tr bgcolor="#F5F5F5">
                    <td width="5%">
                        <a href="{{url('toko/').'/'.$rs->reseller->id}}">
                            <img src="{{url($rs->reseller->foto)}}" class="Rouded gambar" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="{{url('toko/').'/'.$rs->reseller->id}}">
                            <h5 class="text-dark">{{Str::limit($rs->reseller->nama,'5','...')}}</h5>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=+62{{$rs->reseller->no_hp}}&text=Silahkan%20hubungi%20nomor%20diatas%20jika%20anda%20berminat%20membeli%20barang%20tersebut" type="button"
                            class="btn btn-sm bg-info" data-toggle="tooltip" data-placemnet="top" title="Chat">
                            <i class="fas fa-comments mr-2 fa-lg-xs-2x"></i>
                            Chat
                        </a>
                    </td>
                    <td width="20%" hieght="10px">
                        <p class="float-right align-self-end">Harga:{{$rs->harga_jual}}<br>
                        <small class="text-muted float-right">Stok:{{$rs->stok_awal}}</small>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
        <a href="" class="btn btn-primary btn-block" style="text-align: center;">See All</a>
        <!-- Product Description -->
</section>
@endsection

@section('js')
<!-- Swiper JS -->
<script src="{{ asset ('userpage/template/package/js/swiper.min.js') }}"></script>

<!-- Initialize Swiper -->
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
</script>
<script>
    // Initiate zoom effect:
    imageZoom("myimage", "myresult");
    </script>
@endsection
