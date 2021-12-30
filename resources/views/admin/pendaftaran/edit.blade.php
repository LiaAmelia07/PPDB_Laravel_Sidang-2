@extends('admin.layouts.admin')

@section('content')
<a class="btn btn-danger ml-2" href="{{ route('pendaftaran.index') }}">Kembali</a>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-center">
                    <h3>Edit Data Pendaftar</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('pendaftaran.update', $pendaftaran->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" value="{{$pendaftaran->nama_lengkap }}" class="form-control" name="nama_lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <select name="jurusan_id" class="form-control">
                                @foreach($jurusan as $data)
                                    <option value="{{$data->id}}">{{$data->nama_jurusan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nis</label>
                            <input type="text" value="{{$pendaftaran->nis }}" class="form-control" name="nis" required>
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" value="{{$pendaftaran->tempat_lahir }}" class="form-control" name="tempat_lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" value="{{$pendaftaran->tgl_lahir }}" class="form-control" name="tgl_lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="">No Handphone Siswa</label>
                            <input type="number" value="{{$pendaftaran->no_hp }}" class="form-control" name="no_hp" required>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" value="{{$pendaftaran->email }}" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" value="{{$pendaftaran->provinsi }}" class="form-control" name="provinsi" required>
                        </div>

                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" value="{{$pendaftaran->kabupaten }}" class="form-control" name="kabupaten" required>
                        </div>

                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" value="{{$pendaftaran->kecamatan }}" class="form-control" name="kecamatan" required>
                        </div>

                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <input type="text" value="{{$pendaftaran->kelurahan }}" class="form-control" name="kelurahan" required>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" value="{{$pendaftaran->alamat }}" class="form-control" name="alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="">Foto Siswa</label>
                            <img src="{{ $pendaftaran->image() }}" height="75" style="padding:10px;" />
                            <input class="form-control" value="{{$pendaftaran->foto }}" type="file" id="foto" name="foto">
                        </div>

                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" value="{{$pendaftaran->nama_ayah }}" class="form-control" name="nama_ayah" required>
                        </div>

                        <div class="form-group">
                            <label for="">Pekerjaan Ayah</label>
                            <input type="text" value="{{$pendaftaran->pekerjaan_ayah }}" class="form-control" name="pekerjaan_ayah" required>
                        </div>

                        <div class="form-group">
                            <label for="">No Handphone Ayah</label>
                            <input type="number" value="{{$pendaftaran->no_hp_ayah }}" class="form-control" name="no_hp_ayah" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nama ibu</label>
                            <input type="text" value="{{$pendaftaran->nama_ibu }}" class="form-control" name="nama_ibu" required>
                        </div>

                        <div class="form-group">
                            <label for="">Pekerjaan ibu</label>
                            <input type="text" value="{{$pendaftaran->pekerjaan_ibu }}" class="form-control" name="pekerjaan_ibu" required>
                        </div>

                        <div class="form-group">
                            <label for="">No Handphone ibu</label>
                            <input type="number" value="{{$pendaftaran->no_hp_ibu }}" class="form-control" name="no_hp_ibu" required>
                        </div>

                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" value="{{$pendaftaran->asal_sekolah }}" class="form-control" name="asal_sekolah" required>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat Sekolah</label>
                            <input type="text" value="{{$pendaftaran->alamat_sekolah }}" class="form-control" name="alamat_sekolah" required>
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