<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="icon" href="{{ asset('/')}}/userpage/img/butik-kite.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/')}}/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('/')}}/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/')}}/template/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('/')}}/template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('/')}}/template/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('')}}/template/plugins/toastr/toastr.min.css">

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
            padding: 10px 0;
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
            top: -28px;
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

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="w-75" src="{{asset('userpage/img/login-page.png')}}" alt="" srcset="">
            </div>
            <div class="col-6">
                <div class="container">
                    <div class="box">
                        <a href="{{url('/')}}">
                            <h2>Login</h2>
                        </a>
                        <form action="{{ route('login') }}" method="POST" role="form" autocomplete="off">
                            @csrf
                            <div class="input">
                                <input type="text" name="name" id="name" class="form-control @error('name')  @enderror"
                                    value="{{ old('name') }}" autofocus required="">
                                <label for="name">Username / Email</label>
                            </div>
                            <div class="input">
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="current-password" required="">
                                <label for="password">Password</label>
                            </div>
                            <input class="btn btn-outline-primary" type="submit" value="Masuk">
                            <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                            <div class="remember">
                                <input type="checkbox" id="remember" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class=" text-white" for="remember">Ingat Saya</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/')}}"><b>Aplikasi</b> Distributor</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masuk Untuk Melanjutkan</p>

            <form action="{{ route('login') }}" method="POST" role="form">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name')  @enderror" placeholder="Username"
                        value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div> --}}
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('/')}}/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/')}}/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/')}}/template/dist/js/adminlte.min.js"></script>
    <script src="{{ asset('/')}}/template/plugins//sweetalert2/sweetalert2.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
    <!-- Toastr -->
    <script src="{{ asset('/')}}/template/plugins/toastr/toastr.min.js"></script>
    @error('name')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'error',
            title: '{{$message}}'
        })
    </script>
    {{-- <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span> --}}
    @enderror
    @error('password')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'error',
            title: '{{$message}}'
        })
    </script>
    {{-- <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span> --}}
    @enderror
    {{-- <script>
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

       Toast.fire({
          type: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
</script> --}}
</body>

</html>