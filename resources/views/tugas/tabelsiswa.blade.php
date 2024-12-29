@extends('tugas.main')

@section('isi')
<style>
    .login-box {
        width: 500px;
        padding: 10px;
        box-sizing: border-box;
    }
</style>
<div class="d-flex justify-content-center align-items-center flex-column">
    <div class="login-box">
        <form method="POST" action="">
            @csrf
            <h1 class="text-center">Data Siswa</h1><br><br><br>
            <div class="mb-3">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>KELAS</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswalist as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->kelass->class}}</td>
                        <td>
                            <a href="formsiswa-edit/{{$data->id}}" class="btn btn-info mr-1">Edit</a>
                            <a href="tabelsiswa-delete/{{$data->id}}" class="btn btn-danger ">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <a href="formsiswa" class="btn btn-primary ">Tambah Siswa</a>
            </div>
    </div>
    </div>
@endsection