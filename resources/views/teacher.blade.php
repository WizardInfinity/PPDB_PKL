@extends('layouts.mainlayout')
@section('title', 'Teacher')

@section ('content')

    <h1>Ini Halaman Teacher</h1>

    <h3>Teacher List</h3>
    <div class="my-3">
        <a href="" class="btn btn-primary">ADD DATA</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherlist as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                </tr>
            @endforeach
        </tbody>
@endsection