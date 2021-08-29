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
                    <!-- <img src="../AdminLTE-3.1.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: 0.8" /> -->
                    <span class="brand-text font-weight-bold text-primary" style="font-size: 2.5rem;">CariKamar</span>
                </a>
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
                        ?>
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $ReadDS->nama_properti; ?></h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?php echo site_url('General_information/index'); ?>"
                                                class="btn btn-warning" >Informasi Belum Lengkap</a>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <a href="<?php echo site_url('Welcome/index/' . $ReadDS->id . '/view'); ?>"
                                                class="btn btn-primary" >
                                                edit
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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