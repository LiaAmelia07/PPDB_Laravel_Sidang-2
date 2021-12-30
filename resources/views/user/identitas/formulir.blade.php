<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Penerimaan siswa baru SMK ASSALAAM BANDUNG</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <!-- Masthead-->
        @include('user.include.navbar')
        <header class="masthead" >
        <center><h1>FORMULIR PENDAFTARAN SISWA BARU</h1><br>
        </header>
        <!-- formulir -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                <form action="{{route('daftar.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
									<h2>Data Pribadi</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" maxlength="50" required><br>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label for="">Jurusan</label>
                                                    <select name="jurusan_id" class="form-control">
                                                        @foreach($daftar as $data)
                                                            <option value="{{$data->id}}">{{$data->nama_jurusan}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nis</label>
                                                <input name="nis" type="number" class="form-control" placeholder=" Masukan Nis anda" maxlength="20"><br>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control">
                                                    <option selected value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select><br>
                                            </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" maxlength="20"><br>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input name="tgl_lahir" type="date" class="form-control"><br>
                                            </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input name="no_hp" type="number" class="form-control" placeholder="Nomor Telepon" maxlength="20"><br>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" type="Masukan email" class="form-control"  placeholder="Masukan Email"><br>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Provinsi</label>
                                                <input name="provinsi" type="text" class="form-control" placeholder="Nama Provinsi" maxlength="20"><br>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kabupaten/Kota</label>
                                                <input name="kabupaten" type="text" class="form-control"  placeholder="Nama Kabupaten/Kota">
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Desa/Kelurahan</label>
                                                <input name="kelurahan" type="text" class="form-control" placeholder="Nama Desa/kelurahan" maxlength="20"><br>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kecamatan</label>
                                                <input name="kecamatan" type="text" class="form-control" placeholder="Nama Kecamatan" maxlength="20"><br>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" type="text" class="form-control"  placeholder="Masukan Alamat"></textarea><br>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Siswa</label>
                                                <input class="form-control" type="file" id="foto" name="foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Orang Tua</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Ayah</label>
                                                <input name="nama_ayah" type="text" class="form-control" placeholder="Nama Orangtua" maxlength="40"><br>
                                            </div>
                                            </div>

                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pekerjaan Ayah</label>
                                                <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Pekerjaan Orangtua" maxlength="40"><br>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input name="no_hp_ayah" type="text" class="form-control" placeholder="Nomor telepon Orangtua" maxlength="40"><br>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <input name="nama_ibu" type="text" class="form-control" placeholder="Nama Orangtua" maxlength="40"><br>
                                            </div>
                                            </div>

                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pekerjaan Ibu</label>
                                                <input name="pekerjaan_ibu" type="text" class="form-control" placeholder="Pekerjaan Orangtua" maxlength="40"><br>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input name="no_hp_ibu" type="text" class="form-control" placeholder="Nomor telepon Orangtua" maxlength="40"><br>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Sekolah Asal</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label for="">Asal Sekolah</label>
                                                <input type="text" class="form-control" name="asal_sekolah" required>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Alamat Sekolah Asal</label>
                                                <textarea name="alamat_sekolah" type="text" class="form-control" placeholder="Alamat Sekolah Asal" maxlength="40"></textarea>
                                            </div>
                                            </div>
                                            <div class = "panel-body">
                                                <button type = "reset" class = "btn btn-danger mt-3">Reset</button>
                                                <button type = "submit" class = "btn btn-primary mt-3 ">Tambah</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                </div>


        <!-- Icons Grid-->
        <!-- Berita dan artikel-->
        <!-- Testimonials-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
