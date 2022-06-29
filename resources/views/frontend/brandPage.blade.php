@extends('frontend.layouts.app')
@section('header')
    <link rel="stylesheet" href="{{url('userpage/css/contoh.css')}}">
@endsection
<style>

@media (min-width: 1200px) {
    .t1op{
        margin-top: 10px;
    }

    .btun1{
        top: 35px;
        left: 50px;
        position: relative ;
        padding-left: 100px;
        padding-right: 100px;
    }



}

.jumbotron .display-4 {
    color: white;
    font-weight: 100;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
}

.jumbotron .display-4 span {
    font-weight: 500;
}

.jumbotron .peping{
    color: white;
    font-size: 20px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
}

.cardis {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
}


.animas{
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    border: 2px solid #111;
    text-transform: uppercase;
    color: #111;
    text-decoration: none;
    font-weight: 600;
    font-size: 20px;

}

.padding-lebar{
    color: white !important;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
}

.jumbotron{
    text-align: center;
    background-color: black;
    background-size : cover; position:absolude; background-attachment:fixed;
    /* background-image: url({{ asset ('userpage/img/reseller/jumbotron.jpg') }} ); */
}

 

</style>
<?php
function rupiah($angka){
	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
?>
@section('content')
    <!--   -->
    <section class="content-wrapper" style="min-height:523px;">
    <input type="hidden" name="id" value="{{$myStore->id}}">
    <div class="jumbotron" style="border-bottom-width: 1px;">
        <div class="container">
            <h1 class="display-4">{{$myStore->nama}}</h1>
            <p class="peping">Dapatkan Produk Terbaik & Berkualitas!<br> Hanya di sini Anda bisa mendapatkan produk-produk terbaik</br></p>
            <p class="lead">
                <a class="btn btn-primary animas" href="https://api.whatsapp.com/send?phone=6282251019902" role="button"><i class="far fa-comments"><span> Chat</span></i></a>
            </p>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 t1op">
                <div class="... ">
                    <ul class="list-group list-group-flush">
                        <li class="padding-lebar fas fa-shopping-bag "> Produk : 93 </li>
                        <li class="padding-lebar fas fa-truck "> Waktu Pengemasan : (1-2) Hari</li>
                        <li class="padding-lebar fas fa-map-marked-alt "> Lokasi : {{$myStore->alamat}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 t1op">
                <div class="...">
                    <ul class="list-group list-group-flush">
                        <li class="padding-lebar fas fa-box-open "> Produk Terjual : 15</li>
                        <li class="padding-lebar far fa-star "><b> Penilaian: 4.7 (12.9RB Penilaian)</b></li>
                    </ul>
                    <div class="padding lebar">
                        <a href="#" class="padding-spon fab fa-facebook-square" style="font-size: 30px;"></a>
                        <a href="#" class="padding-spon fab fa-instagram" style="font-size: 30px;"></a>
                        <a href="#" class="padding-spon fab fa-twitter-square" style="font-size: 30px;"></a>
                        <a href="https://api.whatsapp.com/send?phone=6285753495541" class="padding-spon fab fa-whatsapp-square" style="font-size: 30px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <!-- Nav tabs -->
        <div class="bg-white" style="border-bottom: 1px;">
            <ul class="nav nav-pills container" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Terpopuler</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a> -->
                </li>
            </ul>
        </div>

<!-- Tab panes -->

    <!-- Profile -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card mt-3 margin-slider">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                            <div style="font-family: sans-serif; color:  #ee4d2d; font-size: 15px; padding-left: 28px; padding-top: 10px;">
                                <b> TENTANG TOKOH</b></div>
                            <div id="carouselExampleInterval" class="carousel slide padding-slider" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="10000">
                                        <img src="{{ asset ('userpage/img/reseller/Buku.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset ('userpage/img/reseller/buku1.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset ('userpage/img/reseller/2.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 kelurusan">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #ee4d2d;"> One Shop Store</h5>
                                <p class="card-text">Selamat datang di One Shop Official Store, Toko kami berkomitmen untuk selalu
                                    berinovasi dan terus merancang peralatan dan audio yang innovative</p>
                                <p class="card-text">- Kami menjual produk dengan kualitas yang Bagus</p>
                                <p>- Kami Selalu Siap Menerima Kritik dan Saran kalian</p>
                                <p>- Untuk berbelanja kalian juga bisa menggunakan Voucher toko kami</p>
                                <p>- Jika Puas Silahkan Memberikan kami 5 Bintang</p>
                                <p> Selamat Berbelanja , Terima Kasih</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-section">
                    <div class="container">
                        <div class="row justify-content-center mb-5">
                            <div class="col-md-7 text-center">
                                <div class="site-section-title">
                                    <h2>Produk Baru</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($data_stok ->take(3) as $ini)
                            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                                <a href="#"><img src="{{url($ini->Barang->foto)}}" alt="Image" class="img-fluid"></a>
                                <div class="p-4 bg-white">
                                    <h2 class="h5 text-black mt-3 mb-0"><a href="#">{{$ini->Barang->nama_barang}}</a></h2>
                                    <span class="d-block text-secondary small text-uppercase" style="font-size: 18px;">Rp. 80.000</span>
                                    <a href="https://api.whatsapp.com/send?phone=6285753495541"><button type="button" class="btn btn-outline-info">Beli Produk</button></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="..." style="background-color: white; ">
                    <div class="container">
                        <div class="row mb-5 justify-content-center" >
                            <div class="col-md-7">
                                <div class="site-section-title text-center">
                                    <h2>Reseller</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                            <input type="hidden" name="id" value="{{$myStore->id}}">
                            <img src="{{url($myStore->foto)}}"  style="width:300px; height:300px:" alt="Image" class="img-fluid rounded mb-4">
                            </div>
                            <div class=col-md-6>
                                <div class="text">
                                    <h2 class="mb-2 font-weight-light text-black h4">{{$myStore->nama}}</h2>
                                </div>
                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                                <p>{{$myStore->deskripsi}}</p>
                                <p>
                                    <a href="#" class="text-black p-2"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="text-black p-2"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="text-black p-2"><span class="fab fa-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-section mt-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <div class="site-section-title">
                                    <h2><b>MENGAPA MEMILIH KAMI?</b></h2>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service text-center">
                                <img src="{{ asset ('userpage/img/reseller/product.svg') }}" class="mt-2"  style="width: 80px;">
                                    <h2 class="mt-3 service-heading">Pengamasan Terjamin </h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service text-center">
                                <img src="{{ asset ('userpage/img/reseller/sold.svg') }}" class="mt-2"  style="width: 80px;">
                                    <h2 class="mt-3 service-heading">Barang Aman</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="service text-center">
                                <img src="{{ asset ('userpage/img/reseller/discount.svg') }}" class="mt-2"  style="width: 80px;">
                                    <h2 class="mt-3 service-heading">Produk Berkualitas</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Produk -->
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-2 ml-4 col-xs-1">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="font-size: 17px;">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Semua Produk</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Aksesoris</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Jaket</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Elektronik</a>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-1">
                        <div class="tab-content" id="v-pills-tabContent">
                           <form class="mt-1 form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <section class="content">
                                    <!-- card barang -->
                                        <div class="container-fluid">
                                            <div class="container">
                                                <h6 class="ml-n6 mt-3">Produk & Alat-alat</h6>
                                                <div class="row">
                                                @foreach ($data_stok as $vb)
                                                    <div class="col-md-2 mr-2 col-6 pb-3 pt-1 take-drop-produk">
                                                        <div class="bg-content-produk">
                                                            <div class="d-flex position-relative">
                                                                <img src="{{url($vb->Barang->foto)}}" class="image-content-produk take-image-drop-produk" alt="produk">
                                                            </div>
                                                            <div class="px-1 py-2">
                                                                <div class="mb-1">
                                                                    <a href="#" class="" target="_blank">
                                                                        <span>{{$vb->Barang->nama_barang}}</span>
                                                                    </a>
                                                                </div> 
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-block text-truncate">
<<<<<<< HEAD
=======
                                                                        {{-- <!-- {{rupiah($vb->Brgterjual->harga_terjual)}} --> --}}
                                                                        {{rupiah($vb->Brgterjual->harga_terjual)}}
>>>>>>> origin/master
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 d-flex">
                                                                    <i class="fas fa-boxes align-self-center mr-1"></i>
                                                                    <span class="align-self-center">Stok :{{$vb->stok_akhir}}</span>
                                                                    <!-- <span class="align-self-center">Terjual : 1 produk</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                Friend zone
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">.t..</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">..assaddas.</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">..asdasd.</div>
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">..asdsa.</div>
        </div>

    <!--  -->


    <!--  -->


    <!--  -->
    <!-- DAFTAR BARANG" -->
        <!-- <section class="content"> -->
                <!-- card barang -->
                <!-- <div class="container-fluid">
                    <div class="container">
                        <h6 class="ml-n6 mt-3">Produk & Alat-alat</h6>
                        <div class="row">
                        @foreach ($viewStuff as $vb)
                            <div class="col-lg-2 col-6 pb-3 pt-1 take-drop-produk">
                                <div class="bg-content-produk">
                                    <div class="d-flex position-relative">
                                        <img src="{{$vb -> foto}}" class="image-content-produk take-image-drop-produk" alt="produk">
                                    </div>
                                    <div class="px-1 py-2">
                                        <div class="mb-1">
                                            <a href="#" class="" target="_blank">
                                                <span>{{$vb -> nama_barang}}</span>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="d-block text-truncate">
                                                Rp 80.000
                                            </div>
                                        </div>
                                        <div class="mt-1 d-flex">
                                            <i class="fas fa-boxes align-self-center mr-1"></i>
                                            <span class="align-self-center">Terjual : 1 produk</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </section> -->
    <!-- /.DAFTAR BARANG" -->

    </section>





@endsection
@section('js')
<script>


</script>
@endsection
