    @extends('finalproject.main2')

@section('isi')
    <style>
        .login-box {
            width: 550px;
            padding: 10px;
        }
    </style>
<br><br><br><div class="d-flex justify-content-center align-items-center flex-column">
<div class="login-box">
    <form method="POST" action="/statuspenerimaan-hasil/{{$data->id}}">
        @csrf
        @method('PUT')
        <h1 class="text-center">Pilih Data</h1><br>
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}" disabled>
        </div>
        <div class="mb-3">
            <label for="hasil_peserta" class="form-label">Hasil</label>
            <select name="hasil_peserta" id="hasil_peserta" class="form-control" >
                <option value="{{$data->hasil}}">{{$data->result->hasil}}</option>
                @foreach ($hasil as $item)
                    <option value="{{$item->id}}">{{$item->hasil}}</option>
                @endforeach
                
            </select>   
        </div>
        <div class="mb-3">
            <button class="btn btn-primary form-control" type="submit">UBAH</button>
        </div>
</div>
</div>
@endsection