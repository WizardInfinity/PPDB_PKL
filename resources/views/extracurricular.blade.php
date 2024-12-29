@extends('layouts.mainlayout')
@section('title', 'Extracurricular')

@section ('content')

    <h1>Ini Halaman Extracurricular</h1>

    <h3>Extracurricular List</h3>
    <div class="my-3">
        <a href="" class="btn btn-primary">ADD DATA</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama</th>
                <th>Action</th>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td>
                        <a href="ekskul-detail/{{$data->id}}" class="btn btn-info ">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

@endsection