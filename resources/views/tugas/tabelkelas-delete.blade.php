@extends('tugas.main')

@section('isi')

    <div class="mt-5">
        <br><br><br><center><h3 class="mb-5">Apakah Yakin Ingin Menghapus Kelas {{$kelas->class}}?</h3>
        
        <a href="/tabelkelas" class="btn btn-success mx-5">KEMBALI</a>
        
        <form action="/tabelkelas-destroy/{{$kelas->id}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mx-5">HAPUS</button>
        </form>

    </div>

@endsection