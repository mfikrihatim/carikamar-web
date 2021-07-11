<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CariKamar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet"
        href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('img/500px.png'); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-alt"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo site_url('Welcome/Logout'); ?>" class="dropdown-item" onclick="Logout()">
                            <i class=" fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <!-- <a href="index3.html" class="brand-link text-center">
                <img src="<?php echo base_url('img/polos.png'); ?>" alt="AdminLTE Logo" class="brand-image  elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">CariKamar</span>
            </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $foto; ?>" class="img-circle " alt="User Image"
                            style="width: 5rem; height:2.5rem;">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $nama; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo site_url('Welcome/index'); ?>"
                                class="nav-link <?php if ($this->uri->segment(2) == "index") {echo 'active';} ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(2) == "DataUser") {echo 'menu-open'; } ?> 
                                    <?php if ($this->uri->segment(2) == "DataRole") {echo 'menu-open';} ?> 
                                    <?php if ($this->uri->segment(2) == "DataTipeProperti") {echo 'menu-open';} ?>
                                    <?php if ($this->uri->segment(2) == "DataMasterTipeKamar") {echo 'menu-open';} ?> 
                                    <?php if ($this->uri->segment(2) == "DataMasterTipeKasur") {echo 'menu-open';} ?> 
                                    <?php if ($this->uri->segment(2) == "DataMasterFasilitasKamarHeader") {echo 'menu-open';} ?>
                                    <?php if ($this->uri->segment(2) == "DataMasterFasilitasKamarDetail") {echo 'menu-open';} ?> 
                                    <?php if ($this->uri->segment(2) == "DataCancel") {echo 'menu-open';} ?> 
                                    <?php if ($this->uri->segment(2) == "DataStyle") {echo 'menu-open';} ?>">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Data Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_user/DataUser'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataUser") {echo 'active';} ?>">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>
                                            User
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_Role/DataRole'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataRole") {echo 'active';} ?>">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>
                                            Jenis Role
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_Tipe_Properti/DataTipeProperti'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataTipeProperti") {echo 'active';} ?> ">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>
                                            Tipe Properti
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_tipe_kamar/DataMasterTipeKamar'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataMasterTipeKamar")  {echo 'active';} ?>">
                                        <i class="nav-icon fas fa-person-booth"></i>
                                        <p>
                                            Tipe Kamar
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_tipe_kasur/DataMasterTipeKasur'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataMasterTipeKasur") {echo 'active';} ?>">
                                        <i class="nav-icon fas fa-bed"></i>
                                        <p>
                                            Tipe Kasur
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_fasilitas_kamar_header/DataMasterFasilitasKamarHeader'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataMasterFasilitasKamarHeader") {echo 'active';} ?>">
                                        <i class="nav-icon fas fa-box"></i>
                                        <p>
                                            Fasilitas Kamar Header
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">

                                    <a href="<?php echo site_url('Master_fasilitas_kamar_detail/DataMasterFasilitasKamarDetail'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataMasterFasilitasKamarDetail") {echo 'active';} ?>">
                                        <i class="nav-icon fas fa-box"></i>
                                        <p>
                                            Fasilitas Kamar Detail
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_Style/DataStyle'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataStyle") {echo 'active';} ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>
                                            Tipe Style
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_Cancel/DataCancel'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataCancel") {echo 'active';} ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>
                                            Tipe Cancel
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(2) == "DataInformasiUmumDetail") {echo 'menu-open';} ?>
                            <?php if ($this->uri->segment(2) == "DataInformasiUmumKontak") {echo 'menu-open';} ?>
                            <?php if ($this->uri->segment(2) == "DataPropertiDetail") {echo 'menu-open';} ?> 
                            <?php if ($this->uri->segment(2) == "DataFasilitasProperti") {echo 'menu-open';} ?>
                            <?php if ($this->uri->segment(2) == "DataFasilitasKamar") {echo 'menu-open';} ?>">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data Klien
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Informasi_umum_detail/DataInformasiUmumDetail'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataInformasiUmumDetail") {echo 'active';} ?>">
                                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                        <p>
                                            Informasi Umum
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Informasi_umum_kontak/DataInformasiUmumKontak'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataInformasiUmumKontak") {echo 'active';} ?> ">
                                        <i class="nav-icon fas fa-address-book"></i>
                                        <p>
                                            Informasi Umum Kontak
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Properti_Detail/DataPropertiDetail'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataPropertiDetail") {echo 'active';} ?>">
                                        <i class="nav-icon fas fa-info-circle"></i>
                                        <p>
                                            Detail Properti
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Fasilitas_Properti/DataFasilitasProperti'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataFasilitasProperti") {echo 'active';} ?> ">
                                        <i class="nav-icon fas fa-info-circle"></i>
                                        <p>
                                            Fasilitas Properti
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">

                                    <a href="<?php echo site_url('Fasilitas_kamar/DataFasilitasKamar'); ?>"
                                        class="nav-link <?php if ($this->uri->segment(2) == "DataFasilitasKamar") {echo 'active';} ?> ">
                                        <i class="nav-icon fas fa-info-circle"></i>
                                        <p>
                                            Fasilitas Kamar
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Master_fasilitas_kamar_header/index'); ?>"
                                        class="nav-link ">
                                        <i class="nav-icon fas fa-info-circle"></i>
                                        <p>
                                            Kamar Header
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- <li class="nav-item">
                            <a href="<?php echo site_url('Welcome/Logout'); ?>" class="nav-link" onclick="Logout()">
                                <i class="nav-icon fa fa-arrow-left"></i>
                                <p>Logout</p>
                            </a>
                        </li> -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <?php
        $this->load->view($content);
        ?>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021-Present <a href="http://adminlte.io">Cari</a>KAMAR</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js'); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>">
    </script>
    <!-- Summernote -->
    <script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>">
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/dist/js/pages/dashboard.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>">
    </script>
    <!-- AdminLTE App -->
    <!-- <script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script> -->
    <script>
    function Logout() {
        localStorage.clear();
    }
    $(function() {
        $("#example1").DataTable({
            "responsive": false,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>

</body>

</html>