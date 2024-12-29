@extends('layouts.main')

@section('judul')
    Halaman Home
@endsection

@section('isi')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Ini Adalah Home</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        Halaman Home
        </div>
        <!-- /.card-body -->
    </div>
@endsection
