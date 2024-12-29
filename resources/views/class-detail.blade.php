@extends('layouts.mainlayout')
@section('title', 'class-detail')

@section ('content')

    <h3>Ini data detail dari kelas {{$class->class}}  </h3>

   <div class="mt-3">
        <h5>Teacher : {{$class->Teacher->nama}}</>
   </div>
   <div class="mt-3">
    <h5>List Students</h5>
    <ol>
        @foreach ($class->students as $item)
            <li>
                {{$item->nama}}
            </li>
        @endforeach
    </ol>
   </div>
@endsection