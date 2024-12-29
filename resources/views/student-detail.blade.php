@extends('layouts.mainlayout')
@section('title', 'Student-detail')

@section ('content')

    <h3>Ini data detail dari siswa yang bernama </h3><h4>{{$student->nama}}</h4>

    <div class="mt-3 mb-3">
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Teacher</th>
        </tr>
        <tr>
            <td>{{$student->nis}}</td>
            <td>
                @if ($student->gender == 'P')
                    Perempuan
                    @else
                    Laki Laki
                @endif
            </td>
            <td>{{$student->class->class}}</td>
            <td>{{$student->class->Teacher->nama}}</td>
        </tr>
    </table>
    <div>
        <h4>Ekskul</h4>
        <ol>
        @foreach ($student->extracurriculars as $item)
            <li>{{$item->nama}}</li>
        @endforeach
        </ol>
    </div>

</div>
    <style>
        th{
            width: 25%;
        }
    </style>
@endsection