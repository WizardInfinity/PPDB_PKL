@extends('layouts.mainlayout')
@section('title', 'Edit Student')

@section ('content')

<div class="mt-3 col-8 m-auto">
    <form action="/student/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="nama" value="{{$student->nama}}" required>
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{$student->gender}}">{{$student->gender}}</option>
                @if ($student->gender == 'L')
                    <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{$student->nis}}" required>
        </div>
        <div class="mb-3">
            <label for="class">CLASS</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="{{$student->class->id}}">{{$student->class->class}}</option>
                @foreach ($class as $item)
                    <option value="{{$item->id}}">{{$item->class}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <button class="btn btn-success">SIMPAN</button>
        </div>
@endsection