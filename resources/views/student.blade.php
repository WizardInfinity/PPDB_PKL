@extends('layouts.mainlayout')
@section('title', 'Student')

@section ('content')

    <h1>Ini Halaman Student</h1>
    
    <div class="my-3 d-flex justify-content-between">
        <a href="student-add" class="btn btn-primary">ADD DATA</a>
        <a href="student-delete" class="btn btn-secondary">TRASH DATA</a>
    </div>

    <h3>Student List</h3>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('messages')}}
        </div>
    @endif

        <div class="my-3  col-md-5">
            <form action="" method="get">
                <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="Keyword">
                        <button class="input-group-text btn btn-primary">Search</button>
                </div>
            </form>
        </div>

    <table class="table">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Nis</th>
                <th>Class</th>
                {{-- <th>Class Id</th>
                <th>Class</th>
                <th>Ekskul</th>
                <th>Teacher</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($studentlist as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->class->class}}</td>
                    {{-- <td>
                        @foreach ($data->extracurriculars as $item)
                            {{$item->nama}}
                        @endforeach
                    </td> --}}
                    {{-- <td>{{$data->class_id}}</td>
                    <td>{{$data->class['class']}}</td>
                    <td>
                        @foreach ($data->extracurriculars as $item)
                            {{$item->nama}}
                        @endforeach
                    </td>
                    <td>{{$data->class->Teacher->nama}}</td> --}}
                    <td>
                        <a href="student/{{$data->id}}" class="btn btn-info ">Detail</a>
                        <a href="student-edit/{{$data->id}}" class="btn btn-info ">Edit</a>
                        <a href="student-delete/{{$data->id}}" class="btn btn-info ">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$studentlist->withQueryString()->links()}}
@endsection