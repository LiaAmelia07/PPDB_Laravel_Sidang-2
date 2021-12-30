@extends('admin.layouts.admin')

@section('content')
<a class="btn btn-danger ml-2" href="{{ route('pendaftaran.index') }}">Kembali</a>

<div class="container mt-3">
    <div class="row">
        <div class="col md-12">
<div class="card">
    <div class="card-header bg-dark">
        <h3 class="card-title text-center">Data Pendaftar</h3>
    </div>
    <div class="card-body">
    
        <img src="{{ $pendaftaran->image() }}" alt="" style="width:150px; height:150px;" alt="Foto">
        <br>

        <label for="">
            Nama Lengkap :
        </label>
        {{ $pendaftaran->nama_lengkap }}
        <br>

        <label for="">
            Nama Jurusan :
        </label>
        {{ $pendaftaran->jurusan->nama_jurusan }}
        <br>

        <label for="">
            Jenis Kelamin :
        </label>
        {{ $pendaftaran->jenis_kelamin }}
        <br>

        <label for="">
            Tempat Lahir :
        </label>
        {{ $pendaftaran->tempat_lahir }}
        <br>

        <label for="">
            Tanggal Lahir :
        </label>
        {{ $pendaftaran->tgl_lahir }}
        <br>

        <label for="">
            No Hp Siswa :
        </label>
        {{ $pendaftaran->no_hp }}
        <br>

        <label for="">
            Email :
        </label>
        {{ $pendaftaran->email }}
        <br>

        <label for="">
            Provinsi :
        </label>
        {{ $pendaftaran->provinsi }}
        <br>

        <label for="">
            Kabupaten :
        </label>
        {{ $pendaftaran->kabupaten }}
        <br>

        <label for="">
            Kecamatan :
        </label>
        {{ $pendaftaran->kecamatan }}
        <br>

        <label for="">
            Kelurahan :
        </label>
        {{ $pendaftaran->kelurahan }}
        <br>

        <label for="">
            Alamat :
        </label>
        {{ $pendaftaran->alamat }}
        <br>

        <label for="">
            Nama Ayah :
        </label>
        {{ $pendaftaran->nama_ayah }}
        <br>

        <label for="">
            Pekerjaan Ayah :
        </label>
        {{ $pendaftaran->pekerjaan_ayah }}
        <br>

        <label for="">
            No Hp Ayah :
        </label>
        {{ $pendaftaran->no_hp_ayah }}
        <br>

        <label for="">
            Nama Ibu :
        </label>
        {{ $pendaftaran->nama_ibu }}
        <br>

        <label for="">
            Pekerjaan Ibu :
        </label>
        {{ $pendaftaran->pekerjaan_ibu }}
        <br>

        <label for="">
            No Hp Ibu :
        </label>
        {{ $pendaftaran->no_hp_ibu }}
        <br>

    </div>
</div>
</div>
</div>
</div>
@endsection