<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('/')}}/template/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Butik Kite</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(Auth::guard('reseller')->check())
          <img src="{{ url(Auth::guard('reseller')->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{asset('/')}}/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::guard('user')->check())
            <li class="nav-header">DASHBOARD</li>
            <li class="nav-item">
              <a href="{{ route ('dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-header">BARANG</li>
            <li class="nav-item">
              <a href="{{route('barang')}}" class="nav-link">
                <i class="fas fa-shopping-basket nav-icon"></i>
                <p>Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/stok')}}" class="nav-link">
                <i class="fas fa-cubes nav-icon" style="font-size:130%"></i>
                <p>Stok</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('admin/kategori')}}" class="nav-link">
                <i class="nav-icon fab fa-buromobelexperte"></i>
                <p>
                  Kategori
                </p>
              </a>
            </li>
            <li class="nav-header">TOKO</li>
            <li class="nav-item">
              <a href="{{url('admin/barang_terjual')}}" class="nav-link">
                <i class="fas fa-hand-holding-usd nav-icon"></i>
                <p>Barang Terjual</p>
              </a>
            </li>

            <li class="nav-header">RESELLER</li>
            <li class="nav-item">
              <a href="{{ route('reseller')}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Daftar Reseller</p>
              </a>
            </li>
            <li class="nav-header">WILAYAH</li>
            <li class="nav-item">
              <a href="{{ route('wilayah')}}" class="nav-link">
                <i class="nav-icon fas fa-globe"></i>
                <p>Daftar Wilayah</p>
              </a>
            </li>
            <li class="nav-header">TAMPILAN DEPAN</li>
            <li class="nav-item">
              <a href="{{route('slider')}}" class="nav-link">
                <i class="nav-icon far fa-images"></i>
                <p>Slider</p>
              </a>
            </li>
          @elseif(Auth::guard('reseller')->check())
            <li class="nav-item">
              <a href="{{ route ('dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-header">Toko</li>
            <li class="nav-item">
              <a href="{{route('stokreseller')}}" class="nav-link">
                <i class="nav-icon fas fa-cubes"></i>
                <p>Stok Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('etalase')}}" class="nav-link">
                <i class="nav-icon fas fa-window-restore"></i>
                <p>Etalase</p>
              </a>
            </li>
            <li class="nav-header">Akun</li>
            <li class="nav-item">
              <a href="{{route('setprofile')}}" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>Ubah Profil</p>
              </a>
            </li>
          @endif
          <li class="nav-header">Logout</li>
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
