<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CariKamar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?php echo site_url('Welcome'); ?>" class="navbar-brand">
                    <span class="brand-text font-weight-bold text-primary" style="font-size: 2.5rem;">CariKamar</span>
                </a>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Some action </a></li>
                        <li><a href="#" class="dropdown-item">Some other action</a></li>

                        <li class="dropdown-divider"></li>

                        <!-- Level two dropdown-->
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                            </li>

                            <!-- Level three dropdown-->
                            <li class="dropdown-submenu">
                                <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                </ul>
                            </li>
                            <!-- End Level three -->

                            <li><a href="#" class="dropdown-item">level 2</a></li>
                            <li><a href="#" class="dropdown-item">level 2</a></li>
                            </ul>
                        </li>
                        <!-- End Level two -->
                        </ul>
                    </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <div class="mt-2">
                        <small>Welcome</small><br>
                        <small><?php echo $this->session->userdata('email') ?></small>
                    </div>
                    <a class="nav-link mt-3" href="<?php echo site_url('Welcome/Logout'); ?>">
                        <i class="fa fa-power-off text-red"></i>
                        <span class="nav-link-text">Logout</span>
                    </a>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->
        <section class="content-wrapper">
            <div class="content-header">
                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <!-- <h1 class="m-0">Proses Registrasi Belum Selesai !</h1> -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <div class="container">
                    <!-- Daftar Tarif -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5>Tarif Kamar</h5>
                                        <span>Atur Tarif Kamar Anda</span><br><br>
                                        <button class="btn btn-primary">Atur Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5>Tarif Kamar</h5>
                                        <span>Atur Tarif Kamar Anda</span><br><br>
                                        <button class="btn btn-primary">Atur Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5>Tarif Kamar</h5>
                                        <span>Atur Tarif Kamar Anda</span><br><br>
                                        <button class="btn btn-primary">Atur Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5>Tarif Kamar</h5>
                                        <span>Atur Tarif Kamar Anda</span><br><br>
                                        <button class="btn btn-primary">Atur Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Informasi untuk mitra -->
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Informasi Untuk Mitra</h3>
                        </div>
                        <div class="col-md-6 ">
                            <button class="btn btn-primary float-right">Lihat Semua Program</button>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators" style="display:none">
                                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#multi-item-example" data-slide-to="1" class=""></li>
                                </ol>
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/.First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="float:left">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                        card's content.</p>
                                                    <b><p class="text-primary">Pelajari Program</p></b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Second slide-->
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <!-- <div class="justify-content-center">
                                    <a class="btn btn-primary align-center" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                                    <a class="btn btn-primary align-center" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                                </div> -->
                                <!--/.Controls-->
                            </div>
                        </div>
                    </div>
                    <!-- Informasi tamu -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3>Reservasi Hari Ini</h3>
                                <small>Nama tamu yang melakukan reservasi hari ini</small>   
                              </div>
                              <div class="card-body"> 
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama</th>
                                        <th>Jumlah Kamar</th>
                                        <th style="width: 40px">Orang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>2.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>3.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>4.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Checkin Hari ini</h3>   
                                    <small>Nama tamu yang akan check in hari ini</small>   
                                </div>
                                <div class="card-body"> 
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama</th>
                                        <th>Jumlah Kamar</th>
                                        <th style="width: 40px">Orang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>2.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>3.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>4.</td>
                                        <td>Dedi Saputra</td>
                                        <td>1 Kamar</td>
                                        <td>2</td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                        </div>
                    </div>
                    <!-- Data Produksi -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Data Produksi -->
                                        <div class="col-md-4">
                                            <h4>Data Produksi</h4>
                                            <p>Lihat performa akomodasi Anda bulan ini sampai hari ini di bawah ini. Data yang ditampilkan di bawah belum termasuk data Bayar di Hotel.</p>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-auto mt-4">
                                                Menampilkan Data <button class="btn btn-primary">Bulan Ke Hari ini</button> <button class="btn btn-outline-secondary">Kuartal Ke Hari ini</button> <button class="btn btn-outline-secondary">Tahun Ke Hari ini</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Statistik data Produksi -->
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="col-md-6">
                                                        <b><p>Room Nights</p></b>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <h3>132</h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <span class="text-success">
                                                            <i class="fas fa-arrow-up"></i>+ 12.5%
                                                        </span>
                                                        <p>dibanding <b>periode yang sama</b></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text-primary float-right">Lihat Detail ></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="col-md-6">
                                                        <b><p>Pendapatan</p></b>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <h3>IDR 50.298.00</h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <span class="text-success">
                                                            <i class="fas fa-arrow-up"></i>+ 109.06%
                                                        </span>
                                                        <p>dibanding <b>periode yang sama</b></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text-primary float-right">Lihat Detail ></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="col-md-12">
                                                       <b><p>Tarif Harian Rata-rata</p></b>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <h3>IDR 381.045</h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <span class="text-success">
                                                            <i class="fas fa-arrow-up"></i>+ 14.03%
                                                        </span>
                                                        <p>dibanding <b>periode yang sama</b></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text-primary float-right">Lihat Detail ></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review Tamu  -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <h3>Review Tamu</h3>
                                        <p>184 Review dari tamu</p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-success" style="border-radius:20px">Memberikan Nilai 9.7</button>
                                            <b><p class="mt-3">Rangga Ramadhan Syarifudin</p></b>
                                            <p>Menginap pada 24 Jul 2021 - 26 Jul 2021</p>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card bg-light">
                                                <div class="card-body">
                                                    <p>Hotel yang katanya sudah lama beroperasi di Sorong. Kamar luas, AC dingin, tv jernih, kamar mandi Bersih lancar airnya dan berfungsi air panasnya, tersedia kopi dan teh serta air kemasan. Alat mandi lengkap. Untuk sarapan tidak tahu variasi atau tidak, tapi karena nginap pas pandemi jadi makanan diantarkan ke kamar intinya kenyang 😁.</p>
                                                    <small>Review dikirimkan pada 06 Agt 2021</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success" style="border-radius:20px">Memberikan Nilai 9.1</button>
                                            <b><p class="mt-3">Clara Clara</p></b>
                                            <p>Menginap pada 13 Jul 2021 - 16 Jul 2021</p>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card bg-light">
                                                <div class="card-body">
                                                    <p>Pelayanan hotelnya baik, breakfast nya juga enak. Dekat dengan tempat belanja. Recommended bagi yang mau ke Sorong.</p>
                                                    <small>Review dikirimkan pada 14 Jul 2021</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <b><p class="text-center text-primary">Lihat Semua Review</p></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>">
    </script>
    <!-- AdminLTE App -->
    <script src=" <?php echo base_url('assets/AdminLTE-3.1.0/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/js/demo.js'); ?>"></script>
    
</body>

</html>