@extends('admin.layouts.admin')

@section('content')
<a class="btn btn-danger ml-2" href="{{ route('jurusan.index') }}">Kembali</a>

<div class="container mt-3">
    <div class="row">
        <div class="col md-12">
<div class="card">
    <div class="card-header bg-dark">
        <h3 class="card-title text-center">Data Jurusan</h3>
    </div>
    <div class="card-body">
        <label for="nama_jurusan">
            Nama Jurusan :
        </label>
        {{ $jurusan->nama_jurusan }}
        <br>

        <label for="jumlah_kapasitas">
            Jumlah Kapasitas :
        </label>
        {{ $jurusan->jumlah_kapasitas }}
        <br>
    </div>
</div>
</div>
</div>
</div>
@endsection