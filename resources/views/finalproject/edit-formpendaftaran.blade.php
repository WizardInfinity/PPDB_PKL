@extends('finalproject.main2')

@section('isi')
    <style>
        .login-box {
            width: 550px;
            padding: 10px;
        }
    </style>
<div class="d-flex justify-content-center align-items-center flex-column">
<div class="login-box">
    <form method="POST" action="/statuspenerimaan/{{$data->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-center">Ubah Data</h1><br>
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}" required>
        </div>
        <div class="mb-3">
            <label for="ttl" class="form-label">TTL </label>
            <input type="text" name="ttl" id="ttl" class="form-control" value="{{$data->ttl}}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">ALAMAT</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{$data->alamat}}" required>
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">ASAL SEKOLAH</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" value="{{$data->asal_sekolah}}" required>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">SCAN IJAZAH</label>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo" onchange="previewImage()">
            </div>
            <input type="hidden" name="oldImage" value="{{ $data->image }}">
            @if ($data->image)
                <img src="{{asset('storage/photo/'. $data->image)}}" class="img-preview img-fluid col-sm-5 mt-3 d-block" >
            @else
                <img class="img-preview img-fluid col-sm-5 mt-3">
            @endif
        </div>
        <div class="mb-3">
            <button class="btn btn-primary form-control" type="submit">UBAH</button>
        </div>
</div>
</div>
<script>
    function previewImage() {
        const image = document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');
        
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    
</script>
@endsection