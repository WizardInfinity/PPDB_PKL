@extends('layouts.mainlayout')
@section('title', 'ekskul-detail')

@section ('content')

    <h3>Ini data detail dari ekskul {{$ekskul->nama}}  </h3>


   <div class="mt-3">
    <h5>List Peserta</h5>
    <ol>
        @foreach ($ekskul->students as $item)
            <li>
                {{$item->nama}}
            </li>
        @endforeach
    </ol>
   </div>
@endsection