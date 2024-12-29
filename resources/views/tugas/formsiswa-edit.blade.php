@extends('tugas.main')

@section('isi')
<style>
    .login-box {
        width: 500px;
        padding: 10px;
    }
</style>
<div class="d-flex justify-content-center align-items-center flex-column">
<div class="login-box">
    <form method="POST" action="/tabelsiswa/{{$siswa->id}}">
        @csrf
        @method('PUT')
        <h1 class="text-center">Form Siswa</h1>
        <div class="mb-3">
            <label for="name" class="form-label">NAMA</label>
            <input type="name" name="nama" id="name" value="{{$siswa->nama}}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" name="nis" id="nis" value="{{$siswa->nis}}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">KELAS</label>
            <select name="kelas" id="class" class="form-control" required>
                <option value="{{$siswa->kelas}}">{{$siswa->kelass->class}}</option>
                @foreach ($kelas as $item)
                    <option value="{{$item->id}}">{{$item->class}}</option>
                @endforeach
            </select>   
        </div>
        <div class="mb-3">
            <button class="btn btn-primary form-control" type="submit">UBAH</button>
        </div>
</div>
</div>
@endsection
