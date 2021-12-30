@extends('admin.layouts.admin')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <div class="table-responsive">
                         <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Jurusan</th>
                                <th>Nis</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>No Hp Siswa</th>
                                <th>Email</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Alamat</th>
                                <th>Nama Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>No Hp Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>No Hp Ibu</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Status Verifikasi</th>
                                <th>Foto Siswa</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($pendaftaran as $data)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>

                                <td>
                                    {{$data->nama_lengkap}}
                                </td>

                                <td>
                                    {{$data->jurusan->nama_jurusan}}
                                </td>

                                <td>
                                    {{$data->nis}}
                                </td>

                                <td>
                                    {{$data->jenis_kelamin}}
                                </td>

                                <td>
                                    {{$data->tempat_lahir}}
                                </td>

                                <td>
                                    {{$data->tgl_lahir}}
                                </td>

                                <td>
                                    {{$data->no_hp}}
                                </td>

                                <td>
                                    {{$data->email}}
                                </td>

                                <td>
                                    {{$data->provinsi}}
                                </td>

                                <td>
                                    {{$data->kabupaten}}
                                </td>

                                <td>
                                    {{$data->kelurahan}}
                                </td>

                                <td>
                                    {{$data->kecamatan}}
                                </td>

                                <td>
                                    {{$data->alamat}}
                                </td>

                                <td>
                                    {{$data->nama_ayah}}
                                </td>

                                <td>
                                    {{$data->pekerjaan_ayah}}
                                </td>

                                <td>
                                    {{$data->no_hp_ayah}}
                                </td>

                                <td>
                                    {{$data->nama_ibu}}
                                </td>

                                <td>
                                    {{$data->pekerjaan_ibu}}
                                </td>

                                <td>
                                    {{$data->no_hp_ibu}}
                                </td>

                                <td>
                                    {{$data->asal_sekolah}}
                                </td>

                                <td>
                                    {{$data->alamat_sekolah}}
                                </td>

                                @if ($data->verifikasi == 1)
                                    <td>
                                        <div class="p-3 mb-2 bg-success text-white">Sudah Di Verifikasi</div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="p-3 mb-2 bg-danger text-white">Belum Di Verifikasi</div>
                                    </td>

                                @endif

                                <td>
                                    <img src="{{ $data->image() }}" alt="" style="width:150px;
                                    height:150px;"
                                    alt="Foto">
                                </td>

                                <td>
                                    <a href="{{ route('pendaftaran.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('pendaftaran.show', $data->id) }}" class="btn btn-warning">Show</a>

                                    <form action="{{ route('pendaftaran.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
