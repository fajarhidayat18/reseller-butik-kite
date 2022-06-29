@extends('frontend.layouts.app')

{{-- CSS --}}
@section('header')
<title>Reseller | beli apa aja disini</title>
{{-- <link rel="stylesheet" href="{{ asset ('userpage/template/style-swiper/package/css/swiper.min.css')}}"> --}}
{{-- <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}

<style>
    /* display mobile */
    @media (max-width: 768px) {
        .container-swiper {
            margin-right: -160px;
            margin-left: -170px;
        }

        div.swiper-slide>div.card {
            width: 8rem;
        }

        .mx-auto {
            margin-left: -60px;
        }

        div.carousel-item div.col-4>img.image-slide.on-mobile#image-slide,
        .dimension-line {
            display: none;
        }

        .on-mobile {
            display: none;
        }

        .image-content-brand {
            height: 165px;
            width: 173px;
        }

        div.swiper-slide>div.card {
            width: 12rem;
        }

        .bg-content-brand {
            text-align: center;
            width: 174px;
            height: 225px;
            position: relative;
            display: flex;
            display: -ms-flexbox;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .container-swiper {
            margin-right: 50px;
            margin-left: 50px;
        }
    }

    .name-brand {
        width: 173px;
        height: 28px;
        padding-top: 10px;
    }

    .text-brand2 {
        color: aqua;
    }

    body {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    /* Swiper */
    .container-swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    /* endSwiper */

    /* Carousel */
    .carousel {
        height: 450px;
        padding-top: 0 !important;
    }

    .carousel-inner::before::after {
        box-sizing: border-box;
    }

    section.content-wrapper>.carousel>.carousel-item>caption {
        font-family: 'Noto Sans KR', sans-serif;
        margin-left: 40px;
    }

    div.carousel-item div.col-4>img.image-slide#image-slide {
        display: block;
        position: relative;
        right: 50px;
        z-index: 9;
        width: 430px;
        height: 500px;
    }

    /* endCarousel */
    .jumbotron-fluid {
        padding-top: 0;
        margin-top: 0;
        margin-bottom: 85px;
    }


    h2 {
        font-family: 'Lobster', cursive;
        font-size: 80px;
    }

    .dimension-line {
        z-index: 9;
    }

    .promo-size {
        height: 290px;
    }

    .rounded {
        border-radius: 15px !important;
    }

    section.content-wrapper.all-fonts,
    .container>h5 {
        font-weight: 900;
        font-family: 'Muli', sans-serif;
    }

    p,
    .stuff-name {
        color: black;
        font-size: 13px;
        font-weight: 600;
    }

    .banner {
        /* background: rgba(0, 0, 0, 0.5); */
    }


    .figure-img a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .figure-img:hover a {
        opacity: 1;
    }

    .reseller-img a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.8);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .reseller-img:hover a {
        transform: rotateY(360deg);
        opacity: 1;
    }

    .card-img {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
    }

    .swiper-container-slide {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide-item {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
        background-color: #000;
    }
</style>
@endsection
{{-- /.CSS --}}

@section('content')

<section class=" all-fonts" style="min-height:523px;">

    <!-- SLIDESHOW PROMO -->
    <section class="jumbotron-fluid" style="margin-bottom:120px;">
        <div id="carouselExampleControls" class="carousel slide pt-2" data-ride="carousel">
            <div class="carousel-inner">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position:absolute;">
                    <path fill="#0099ff" fill-opacity="1"
                    d="M0,288L48,288C96,288,192,288,288,282.7C384,277,480,267,576,245.3C672,224,768,192,864,202.7C960,213,1056,267,1152,272C1248,277,1344,235,1392,213.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>

            <div class="overflow-hidden carousel-item active">
                <div class="row pt-3 mx-auto">
                    <div class="col-12 my-5 text-center align-self-stretch">
                        <h2 class="my-5">Selamat Datang di Butik Kite</h2>
                        <p class="pb-5">Ayo berbelanja bersama kami dan ciptakan style mu disini :)</p>
                    </div>
                </div>
            </div>
            @foreach ($sliders as $slider)
                    <div class="overflow-hidden carousel-item">
                        <div class="row pt-3 mx-auto">
                            <div class="col-12 col-md-7 col-sm-12 my-5 text-center align-self-stretch">
                                <h2>"{{$slider->toko}}"</h2>
                                <p>{{$slider->describsi}}</p>
                                <div class="position-absolute dimension-line">
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 overflow-hidden text-center" width="29rem" style="">
                                <img src="{{$slider->foto}}"
                                class="image-slide rounded on-mobile" id="image-slide" alt="slideshow"
                                style="width:29vw; height:30rem; object-fit:cover;">
                            </div>
                        </div>
                    </div>
            @endforeach

            {{-- <div class="overflow-hidden carousel-item">
                <div class="row pt-3">
                        <div class="col-12 col-md-7 col-sm-12 my-5 text-center align-self-stretch">
                            <h2>Butik <br> "NIKE"</h2>
                            <p>ada diskon 23% ditoko kami disetiap pembelian sepatu sport</p>
                            <div class="position-absolute dimension-line">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 overflow-hidden text-center" width="29rem">
                            <img src="data:image/jpeg;base64,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"
                            class="image-slide rounded on-mobile" id="image-slide" alt="slideshow"
                                style="width:29vw; height:30rem; object-fit:cover;">
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden carousel-item">
                    <div class="row pt-3">
                        <div class="col-12 col-md-7 col-sm-12 my-5 text-center align-self-stretch">
                            <h2>Butik <br> "Aisyah Colection"</h2>
                            <p>gratis pin pada setiap pembelian hijab syar'i</p>
                            <div class="position-absolute dimension-line">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 overflow-hidden text-center">
                            <img src="data:image/jpeg;base64,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"
                            class="image-slide rounded on-mobile" id="image-slide" alt="slideshow"
                                style="width:29vw; height:30rem; object-fit:cover;">
                            </div>
                        </div>
                    </div>
                </div> --}}


            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- /.SLDESHOW PROMO -->

    <!-- new arrival -->
    <section class="container-fluid my-5 pb-3">
        <div class="container">
            <hr class="">
            <div class="row my-3 pt-3">
                <div class="col-6">
                    <h5>Barang Terbaru</h5>
                </div>
                <div class="col-6 text-right">
                    <h5><a href="{{ url('/product') }}">lainnya</a></h5>
                </div>
            </div>
        </div>
        <div class="container-swiper mx-auto">
            <!-- Swiper -->
            <div class="col-11 col-sm-6 col-md-11 swiper-container">
                <div class="swiper-wrapper">

                    @foreach ($newStuff->take(12) as $new)
                    <div class="swiper-slide" style="font-size:12px;">
                        <div class="col-12">
                            {{-- <a href="{{ route('dProduct', ['id'=>$new->Barang]) }}" method="get"> --}}
                            <div class="card">
                                <div class="card-img">
                                    <div class="figure-img m-0">
                                        <img src="{{$new->Barang->foto}}" class="h-100 w-100 product-image" alt="toko">
                                        <a href="{{ route('dProduct', ['id'=>$new->Barang]) }}"
                                            class="d-flex justify-content-center">
                                            <img class="align-self-center" src="{{asset('userpage/img/detail.png')}}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body border-top p-1 m-0">
                                    <div class="row">
                                        <div class="col-12 mx-auto" style="height:3rem;">
                                            <p class="stuff-name">{{$new->Barang->nama_barang}}</p>
                                        </div>
                                        <div class="col-12 mx-auto">
                                            <p>@Rupiah($new->harga_jual)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- /.endswiper --}}
    </section>
    <!-- /.new arrival -->

    <!-- kategori -->
    <section class="jumbotron jumbotron-fluid mx-auto px-auto position-relative"
        style="background:url({{asset('/userpage/img/diskon_body.jpg')}});background:rgba('225,225,255,0.5'); background-size:cover; ">
        <div class="display pt-5 position-relative">
            <div class="container">
                <h3 class="text-center">Kategori Spesial untuk kamu yang Spesial</h3>
                {{-- <div class="row">
                    <div class="col-md-6 px-3 pb-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark">
                            <img src="" class="card-img rounded">
                            <div class="card-img-overlay d-flex justify-content-between">
                                <h4 class="card-title" style="font-weight: 800;">Item Spesial Natal <span
                                        class="badge badge-warning badge-pill">New</span></h4>
                                <button type="button" class="btn btn-light align-self-end">
                                    Items <span class="badge badge-secondary">100+</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>
                            <a href=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 px-3 pb-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark">
                            <img src="" class="card-img rounded">
                            <div class="card-img-overlay d-flex justify-content-between">
                                <h4 class="card-title" style="font-weight: 800;">Promo Sportswear</h4>
                                <button type="button" class="btn btn-light align-self-end">
                                    Items <span class="badge badge-secondary">100+</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>
                            <a href=""></a>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <img src="{{asset('userpage/img/banner/banner_pria.png')}}" class="card-img rounded lazy">
                            <div class="card-img-overlay d-flex justify-content-between">
                                <h5 class="card-title" style="font-weight: 800;">Pakaian Pria</h5>
                                <button type="button" class="btn btn-light align-self-end">
                                    Items <span class="badge badge-secondary">100+</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>
                            <a href=""></a>
                        </div>
                    </div>

                    <div class="col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <img src="{{asset('userpage/img/banner/banner_wanita.png')}}" class="card-img rounded lazy">
                            <div class="card-img-overlay d-flex justify-content-between">
                                <h5 class="card-title" style="font-weight: 800;">Pakaian Wanita</h5>
                                <button type="button" class="btn btn-light align-self-end">
                                    Items <span class="badge badge-secondary">100+</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>
                            <a href=""></a>
                        </div>
                    </div>

                    <div class="col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <img src="{{asset('userpage/img/banner/banner_anak.png')}}" class="card-img rounded lazy">
                            <div class="card-img-overlay d-flex justify-content-between">
                                <h5 class="card-title" style="font-weight: 800;">Pakaian Anak</h5>
                                <button type="button" class="btn btn-light align-self-end">
                                    Items <span class="badge badge-secondary">100+</span>
                                    <span class="sr-only">unread messages</span>
                                </button>
                            </div>
                            <a href=""></a>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row mb-5">
                    <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark">
                            <a href="">
                                <img   src="{{asset('userpage/img/banner/banner_kemeja.png')}}" class="card-img rounded lazy">
                                <div class="card-img-overlay d-flex justify-content-between">
                                    <h5 class="card-title" style="font-weight: 800;">Kemeja</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <a href="">
                                <img   src="{{asset('userpage/img/banner/banner_gaun.png')}}" class="card-img rounded lazy">
                                <div class="card-img-overlay d-flex justify-content-between">
                                    <h5 class="card-title" style="font-weight: 800;">Gaun</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <a href="">
                                <img   src="{{asset('userpage/img/banner/banner_kaos.png')}}" class="card-img rounded lazy">
                                <div class="card-img-overlay d-flex justify-content-between">
                                    <h5 class="card-title" style="font-weight: 800;">Kaos</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark">
                            <a href="">
                                <img   src="{{asset('userpage/img/banner/banner_cepen.png')}}" class="card-img rounded lazy">
                                <div class="card-img-overlay d-flex justify-content-between">
                                    <h5 class="card-title" style="font-weight: 800;">Pakaian Pendek</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <a href="">
                                <img   src="{{asset('userpage/img/banner/banner_sepatu.png')}}" class="card-img rounded lazy">
                                <div class="card-img-overlay d-flex justify-content-between">
                                    <h5 class="card-title" style="font-weight: 800;">Sepatu</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                        <div class="card bg-dark text-dark banner">
                            <a href="">
                                <img   src="{{asset('userpage/img/banner/banner_aksessoris.png')}}"
                                    class="card-img rounded lazy">
                                <div class="card-img-overlay d-flex justify-content-between">
                                    <h5 class="card-title" style="font-weight: 800;">Aksessoris</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.kategori -->

    <!-- paling laris -->
    <section class="container-fluid my-5 pb-3">
        <div class="container">
            <hr class="">
            <div class="row my-3 pt-3">
                <div class="col-6">
                    <h5>Barang Terbaru</h5>
                </div>
                <div class="col-6 text-right">
                    <h5><a href="{{ url('/product') }}">lainnya</a></h5>
                </div>
            </div>
        </div>
        <div class="container-swiper mx-auto">
            <!-- Swiper -->
            <div class="col-11 col-sm-6 col-md-11 swiper-container">
                <div class="swiper-wrapper">

                    @foreach ($preffedStuff->take(12) as $preffed)
                    <div class="swiper-slide" style="font-size:12px;">
                        <div class="col-12">
                            {{-- <a href="{{ route('dProduct', ['id'=>$new->Barang]) }}" method="get"> --}}
                            <div class="card">
                                <div class="card-img">
                                    <div class="figure-img m-0">
                                        <img src="{{$preffed->Barang->foto}}" class="h-100 w-100 product-image"
                                            alt="toko">
                                        <a href="{{ route('dProduct', ['id'=>$preffed->Barang]) }}"
                                            class="d-flex justify-content-center">
                                            <img class="align-self-center" src="{{asset('userpage/img/detail.png')}}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body border-top p-1 m-0">
                                    <div class="row">
                                        <div class="col-12 mx-auto" style="height:3rem;">
                                            <p class="stuff-name">{{$preffed->Barang->nama_barang}}</p>
                                        </div>
                                        <div class="col-12 mx-auto">
                                            <p>@Rupiah($preffed->harga_jual)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- /.endswiper --}}
    </section>
    {{-- <section class="container-fluid my-5 pb-3">
        <div class="container">
            <hr class="">
            <div class="row my-3 pt-3">
                <div class="col-6">
                    <h5>Barang Paling Laris</h5>
                </div>
                <div class="col-6 text-right">
                    <h5><a href="{{ url('/product') }}">lainnya</a></h5>
                </div>
            </div>
        </div>
        <div class="container-swiper mx-auto">
            <!-- Swiper -->
            <div class="col-10 swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($preffedStuff->take(12) as $preffed)
                    <div class="swiper-slide" style="font-size:12px;">
                        <div class="col-12">
                            <!-- <a href="{{ route('dProduct', ['id'=>$preffed->Barang]) }}" method="get"> -->
                            <div class="card">
                                <div class="card-img">
                                    <div class="figure-img m-0">
                                        <img src="{{$preffed->Barang->foto}}" class="h-100 w-100 product-image" alt="toko">
                                        <a href="{{ route('dProduct', ['id'=>$preffed->Barang]) }}"
                                            class="d-flex justify-content-center">
                                            <img class="align-self-center" src="{{asset('userpage/img/detail.png')}}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body border-top p-1 m-0">
                                    <div class="row">
                                        <div class="col-12 mx-auto" style="height:3rem">
                                            <p class="stuff-name">{{$preffed->Barang->nama_barang}}</p>
                                        </div>
                                        <div class="col-12 mx-auto">
                                            <p>{{rupiah($preffed->harga_jual)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <-- /.endswiper -->
    </section> --}}
    <!-- /.paling laris -->

    {{-- event spesial --}}
            {{-- @if ($events == null)
                @else
                <section class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Event spesial bulan ini</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron-fuid overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset ('/')}}userpage/img/ut1.jpg" alt="promo bulanan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron-fuid overflow-hidden">
                                <img class="img-fluid w-100" src="{{$events->foto_diskon}}" alt="promo bulanan">
                            </div>
                        </div>
                    </div>
                </section>
            @endif --}}
    {{-- /.event spesial --}}

    <!-- reseller -->
    <section class="container-fluid">
        <div class="container">
            <hr class="">
            <div class="row">
                <div class="col-6">
                    <h5>Toko Terpopuler</h5>
                </div>
                <div class="col-6 text-right">
                    <h5><a href="flash-sales">lainnya</a></h5>
                </div>
            </div>
        </div>
        <div class="container-swiper mx-auto">
            <!-- Swiper -->
            <div class="col-11 col-sm-6 col-md-11 swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($reseller as $store)
                    <div class="swiper-slide">
                        <div class="col-12">
                            <div class="reseller-img m-0" style="width:150px; height:150px;">
                                <div class="card-img overflow-hidden">
                                    <img src="{{$store->foto}}" class="rounded-circle img-hover"
                                        style="width:150px;height:150px;" alt="toko">
                                    <a href="{{ route('myStore', ['id'=>$store]) }}" class="d-flex justify-content-center">
                                        <h4 class=" justify-content-center align-self-center text-white">
                                            {{$store->nama_toko}}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- /.endswiper --}}
        <hr class="pb-3">
    </section>
    <!-- /.reseller -->

</section>

@endsection
{{-- js --}}
@section('js')
{{-- <script src="{{ asset ('userpage/template/style-swiper/package/js/swiper.min.js')}}"></script> --}}
<script>
    // const pelindung = document.querySelector('section#Pmonth .button-going#btn');
    // pelindung.addEventListener('click', function() {
    //     pelindung.style.backgroundColor = 'red';
    // });

    let swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 2,
        // init: false,
        breakpoints: {
            768: {
                slidesPerView: 4,
                spaceBetween: 6,
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 5,
            },
            1200: {
                slidesPerView: 6,
                spaceBetween: 5,
            },
        }
    });
    // =
$("img.lazy").lazyload({
    effect : "fadeIn"
});
</script>
@endsection
{{-- /.js --}}
