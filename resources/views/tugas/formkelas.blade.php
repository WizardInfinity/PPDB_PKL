@extends('tugas.main')

@section ('isi')
<style>
    .login-box {
        width: 500px;
        padding: 10px;
    }
</style>
<div class="d-flex justify-content-center align-items-center flex-column">
<div class="login-box">
    <form method="POST" action="tabelkelas">
        @csrf
        <h1 class="text-center">Form Kelas</h1><br><br><br>
        <div class="mb-3">
            <label for="kelas" class="form-label">KELAS</label>
            <input type="text" name="class" id="kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary form-control" type="submit">SIMPAN</button>
        </div>
</div>
</div>
@endsection
