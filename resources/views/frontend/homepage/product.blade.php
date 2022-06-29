@extends('frontend.layouts.app')

{{-- header --}}
@section('header')
<title>Produk Butik Kite</title>
<style>
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 600px;
        height: 350px;
    }

    @media (max-width:650px) {
        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 200px;
        }
    }

    .text-center .text-not-found {
        display: absolute;
        z-index: 5;
        top: 100px;
    }
</style>
@endsection
{{-- /.header --}}
{{-- content --}}
@section('content')

{{-- <div class="swiper-container-slide">
    <div class="swiper-wrapper">
      <div class="swiper-slide-item"></div>
      <div class="swiper-slide-item"></div>
      <div class="swiper-slide-item"></div>
      <div class="swiper-slide-item"></div>
      <div class="swiper-slide-item"></div>
      <div class="swiper-slide-item"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> --}}

{{-- <div class="container-fluid">
  <!-- Swiper -->
  <div class="swiper-container3">
      <div class="swiper-wrapper">
        @foreach ($promos as $promo)
          <a href="#" class="swiper-slide" style="background-image:url({{$promo->foto}})">
<img src="{{$promo->foto}}">
</a>
@endforeach
</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>
</div>
</div> --}}

<div class="container listProduct">
    {{-- DAFTAR BARANG" --}}
    <section class="content">
        <!-- card barang -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        @if($product->count() == 0)

                        <div class="text-center p-5 m-5">
                            <div class="text-not-found">
                                <div class="h3">
                                    Tidak Ada Hasil Pencarian
                                </div>
                                <div class="h6">
                                    Maaf. Kami tidak menemukan hasil yang sesuai untuk kata yang Anda cari.
                                </div>
                                <div class="h2">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="img-not-found">
                                <img class="w-100" src="{{asset('userpage/img/not-found.png')}}" alt="" srcset="">
                            </div>
                        </div>

                        @else

                        <p class="h5 text-center py-2 mt-2">
                            terdapat {{$product->count()}} item dari hasil pencarian {{ request()->input('nama') }}
                        </p>

                        @endif
                        <div class="row">

                            {{-- DAFTAR BARANG" --}}
                            <section class="content">
                                <!-- card barang -->
                                <div class="container-fluid">
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($product as $vB)
                                            <a href="{{ route('dProduct', ['id'=>$vB->Barang]) }}">
                                                <div class="col-6 col-md-3 col-lg-2 p-2 d-flex align-items-stretch">
                                                    <div class="bg-content-produk">
                                                        <div
                                                            class="d-flex position-relative overflow-hidden d-flex align-items-stretch">
                                                            <img src="{{$vB->foto}}"
                                                                class="image-content-produk take-image-drop-produk w-100"
                                                                alt="produk" loading="lazy">
                                                        </div>
                                                        <div class="px-1 py-2">
                                                            <div class="mb-1 align-self-stretch" style="height:3rem;">
                                                                <a href="#" class="" target="_blank">
                                                                    <span>{{$vB->nama_barang}}</span>
                                                                </a>
                                                            </div>
                                                            <div class="d-flex align-items-stretch">
                                                                <div class="text-truncate align-self-stretch">
                                                                    @Rupiah($vB->harga_jual)
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 d-flex align-items-stretch">
                                                                <i class="fas fa-boxes align-self-center mr-1"></i>
                                                                <span class="align-self-stretch">
                                                                    {{$vB->Reseller->nama}}
                                                                    {{-- @if($vB->reseller->first())
                                                                @else
                                                                Admin
                                                                @endif --}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card barang -->
                                {{-- pagination --}}
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            {{ $product->links() }}
                                        </li>
                                    </ul>
                                </nav>
                                {{-- /.pagination --}}
                            </section>
                            {{-- /.DAFTAR BARANG" --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card barang -->
        {{-- pagination --}}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"></li>
            </ul>
        </nav>
        {{-- /.pagination --}}
    </section>
    {{-- /.DAFTAR BARANG" --}}
</div>
@endsection
{{-- /.content --}}

{{-- file js --}}
@section('js')
<script src="../package/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    let swi = new Swiper('.swiper-container3', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: 'true',
        coverflowEffect: {
            rotate: 0,
            stretch: -100,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        autoplay: {
            delay: 3000,
            stopOnSlide: false,
            disableOnInteraction: false,
            reverseDisable: false,
            waitForTransition: false
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    Toast.fire({
        type: 'info',
        title: 'H1'
    })
</script>
@endsection
{{-- /.file js --}}
