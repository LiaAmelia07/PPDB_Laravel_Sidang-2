@extends('admin.layouts.admin')
@section('content')
    <div class = "card">
        <div class = "card-header">
            Tambah Jurusan
        </div>
        <div class = "card-body">
            <form action="{{route('jurusan.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Kapasitas</label>
                    <input type="number" class="form-control" name="jumlah_kapasitas" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection