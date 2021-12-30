@extends('admin.layouts.admin')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Jurusan
                    <a href="{{route('jurusan.create')}}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>

                <div class="card-body">

                   <div class="table-responsive">
                         <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Jurusan</th>
                                <th>Jumlah Kapasitas</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($jurusan as $data)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    {{$data->nama_jurusan}}
                                </td>
                                <td>
                                    {{$data->jumlah_kapasitas}}
                                </td>
                                <td>
                                    <form action="{{ route('jurusan.destroy', $data->id) }}" method="POST">
                                    <a href="{{ route('jurusan.edit', $data->id) }}" class="btn btn-success">Edit</a> |
                                    <a href="{{ route('jurusan.show', $data->id) }}" class="btn btn-warning">Show</a> |
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');" >
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
