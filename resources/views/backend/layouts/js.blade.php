
<!-- jQuery -->
<script src="{{asset('/')}}/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}/template/dist/js/adminlte.min.js"></script>

{{-- <script src="{{asset('/')}}/template/dist/js/adminlte.js"></script> --}}

<!-- AdminLTE for demo purposes -->
<script src="{{asset('/')}}/template/dist/js/demo.js"></script>
<!-- Sweet Alert 2 -->
<script src="{{asset('/')}}/template/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{asset('/')}}/template/plugins/toastr/toastr.min.js"></script>

@if(Session::has('success'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
         type: 'success',
         title: '&nbsp; {{Session::get('success')}}'
  })     
</script>
@elseif(Session::has('error'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
         type: 'error',
         title: '&nbsp; {{Session::get('error')}}'
  })     
</script>
@elseif(Session::has('warning'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
         type: 'warning',
         title: '&nbsp; {{Session::get('warning')}}'
  })     
</script>
@endif