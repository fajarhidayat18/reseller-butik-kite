<div class="header-color" style="box-shadow: 0 1px rgba(0,0,0,0.1)">
    <div class="container-fluid  navbar-white">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">

                    <a class="navbar-brand m-0 w-25" href="{{ url('/') }}" style="">
                        <img class="position-relative" style="width:50%;" src="{{asset ('/')}}userpage/img/butik kite.png" alt="logo">
                    </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto baris-center align-center">
                        <li class="nav-item">
                            {{-- Garis luar nya dikasih warna biru sesuai dengan slide show nya sedangkan warna dalam nya itu putih, dan teks nya hitam --}}
                            {{-- Ukuran button nya sesuai dengan form search --}}
                            <a class="nav-link menu btn-sm" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            {{-- Garis luar nya dikasih warna biru sesuai dengan slide show nya sedangkan warna dalam nya itu putih, dan teks nya hitam --}}
                            {{-- Ukuran button nya sesuai dengan form search --}}
                            <a class="nav-link menu btn-sm" href="{{ url('/product') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ url('/search') }}" method="GET"
                                class="nav-link form-inline ml-3 float-left" style="width:100%;" autocomplete="off">
                                <div class="input-group input-group-md">
                                    <input class="form-control form-control-navbar" type="text" id="autocomplete"
                                        name="nama" value="{{ request()->input('nama') }}" placeholder="Search" style="
                                            width:13vw;
                                            " aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li>
                            <div class="dropdown go-login">
                                <button id="loginUser" class="btn btn-link user" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle user"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="loginUser">
                                    @if(Auth::guard('user')->check())
                                    <a class="dropdown-item text-center px-0 h6"
                                        href="{{ url('/admin/dashboard') }}">Dashboard Admin</a>
                                    @elseif(Auth::guard('reseller')->check())
                                    <a class="dropdown-item text-center px-0 h6"
                                        href="{{ url('/reseller/dashboard') }}">Dashboard Reseller</a>
                                    @else
                                    <div class="dropdown-item text-center px-0 h6">
                                        <a class="text-body" href="{{ route('login') }}">Masuk</a> /
                                        <a class="text-body" href="{{ route('register') }}">Daftar</a>
                                    </div>
                                    <p class="text-center">klik login / register untuk masuk *reseller/admin</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
