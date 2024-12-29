@extends('finalproject.main2')

@section('isi')
<style>
    .login-box {
        width: 550px;
        padding: 10px;
    }
</style>
<div class="mt-5">
    <br><br><br><center><h3 class="mb-5">Apakah Yakin Ingin Menghapus Data Dari Peserta Bernama <strong>{{$data->nama}}</strong>?</h3>
    
    <a href="/statuspenerimaan" class="btn btn-success mx-5">KEMBALI</a>
    
    <form action="/statuspenerimaan-lenyap/{{$data->id}}" method="POST" style="display: inline-block">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mx-5">HAPUS</button>
    </form>

</div>
@endsection