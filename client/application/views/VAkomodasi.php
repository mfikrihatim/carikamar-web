<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CariKamar - Tera</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
    <!--- Custome Css -->
    <link rel="stylesheet" href="custome.css'); ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
</head>
<style>
.card-widget:hover {
    background-color: rgb(31, 196, 247);
    color: beige;
}

.card-widget {
    border-radius: 20px;
}


.card-widget {
    border-radius: 20px;
}
</style>

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
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-th-large"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-menu-right text-center">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"> <i class="fas fa-key"></i> Ubah Password </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo site_url('Welcome/Logout'); ?>" class="nav-link" onclick="Logout()"></i>
                                Keluar </a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->


        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h4>Tentang kategori akomodasi Anda</h4>
                            <p>Apa kategori akomodasi Anda? Catatan: Jika Anda tidak dapat menemukan kategori yang
                                persis sama untuk akomodasi Anda, pilihlah salah satu kategori yang paling mewakili.</p>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo site_url('General_information/AddAkomodasi'); ?>" style="color: black;"
                                id="myButton">
                                <div class="card card-widget widget-user-2">
                                    <div class="widget-user-header">
                                        <div class="widget-user-image">
                                            <img src="<?php echo base_url('assets/tera/icon.png" alt="Card image cap'); ?>"
                                                alt="User Avatar">
                                        </div>
                                        <!-- /.widget-user-image -->
                                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                                        <h5 class="widget-user-desc">Lead Developer</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- /.widget-user -->
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo site_url('General_information/AddAkomodasi'); ?>" style="color: black;"
                                id="myButton">
                                <div class="card card-widget widget-user-2">
                                    <div class="widget-user-header">
                                        <div class="widget-user-image">
                                            <img src="<?php echo base_url('assets/tera/icon.png" alt="Card image cap'); ?>"
                                                alt="User Avatar">
                                        </div>
                                        <!-- /.widget-user-image -->
                                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                                        <h5 class="widget-user-desc">Lead Developer</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo site_url('General_information/AddAkomodasi'); ?>" style="color: black;"
                                id="myButton">
                                <div class="card card-widget widget-user-2">
                                    <div class="widget-user-header">
                                        <div class="widget-user-image">
                                            <img src="<?php echo base_url('assets/tera/icon.png" alt="Card image cap'); ?>"
                                                alt="User Avatar">
                                        </div>
                                        <!-- /.widget-user-image -->
                                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                                        <h5 class="widget-user-desc">Lead Developer</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- /.widget-user -->
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo site_url('General_information/index'); ?>" style="color: black;"
                                id="myButton">
                                <div class="card card-widget widget-user-2">
                                    <div class="widget-user-header">
                                        <div class="widget-user-image">
                                            <img src="<?php echo base_url('assets/tera/icon.png" alt="Card image cap'); ?>"
                                                alt="User Avatar">
                                        </div>
                                        <!-- /.widget-user-image -->
                                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                                        <h5 class="widget-user-desc">Lead Developer</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- /.widget-user -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- duplicate contact -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>">
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/js/demo.js'); ?>"></script>

    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>">
    </script>

    </script>
    <!-- <script>
    $('#myButton').click(function() {
        $('#myDiv').toggle('slow', function() {
            // Animation complete.
        });
    });
    </script> -->
</body>

</html>