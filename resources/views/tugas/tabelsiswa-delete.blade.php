@extends('tugas.main')

@section('isi')

    <div class="mt-5">
        <br><br><br><center><h3 class="mb-5">Apakah Yakin Ingin Menghapus Data <strong>{{$siswa->nama}}</strong>, DENGAN NIS ({{$siswa->nis}})?</h3>
        
        <a href="/tabelsiswa" class="btn btn-success mx-5">KEMBALI</a>

        <form action="/tabelsiswa-destroy/{{$siswa->id}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mx-5">HAPUS</button>
        </form>

    </div>

@endsection