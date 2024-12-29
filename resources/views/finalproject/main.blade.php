    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB | SMKN 2 Pekanbaru</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    </head>
    <style>
        .hapusgaris {
            text-decoration: none;
        }
    </style>
    <body>
        {{-- Navbar Awal --}}
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:rgb(0, 0, 0) ">
            <div class="container">
            <a class="navbar-brand" href="{{ url('finalproject') }} ">
                <div class="text-light">
                <img src="dist/img/Logo_smk2.png" width="50px" margin="100px">  SMK N 2 Pekanbaru</a></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                <strong><a class="nav-link active text-info" aria-current="page" ><i class="bi bi-person-fill"></i>  {{Auth::user()->name}}</a></strong>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{ url('finalproject') }}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="{{ url('formpendaftaran') }}">Pendaftaran Online</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="{{ url('statuspenerimaan') }}">Status Penerimaan </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="{{ url('hasilpeserta') }}">Hasil Peserta</a>
                </li>
                <span class="navbar-text mx-3">
                    <a class="btn btn-success btn-sm bi bi-arrow-up-circle" href="{{ url('logout') }}" >  Log-Out</a>
                </span>
            </div>
            </div>
        </nav>
        {{-- Navbar Akhir --}}
        @yield('isi')

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>