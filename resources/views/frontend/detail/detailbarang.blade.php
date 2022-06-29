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
</style>
@endsection
@section('content')

<!-- Main content -->
<section class="content bg-light">

    <!-- Default box -->
    <div class="container bg-light">
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ url($dProduct->foto)}}" alt=""></div>
                            </div>
                            <!-- Add Arrows
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div> -->
                        </div>
                        <div class="swiper-container gallery-thumbs" style="height: 60px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="w-100" src="{{ url($dProduct->foto)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12 col-sm-6">
                        <h3>{{$dProduct->nama_barang}}</h3>
                        <div class="bordered">
                        </div>
                        <hr>
                        <h5 class="float-left">Harga</h5>
                        <small class="float-right">Starting at</small>
                        <br>
                        <p class="mb-0 float-right" style="color: #24446f">
                            Rp.100.000 - Rp.200.000
                        </p><br>
                        <hr>
                        <h5 class="float-left">Barang yang tersedia</h5>
                        <p class="mb-0 float-right" style="color: #24446f">
                            10 Unit
                        </p><br>
                        <hr>
                        <h5>Deskripsi Barang:</h5>
                        <p class="float-left">{{$dProduct->ket}}</p><br>
                        <hr>
                        <div class="mt-4">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6285753495541"
                                class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Order">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Order Whatsapp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection