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
            <h1 class="text-center">Data Kelas</h1><br><br><br>
            <div class="mb-3">
                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>KELAS</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelaslist as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->class}}</td>
                        <td>
                            <a href="formkelas-edit/{{$data->id}}" class="btn btn-info mr-1">Edit</a>
                            <a href="tabelkelas-delete/{{$data->id}}" class="btn btn-danger ">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="formkelas" class="btn btn-primary ">Tambah Kelas</a>
            </div>
    </div>
    </div>
@endsection