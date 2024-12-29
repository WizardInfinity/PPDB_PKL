@extends('layouts.mainlayout')
@section('title', 'Add New Student')

@section ('content')

    <div class="mt-3 col-8 m-auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="student" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="nama" >
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" >
                    <option value="">Select One</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" >
            </div>
            <div class="mb-3">
                <label for="class">CLASS</label>
                <select name="class_id" id="class" class="form-control" >
                    <option value="">Select One</option>
                    @foreach ($class as $item)
                        <option value="{{$item->id}}"> {{$item->class}}</option> 
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <button class="btn btn-success">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection 