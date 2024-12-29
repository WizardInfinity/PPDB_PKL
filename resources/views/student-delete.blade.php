@extends('layouts.mainlayout')
@section('title', 'Student')

@section ('content')

    <div class="mt-3">
        <h2>Yakin Ingin Menghapus Data {{$student->nama}} Dengan Nis ({{$student->nis}})?</h2>

        <form style="display: inline-block" action="/student-destroy/{{$student->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/student" class="btn btn-primary">Cancel</a>
    </div>

@endsection