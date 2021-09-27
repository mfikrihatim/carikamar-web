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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="shortcut icon" href="<?php echo base_url('img/500px.png'); ?>">
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
                                <a class="dropdown-item" href="<?= site_url('Profile') ?>">Change Password</a>
                              </div>
                        </div>
                        <!-- <small><?php echo $this->session->userdata('email') ?></small> -->
                    </div>
                    <a class="nav-link mt-3" href="<?php echo site_url('Welcome/Logout'); ?>">
                        <i class="fa fa-power-off text-red"></i>
                        <span class="nav-link-text">Logout</span>
                    </a>
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
                                <a href="<?php echo site_url('Jenishotel/index'); ?>" class="c-sidebar-item" readonly>
                                    <div class="card-body pt-3 pb-3">
                                        <div class="c-sidebar-body">1. Property Information</div>
                                    </div>
                                </a>
                              
                                <a href="<?php echo site_url('General_information/index/').$CurrentUrl ?>" class="c-sidebar-item ">
                                    <div class="card-body pt-3 pb-3 mr-1 <?php if ($this->uri->segment(1) == "General_information") {
                                                                                echo 'active';
                                                                            } ?>">
                                        General Information
                                        <?php 
                                            $countSidebarGeneralInformation = $this->db->query("SELECT COUNT(*) as ttl_count FROM informasi_umum_detail WHERE id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countSidebarGeneralInformation) ? $countSidebarGeneralInformation->ttl_count != 0 ? "<span class='badge badge-success'>".$countSidebarGeneralInformation->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?>
                                    </div>
                                </a>
                                <a id="Property_detail" href="<?php echo site_url('Property_detail/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Property_detail") {
                                                                                                                        echo 'active';
                                                                                                                    } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Property Detail
                                        <?php 
                                            $countSidebarPropertyDetail = $this->db->query("SELECT COUNT(*) as ttl_count FROM properti_detail WHERE id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countSidebarPropertyDetail) ? $countSidebarPropertyDetail->ttl_count != 0 ? "<span class='badge badge-success'>".$countSidebarPropertyDetail->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Property_facilities/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Property_facilities") {
                                                                                                                            echo 'active';
                                                                                                                        } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Property Facilities
                                        <?php 
                                            $countPropertiFasilitas = $this->db->query("SELECT COUNT(*) as ttl_count FROM fasilitas_properti WHERE informasi_umum_detail_id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countPropertiFasilitas) ? $countPropertiFasilitas->ttl_count != 0 ? "<span class='badge badge-success'>".$countPropertiFasilitas->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?> 
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Room/index/').$CurrentUrl ?>" class="c-sidebar-item <?php if ($this->uri->segment(1) == "Room") {
                                                                                                            echo 'active';
                                                                                                        } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Room
                                        <?php 
                                            $countRoom = $this->db->query("SELECT COUNT(*) as ttl_count FROM tipe_kamar WHERE informasi_umum_detail_id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countRoom) ? $countRoom->ttl_count != 0 ? "<span class='badge badge-success'>".$countRoom->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Room_facilities/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Room_facilities") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Room Facilities
                                        <?php 
                                            $countFasilitasKamar = $this->db->query("SELECT COUNT(*) as ttl_count FROM fasilitas_kamar WHERE informasi_umum_detail_id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countFasilitasKamar) ? $countFasilitasKamar->ttl_count != 0 ? "<span class='badge badge-success'>".$countFasilitasKamar->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Photos/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Photos") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Photos
                                        <?php 
                                            $countPhotosSidebar = $this->db->query("SELECT COUNT(*) as ttl_count FROM foto_properti WHERE informasi_umum_detail_id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countPhotosSidebar) ? $countPhotosSidebar->ttl_count != 0 ? "<span class='badge badge-success'>".$countPhotosSidebar->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Payment_Information/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Payment_Information") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Payment Information
                                        <?php 
                                            $countPaymentInfo = $this->db->query("SELECT COUNT(*) as ttl_count FROM informasi_pembayaran WHERE informasi_umum_detail_id = '$CurrentUrl'")->row_object();
                                        ?>
                                        <?= !empty($countPaymentInfo) ? $countPaymentInfo->ttl_count != 0 ? "<span class='badge badge-success'>".$countPaymentInfo->ttl_count."</span>" : "<span class='badge badge-danger'>0</span>" : "<span class='badge badge-danger'>0</span>" ?> 
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
                            <div class="card">
                                <a href="" class="c-sidebar-item" readonly>
                                    <div class="card-body pt-3 pb-3">
                                        <div class="c-sidebar-body">1. Contract Agreement</div>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Contract/index/').$CurrentUrl ?>" class="c-sidebar-item ">
                                    <div class="card-body pt-3 pb-3 mr-1 <?php if ($this->uri->segment(1) == "Contract") {
                                                                                echo 'active';
                                                                            } ?>">
                                        Review Contract
                                        <span class='badge badge-danger'>0</span>
                                    </div>
                                </a>
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
        <!-- <footer class="main-footer">

            <strong>Copyright &copy; 2014-2021 <a href="#">CariKamar</a>.</strong>
            All
            rights
            reserved.
        </footer> -->
    </div>
    <!-- ./wrapper -->

    <!-- Maps -->
    <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script> -->
   <!--  <script>
    function initialize() {
        // var myLatlng = new google.maps.LatLng(-6.249777186004247, 106.84204062500002);
        var myLatlng = {lat: -6.249777186004247, lng: 106.84204062500002}

        var mapProp = {
            center: myLatlng,
            zoom: 5,
            // mapTypeId: google.maps.MapTypeId.ROADMAP,
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

    document.addEventListener("DOMContentLoaded", function(event) { 
      initialize()
    });

    // google.maps.event.addDomListener(window, "load", initialize);
    </script> -->

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
    <!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyAC-c39BanoTJLSBIS--wYX_4zlc4-IFYk"></script> -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyC87fftpSPt2ttOpm3kvzwdfyOmZX9Mu9A"></script>
    <!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyD07ZX25HHNAPLJMp0Kfld4BDu9D1RTltc"></script> -->
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