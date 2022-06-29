<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register Reseller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/')}}/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('/')}}/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/')}}/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    @media (max-width:750px) {
      img.w-75 {
        display: none;
      }
    }

    .box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      padding: 40px;
      background-color: #07279c;
      box-sizing: border-box;
      border-radius: 10px;
    }

    .box h2 {
      margin: 0 0 30px;
      padding: 0;
      color: white;
      text-align: center;
    }

    .box .input {
      position: relative;

    }

    .box .input input {
      width: 100%;
      padding: 6px 0;
      font-size: 16px;
      color: white;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #ffffff;
      outline: none;
      background: transparent;
    }

    .box .input label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 6px 0;
      font-size: 16px;
      color: white;
      pointer-events: none;
      transition: 0.5s;
    }

    .box .input input:focus~label,
    .box .input input:valid~label {
      top: -23px;
      left: 0;
      color: white;
      font-size: 14px;
    }

    .remember {
      top: 10px;
      transform: translateY(20px);
    }

    .login-page {
      -ms-flex-align: center;
      align-items: center;
      background: white;
      display: -ms-flexbox;
      display: flex;
      height: 100vh;
      -ms-flex-pack: center;
      justify-content: center;
    }
  </style>

</head>

<body class="login-page">
  <div class="container m-0">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="container">
          <div class="box">
            <a href="{{url('/')}}">
              <h2>Daftar</h2>
            </a>
            <form action="{{route('buatakun')}}" method="post">
              @csrf
              <div class="input-group mb-3 input">
                <input type="text" class="mb-1 " name="nama" >
                <label for="name">Nama Lengkap</label>
              </div>
              <div class="input-group mb-3 input">
                <input type="text" class="mb-1 " name="name" >
                <label for="email">Username</label>
              </div>
              <div class="input-group mb-3 input">
                <input type="email" class="mb-1 " name="email" >
                <label>Email</label>
              </div>
              <div class="input-group mb-3 input">
                <input type="password" class="mb-1 " name="password" >
                <label for="password">Password</label>
              </div>
              <div class="input-group mb-3 input">
                <input type="password" id="password-confirm" name="password_confirmation" class="mb-1 " >
                <label>Confirm Password</label>
              </div>
              
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                      <p class="text-white"> I agree to the <a href="#">terms</a></p>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <a href="{{ route('login') }}" class="text-center">Saya sudah punya akun</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-5 ml-3">
        <img class="w-75" src="{{asset('userpage/img/login-page.png')}}" alt="" srcset="">
      </div>
    </div>
  </div>

  {{-- <div class="register-box">
    <div class="register-logo">
      <a href="{{asset('/')}}/template/index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{asset('/')}}/template/index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div> --}}
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="{{asset('/')}}/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('/')}}/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('/')}}/template/dist/js/adminlte.min.js"></script>
</body>

</html>