@extends('layouts.mainlayout')
@section('title', 'Student')

@section ('content')

    <div class="mt-3">
        <h3>Ini Data Yang Sudah Di Hapus</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Nis</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    <tbody>
                        @foreach ($student as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->gender}}</td>
                            <td>{{$data->nis}}</td>
                            <td>
                                <a href="student/{{$data->id}}/restore" class="btn btn-info ">Restore</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
        </table>
    </div>

@endsection