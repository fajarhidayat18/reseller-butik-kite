<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('/')}}/userpage/img/butik-kite.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    {{-- swiper --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <link type="text/css" rel="stylesheet" href="magiczoomplus/magiczoomplus.css"/> --}}
    {{-- <script type="text/javascript" src="magiczoomplus/magiczoomplus.js"></script> --}}
    {{-- <link rel="icon" type="image/png" href="{{ asset('userpage/img/icon.ico') }}"> --}}
    <title>@yield('title') </title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('userpage/css/gaya.css') }}">
    {{-- responsive page --}}
    <link rel="stylesheet" href="{{ asset('userpage/css/responsive_mobile.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lemonada:500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">

    <style>
        @media (max-width: 992px) {

            div.dropdown.go-login {
                display: none;
            }

            .navbar-light .navbar-nav .nav-link.menu {
                color: rgba(0, 0, 0, 1);
                padding-left: 70px;
                border-radius: 10px;
            }

            div.wrapper {
                margin-top: 0px;
            }
        }

        /* display desktop */
        @media (min-width: 992px) {
            div.header-color {
                position: fixed;
                z-index: 10;
                width: 100%;
            }

            div.wrapper {
                padding-top: 95px;
                background-color: #f9f9f9;
            }

            div.navbar-light .navbar-nav .nav-link.menu {
                border-radius: 10px;
            }

            .navbar-light .navbar-nav .nav-link.menu {
                color: #fcfafa;
                background: #07279c;
                text-transform: uppercase;
                border-radius: 10px;
            }
            .baris-center{
            -ms-flex-item-align: center !important;
            align-self: center !important;
            }
.align-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}
        }

        .take-drop-produk {
            transition: 0.5s;
        }

        .take-drop-produk:hover {
            transform: scale(1.1);
        }

        div.take-image-drop-produk {
            transition: 1;
            opacity: 0;
            visibility: hidden;

        }

        div.take-image-drop-produk:hover {
            opacity: 1;
            visibility: visible;
        }

        img.product-image {
            height: 166px;
            width: 100%;
        }

        .nav-item {
            margin-right: 15px;
            font-weight: 700;
            font-size: 20px;
            color: yellowgreen;
        }

        .navbar {
            font-family: 'Muli', sans-serif;
        }

        button.user>i.user {
            font-size: 33px;
            color: #07279c;
        }

        div.dropdown-menu {
            transform: translateX(-50px) translateY(10px) scale(1.3);
        }

        .dropdown-menu p.text-center {
            font-size: 6px;
            margin-bottom: 0;
        }

        .main-footer {
            background-color: #f0d78c;
        }

        .tengah {
            position: fixed;
            background-color: white;
            width: 100%;
            height: 100%;
            text-align: center;
            margin: 0;
            z-index: 9999999;
            overflow: hidden;
        }

        .tengah img {
            width: 100px;
            height: 100px;
            transition: width height 1s;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* border-radius: 500px; */
            opacity: .8;

        }
        div.wrapper#wrapper{
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 500;
        }
    </style>
    @yield('header')

</head>

<body class="hold-transition layout-top-nav">
    <div class="tengah">
        <img class="w-25" src="{{asset ('userpage/img/butik kite.png')}}" alt="">
    </div>

    {{-- <div class="loadingscreen">
        <h2>sabar lh!</h2>
    </div> --}}
    <!-- Navbar -->
    <header class="header w-100">
        @include('frontend.layouts.navbar')
    </header>
    <!-- /.navbar -->

    <div class="wrapper" id="wrapper">

        <!-- Content Wrapper. Contains page content -->
        {{-- <div class="content-wrapper"> --}}
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        {{-- <div class="container"> --}}
        @yield('content')
        {{-- </div><!-- /.container-fluid --> --}}
        <!-- /.content -->
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        {{-- masih dalam konsep pemikiran --}}
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer m-0">
            @include('frontend.layouts.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('/') }}template/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    @yield('js')
    <script>

        $(window).on('load', function() {
            setTimeout(function() {
                $('.tengah').fadeOut('slow');
                $('body').css({
                    overflow: 'scroll',
                });
            });
        });
    </script>
</body>

</html>
