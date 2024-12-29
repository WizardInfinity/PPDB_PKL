@extends('finalproject.main')

@section('isi')
<style>
    .gambar{
        width: 100px;
        height: 120px;
    }
</style>

<div class="container">
    <h1 class="text-center mt-3">Data Siswa Yang Lulus/ Tidak Lulus</h1>
    <div class="my-3 col-10 col-sm-6 col-md-3">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Search">
                <button class="input-group-text btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col"><h3>No</h3></th>
            <th scope="col"><h3>Nama</h3></th>
            <th scope="col"><h3>Asal Sekolah</h3></th>
            <th scope="col"><h3>Status</h3></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datalist as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->nama}}</td> 
            <td>{{$data->asal_sekolah}}</td> 
            <td>
                {{$data->result->hasil}}
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        {{$datalist->withQueryString()->links()}}
    </div>
@endsection