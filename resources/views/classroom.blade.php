@extends('layouts.mainlayout')
@section('title', 'Class')

@section ('content')

    <h1>Ini Halaman Class</h1>

    <h3>Class List</h3>
    <div class="my-3">
        <a href="" class="btn btn-primary">ADD DATA</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No. </th>
                <th>Kelas</th>
                {{-- <th>Students</th>
                <th>Teacher</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classlist as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->class}}</td>
                {{-- <td>
                    @foreach ($data->students as $student)
                    ⇥ {{$student->nama}} <br>
                    @endforeach
                </td>
                <td>{{$data->Teacher->nama}}</td> --}}
                <td>
                    <a href="class-detail/{{$data->id}}" class="btn btn-info ">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection