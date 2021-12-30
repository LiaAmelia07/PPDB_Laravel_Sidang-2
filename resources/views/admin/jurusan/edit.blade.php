@extends('admin.layouts.admin')

@section('content')
<a class="btn btn-danger ml-2" href="{{ route('jurusan.index') }}">Kembali</a>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-center">
                    <h3>Edit Jurusan</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('jurusan.update', $jurusan->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Jurusan</label>
                            <input type="text" value="{{$jurusan->nama_jurusan }}" class="form-control" name="nama_jurusan" placeholder="Masukan Nama Jurusan...." required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Kapasitas</label>
                            <input type="number" value="{{$jurusan->jumlah_kapasitas}}" class="form-control" name="jumlah_kapasitas" placeholder="Masukan Jumlah Kapasitas...." required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Simpan Perubahan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection