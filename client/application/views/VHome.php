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
    <style type="text/css">
        /*Profile Card 1*/
    .profile-card-1 {
      font-family: 'Open Sans', Arial, sans-serif;
      position: relative;
      float: left;
      overflow: hidden;
      width: 100%;
      color: #ffffff;
      text-align: center;
      height:368px;
      border:none;
    }
    .profile-card-1 .background {
       width:100%;
       vertical-align: top;
       /*opacity: 0.9;*/
       /*-webkit-filter: blur(5px);*/
       filter: blur(1px);
       -webkit-transform: scale(1.8);
       position: absolute;
       /*transform: scale(2.8);*/
    }
    .profile-card-1 .card-content {
      width: 100%;
      padding: 15px 25px;
      position: absolute;
      background: rgba(0,0,0,0.4);
      left: 0;
      top: 50%;
    }
    .profile-card-1 .profile {
      border-radius: 50%;
      position: absolute;
      bottom: 50%;
      left: 50%;
      max-width: 100px;
      opacity: 1;
      box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
      border: 2px solid rgba(255, 255, 255, 1);
      -webkit-transform: translate(-50%, 0%);
      transform: translate(-50%, 0%);
    }
    .profile-card-1 h2 {
      margin: 0 0 5px;
      font-weight: 600;
      font-size:25px;
    }
    .profile-card-1 h2 small {
      display: block;
      font-size: 15px;
      margin-top:10px;
    }
    .profile-card-1 i {
      display: inline-block;
        font-size: 16px;
        color: #ffffff;
        text-align: center;
        border: 1px solid #fff;
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50%;
        margin:0 5px;
    }
    .profile-card-1 .icon-block{
        float:left;
        width:100%;
        margin-top:15px;
    }
    .profile-card-1 .icon-block a{
        text-decoration:none;
    }
    .profile-card-1 i:hover {
      background-color:#fff;
      color:#2E3434;
      text-decoration:none;
    }
    </style>

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
                        <a href="<?php echo site_url('Welcome'); ?>" class="nav-link">Home</a>
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
                        <div class="dropdown">
                              <p class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $this->session->userdata('email') ?>
                              </p>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Change Password</a>
                              </div>
                        </div>
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
                                <h1 class="m-0">Proses Registrasi Belum Selesai !</h1>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>

                <div class="container">
                    <!-- carousel gambar -->
                    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <img src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/img/credit/paypal.png'); ?>" style="width: 50px;height:200px" class="d-block w-100" alt="...">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/img/credit/mastercard.png'); ?>" style="width: 50px;height:200px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/img/credit/american-express.png'); ?>" style="width: 50px;height:200px" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> -->
                    <div class="row mt-3">
                        <?php
                        if (!empty($DataInformasiDetail)) {
                            foreach ($DataInformasiDetail as $index => $ReadDS) {
                            $index = $index + 1;
                            $informasi_umum_detail_id = $ReadDS->id;
                            $parse_image = $this->db->query("SELECT * FROM foto_properti WHERE informasi_umum_detail_id = '$informasi_umum_detail_id' ")->row_object();
                            if (!empty($parse_image->foto) || !empty($parse_image)) {
                                $image_parse = json_decode($parse_image->foto); $get_image_parse = $image_parse ? $image_parse[0] : "https://cdn.bodybigsize.com/wp-content/uploads/2020/03/noimage-15.png" ;
                            }else{
                                $get_image_parse = "https://cdn.bodybigsize.com/wp-content/uploads/2020/03/noimage-15.png";
                            }
                        ?>
                        <div class="col-md-4">
                            <!-- <div class="card profile-card-1">
                                <img src="<?= $get_image_parse ?>" alt="profile-sample1" class="background"/>
                                <div class="card-content">
                                    <h2><?php echo $ReadDS->nama_properti; ?></h3>
                                </div>
                            </div> -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $ReadDS->nama_properti; ?></h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <img class="card-img-top" src="<?= $get_image_parse ?>" alt="Card image cap">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?php echo site_url('General_information/index/').$ReadDS->id; ?>" class="btn btn-warning" >Informasi Belum Lengkap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } 
                        ?>
                    </div>
                    <?php echo $this->pagination->create_links(); ?>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ketik Nama Akomodasi Anda">
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="<?= site_url('Welcome/VAkomodasi')?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Akomodasi Baru</a>
                            <!-- <button class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Akomodasi Baru</button> -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h4 class="card-title m-0">Saya memiliki akomodasi yang telah didaftarkan di TERA
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Hubungi Market Manager Anda untuk menghubungkan akun Anda ke
                                        akomodasi yang telah Anda daftarkan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Saya ingin mendaftarkan akomodasi baru</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Senang Anda ingin bergabung! Klik tombol di bawah untuk
                                        memulai. Proses registrasi dapat berlangsung hingga 15 menit.</p>
                                    <a href="<?php echo site_url('Welcome/VAkomodasi'); ?>"
                                        class="btn btn-primary">Daftarkan Akomodasi Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>