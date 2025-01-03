
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | SMKN 2 Pekanbaru</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
        <a href="index2.html" class="h1"><b>Register</b></a>
        </div>
        <div class="card-body">
        <p class="login-box-msg">Register a new account</p>

        <form action="" method="post">
            @csrf
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-8">
                
            </div>
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
        </div>

        <a href="{{ url('login') }}" class="text-center">I already have a account</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message  }}',
})
    </script>
@endif
</body>
</html>
