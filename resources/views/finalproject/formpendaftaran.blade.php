@extends('finalproject.main')

@section('isi')
    <style>
        .login-box {
            width: 550px;
            padding: 10px;
        }
    </style>
<div class="d-flex justify-content-center align-items-center flex-column">
<div class="login-box">
    <form method="POST" action="formpendaftaran" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center">Form Pendaftaran</h1><br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <strong>Whoops!</strong> There were some problems with your input.<br>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Dengan Benar" >
        </div>
        <div class="mb-3">
            <label for="ttl" class="form-label">TTL </label>
            <input type="text" name="ttl" id="ttl" class="form-control" placeholder="Masukkan Tempat dan Tanggal Lahir" >
            <label class="form-text text-danger">*CONTOH : PEKANBARU, 01-01-2001</label>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">ALAMAT</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Nama Jalan dan Nomor Rumah" >
            <label class="form-text text-danger">*CONTOH : JL.RIAU NO.01</label>
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">ASAL SEKOLAH</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Nama Sekolah Sebelumnya" >
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">SCAN IJAZAH</label>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo" >
            </div>
        </div>
        <div class="mb-3" hidden>
            <label class="form-label">NO PENDAFTARAN</label>
            <div class="input-group mb-3">
                <input type="text" name="no_pendaftaran" 
                value="<?php 
                $koneksi = mysqli_connect("localhost","root","","belajar_laravel");
                $sql = mysqli_query($koneksi, 'select max(no_pendaftaran) as maxID from formstudents');
                $data = mysqli_fetch_array($sql);
                $kode = $data['maxID'];
                $kode++;
                $kodeauto = sprintf("%05s",$kode);
                echo $kodeauto;
                ?>" class="form-control" >
            </div>
        </div>
        <div class="mb-3" hidden>
            <label for="hasil_peserta" class="form-label">Hasil</label>
            <select name="hasil_peserta" id="hasil_peserta" class="form-control" >
                @foreach ($hasil as $item)
                    <option value="{{$item->id}}">{{$item->hasil}}</option>
                @endforeach
            </select>   
        </div>
        <div class="mb-3">
            <button class="btn btn-primary form-control" type="submit">TAMBAH</button>
        </div>
</div>
</div>
@endsection