@extends('admin.layouts.admin')
@section('content')
    <div class = "card">
        <div class = "card-header">
            Verifikasi Siswa
        </div>
        <div class = "card-body">
            @if (session()->has('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('sukses') }}
                </div>
            @endif
            @if (session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('gagal') }}
                </div>
            @endif
            <form action="/ppdb/admin/verifikasi" method="post">
                @csrf
                <div class="form-group">
                    <label for="">NIS</label>
                    <input type="text" class="form-control" name="nis" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Verifikasi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
