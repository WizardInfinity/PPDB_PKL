@extends('finalproject.main')

@section('isi')

<style>
    .gambar{
        width: 100px;
        height: 120px;
    }
</style>

<div class="container">
<h1 class="text-center mt-2">Data Siswa</h1>
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">NO Pendaftaran</th>
        @if (Auth::user()->name != 'Admin' && Auth::user()->name != 'Teacher')
            {{-- Kosong --}}
        @else 
            <th scope="col">TTL</th>
            <th scope="col">Alamat</th>
            <th scope="col">Ijazah</th>
        @endif
        @if (Auth::user()->name == 'Admin' )
            <th scope="col">ACTION</th>
        @endif
        </tr>
    </thead>
        <tbody>
            @foreach ($datalist as $data)
        <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->asal_sekolah}}</td>
                <td>{{$data->no_pendaftaran}}</td>
            
            @if (Auth::user()->name != 'Admin' && Auth::user()->name != 'Teacher')
                    {{-- Kosong --}}
            @else
                <td>{{$data->ttl}}</td>
                <td>{{$data->alamat}}</td>
                <td>
                    <img class="gambar" src="{{asset('storage/photo/'. $data->image)}}">
                </td>
            @endif
            @if (Auth::user()->name == 'Admin' )
                
            <td>
                <a href="{{ url('formpendaftaran-edit') }}/{{$data->id}}" class="btn btn-info mr-1">Edit</a>
                <a href="{{ url('statuspenerimaan-delete') }}/{{$data->id}}" class="btn btn-danger ">Delete</a>
                <a href="{{ url('statuspenerimaan-hasil') }}/{{$data->id}}" class="btn btn-success ">Pilih Hasil</a>
            </td>
            @endif

        </tr>
        @endforeach
        </tbody>
    </table>
    {{$datalist->withQueryString()->links()}}
</div>
@endsection