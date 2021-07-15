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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <!-- <img src="../AdminLTE-3.1.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: 0.8" /> -->
                    <span class="brand-text font-weight-bold text-primary" style="font-size: 2.5rem;">CariKamar</span>
                </a>
                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-th-large"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-right text-center">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"> <i class="fas fa-key"></i> Ubah Password </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"> <i class="fas fa-sign-out-alt"></i> Keluar </a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <section class="content-wrapper">
            <div class="content-header">
                <div class="content-header text-center">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <h1 class="m-0">Selamat Datang Kembali!</h1>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Primary</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <img class="card-img-top" src="<?php echo base_url('assets/tera/hotel.jpg" alt="Card image cap'); ?>">
                                <div class="card-body text-center">
                                    <a href="<?php echo site_url('generalinformation/index'); ?>" class="btn btn-primary" style="width: 100%">Informasi Belum Lengkap</a>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Primary</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <img class="card-img-top" src="<?php echo base_url('assets/tera/hotel.jpg" alt="Card image cap'); ?>">
                                <div class="card-body text-center">
                                    <a href="<?php echo site_url('generalinformation/index'); ?>" class="btn btn-primary" style="width: 100%">Informasi Belum Lengkap</a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Primary</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <img class="card-img-top" src="<?php echo base_url('assets/tera/hotel.jpg" alt="Card image cap'); ?>">
                                <div class="card-body text-center">
                                    <a href="<?php echo site_url('generalinformation/index'); ?>" class="btn btn-primary" style="width: 100%">Informasi Belum Lengkap</a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col-md-6 -->
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
                        <!-- /.col-md-6 -->
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Saya ingin mendaftarkan akomodasi baru</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Senang Anda ingin bergabung! Klik tombol di bawah untuk
                                        memulai. Proses registrasi dapat berlangsung hingga 15 menit.</p>
                                    <a href="<?php echo site_url('Welcome/VAkomodasi'); ?>" class="btn btn-primary">Daftarkan Akomodasi Baru</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
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
</body>

</html>