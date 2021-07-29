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
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
    <!--- Custome Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/tera/custome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-3 mt-3">
                        <div class="col-3">
                            <div class="card">
                                <a href="<?php echo site_url('Jenishotel/index'); ?>" class="c-sidebar-item">
                                    <div class="card-body pt-3 pb-3">
                                        <div class="c-sidebar-body">1. Property Information</div>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('General_information/index'); ?>" class="c-sidebar-item ">
                                    <div class="card-body pt-3 pb-3 mr-1 <?php if ($this->uri->segment(1) == "General_information") {
                                                                                echo 'active';
                                                                            } ?>">
                                        General Information
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Property_detail/index'); ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Property_detail") {
                                                                                                                        echo 'active';
                                                                                                                    } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Property Detail
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Property_facilities/index'); ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Property_facilities") {
                                                                                                                            echo 'active';
                                                                                                                        } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Property Facilities
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Room/index'); ?>" class="c-sidebar-item <?php if ($this->uri->segment(1) == "Room") {
                                                                                                            echo 'active';
                                                                                                        } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Room
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Room_facilities/index'); ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Room_facilities") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Room Facilities
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Photos/index'); ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Photos") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Photos
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Payment_Information/index'); ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Payment_Information") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Payment Information
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="#" class="c-sidebar-item dsb">
                                    <div class="card-body pt-3 pb-3 mr-1 disabled">
                                        Payment Method
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <div href="#" class="c-sidebar-item">
                                    <div class="card-body pt-1 pb-2">
                                        Mandatory Fields Progress: 35%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $this->load->view($content);
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class=" control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">Anything you want</div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All
            rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Maps -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false">
    </script>
    <script>
    function initialize() {
        var myLatlng = new google.maps.LatLng(-6.249777186004247, 106.84204062500002);
        var mapProp = {
            center: myLatlng,
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: "Hello World!",
            draggable: true,
        });
        document.getElementById("lat").value = -6.249777186004247;
        document.getElementById("lng").value = 106.84204062500002;
        // marker drag event
        google.maps.event.addListener(marker, "drag", function(event) {
            document.getElementById("lat").value = event.latLng.lat();
            document.getElementById("lng").value = event.latLng.lng();
        });

        //marker drag event end
        google.maps.event.addListener(marker, "dragend", function(event) {
            document.getElementById("lat").value = event.latLng.lat();
            document.getElementById("lng").value = event.latLng.lng();
            /* alert("lat=>" + event.latLng.lat());
        alert("long=>" + event.latLng.lng()); */
        });
    }

    google.maps.event.addDomListener(window, "load", initialize);
    </script>

    <!-- duplicate contact -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/jquery/jquery.min.js'); ?>">
    </script>
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

    <script>
    function duplicateContact() {
        $("#duplicate-contact").clone().appendTo("#row-contact");
        console.log("cuk");
    }

    //Timepicker
    $("#checkin_from").datetimepicker({
        format: "LT",
    });
    $("#checkin_until").datetimepicker({
        format: "LT",
    });
    $("#checkout_from").datetimepicker({
        format: "LT",
    });
    $("#checkout_until").datetimepicker({
        format: "LT",
    });
    /*
    $(function () {
      var $contact = $('#main-contact').clone();
      $('#row-contact').html($contact);
    });
    */
    </script>

</body>

</html>