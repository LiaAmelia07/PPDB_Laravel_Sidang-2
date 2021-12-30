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
        @include('user.include.navbar')
        <!-- Masthead-->
        <header class=" " >
        <center><h1>SELAMAT DATANG</h1>
                <h1>DI SITUS RESMI SMK ASSALAAM BANDUNG</h1><br>
        <img src="{{asset('assets/assets/img/smk.png')}}" alt="..." /></center>
        <br>
        <br>
        <br>
        <br>
        <img>
        </header>
        <!-- Icons Grid-->
        @include('user.include.langkah')
        <!-- Berita dan artikel-->
        <section class="showcase">
            <h2 class="mb-5"><center>Berita dan Artikel</center></h2>
            <div class="container-fluid p-5">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-5 text-white showcase-img">
                    <img src="{{asset('assets/assets/img/reuni.jpeg')}}"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h3>PERSIAPAN REUNI AKBAR ALUMNI SMK ASSALAAM 12-21</h3>
                        <p class="lead mb-0">SMK Assalaam akan mengadakan reuni akbar untuk seluruh angkatan yaitu dari tahun 2012 s.d tahun 2021.
                         Dengan jumlah kurang lebih sekitar 1200 orang. Targetnya minimal 30% atau 40% peserta yang ikut dari keseluruha</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img">
                    <img src="{{asset('assets/assets/img/hariguru.jpg')}}"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>HARI GURU</h2>
                        <p class="lead mb-0">Hari guru mewakili sebuah kepedulian, pemahaman dan apresiasi yang ditampilkan demi peran vital seorang guru,
                        yaitu mengajarkan ilmu pengetahuan dan membangun generasi. Hari guru adalah hari dimana kita memperingati jasa yang selama ini telah diberikan
                        oleh sang pahlawan tanpa tanda jasa, siapa pahlawan tanpa tanda jasa itu? Siapa lagi melainkan seorang guru sosok yang sangat berilmu.
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img">
                    <img src="{{asset('assets/assets/img/bulan_bahasa.jpg')}}"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>BULAN BAHASA</h2>
                        <p class="lead mb-0">Bulan Oktober di tahun ini merupakan bulan yang penuh dengan keberkahan karena bertepatan dengan bulan dilahirkannya panutan kita Nabi Muhammad SAW.
                        Selain itu, di bulan Oktober ini juga diperingati dengan hari diikrarkannya Sumpah Pemuda dan diresmikannya Bahasa Indonesia Sebagai Bahasa Nasional.
                        Untuk merayakan hal tersebut, SMK Assalaam mengadakan beberapa kegiatan perlombaan yaitu menulis narasi fiksi </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Testimoni Alumni...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('assets/assets/img/testimonials-1.jpg')}}" alt="..." />
                            <h5>Margaret E.</h5>
                            <p class="font-weight-light mb-0">"IT Support"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('assets/assets/img/testimonials-2.jpg')}}" alt="..." />
                            <h5>Fred S.</h5>
                            <p class="font-weight-light mb-0">"Web Development"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('assets/assets/img/testimonials-3.jpg')}}" alt="..." />
                            <h5>Sarah W.</h5>
                            <p class="font-weight-light mb-0">"Programmer"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
        <div class="container-fluid no-padding">
        <div class="col-lg-8 col-lg-12 col-sm-12 col-xs-12 no-padding">
            <!-- Google map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3674102673285!2d107.59072401417895!3d-6.965911270139053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK+Assalaam+Bandung!5e0!3m2!1sid!2sid!4v1510815784148"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Google map -->
        </div>>
        </div>
        </section>
<!-- Footer-->
        <footer class="bg-dark text-white p-5">
                            <div class="row">
                              <div class="col-md-3">
                              <h5>UNIT PENDIDIKAN</h5>
                              <ul>
                              <li>TK</li>
                              <li>SD</li>
                              <li>SMP</li>
                              <li>SMA</li>
                              <li>SMK</li>
                              </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>SMK ASSALAM BANDUNG</h5>
                                  <p>SMK ASSALAM BANDUNG adalah sekolah dibawah yayasan Assalam
                                   yang menciptakan siswa untuk bekerja dan memiliki keterampilan unggul
                                   dibidang industri dan kewirausahaan
                              </div>
                                <div class="col-md-3">
                                  <h5>JURUSAN </h5>
                                  <ul>
                                    <li>Rekayasa Perangkat Lunak </li>
                                    <li>Teknik Kendaran Ringan</li>
                                    <li>Teknik Sepeda Motor</li>
                                  </ul>
                                </div>
                                <div class="col-md-3">
                                  <h5>HUBUNGI KAMI</h5>
                                  <ul>
                                    <li>021-6276-8378</li>
                                    <li>info@smkassalaambandung.sch.id</li>
                                  </ul>
                                <div class="col-lg-6 h-50">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-2">
                                        <a href="https://www.instagram.com/smkassalaam/"><i class="bi-instagram fs-3"></i></a>
                                    </li>
                                    <li class="list-inline-item me-2">
                                    <a href="https://www.facebook.com/smkassalaam/"><i class="bi-facebook fs-3"></i></a>
                                    </li>
                                    <li class="list-inline-item me-2">
                                        <a href="https://twitter.com/smkassalaam/"><i class="bi-twitter fs-3"></i></a>
                                    </li>
                                </ul>
                                </div>
                                </div>
                                <div class="col-md-12 text-center">
                                  <br>
                                  <br>
                                   &copy copyright 2021 |  Created by Lia Amelia
                                  </div>
                            </div>
                </div>
            </div>
        </footer>
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
