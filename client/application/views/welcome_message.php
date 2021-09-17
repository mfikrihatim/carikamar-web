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
                                        <span class="badge badge-success">8</span>
                                    </div>
                                </a>
                                <a id="Property_detail" href="<?php echo site_url('Property_detail/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Property_detail") {
                                                                                                                        echo 'active';
                                                                                                                    } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Property Detail
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Property_facilities/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Property_facilities") {
                                                                                                                            echo 'active';
                                                                                                                        } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Property Facilities
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Room/index/').$CurrentUrl ?>" class="c-sidebar-item <?php if ($this->uri->segment(1) == "Room") {
                                                                                                            echo 'active';
                                                                                                        } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Room
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Room_facilities/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Room_facilities") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Room Facilities
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Photos/index/').$CurrentUrl ?>"
                                    class="c-sidebar-item <?php if ($this->uri->segment(1) == "Photos") { echo 'active'; } ?>">
                                    <div class="card-body pt-3 pb-3 mr-1">
                                        Photos
                                        <span class="badge badge-info">8</span>
                                    </div>
                                </a>
                                <a href="<?php echo site_url('Payment_Information/index/').$CurrentUrl ?>"
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
    <script type="text/javascript">
        let map;
        let marker;
        let geocoder;
        let responseDiv;
        let response;
        var lat_now = "<?= $lat ?>";
        var lng_now = "<?= $lng ?>";

        window.onload = function () {
            initMap();
        };

        function addMarkerInfo() {
            
            var MarkerMaps = async () => {
                var myLatlng = {lat: parseFloat(lat_now), lng: parseFloat(lng_now)}
                var icons = "https://i.ibb.co/1Qctzk1/map-marker.png"
                const marker = new google.maps.Marker({
                    position: myLatlng,
                    icon: {
                        url: icons,
                    },
                    map: map,
                    title: "Hello World!",
                    draggable: true,

                });
            }
            MarkerMaps()
        }

        function closeOtherInfo() {
            if (InforObj.length > 0) {
                InforObj[0].set("marker", null);
                InforObj[0].close();
                InforObj.length = 0;
            }
        }

        function clear() {
          marker.setMap(null);
          responseDiv.style.display = "none";
        }

        function geocode(request) {
          clear();
          geocoder
            .geocode(request)
            .then((result) => {
              const { results } = result;

              map.setCenter(results[0].geometry.location);
              marker.setPosition(results[0].geometry.location);
              marker.setMap(map);
              // responseDiv.style.display = "block";
              // response.innerText = JSON.stringify(result, null, 2);
              result.results.map((data, index) => {
                var html = `
                  <table><tbody>
                      <tr valign="top">
                        <td style="padding: 2px">
                          <span id="result-0-marker-img" style="display:block;background-image:url('https://developers-dot-devsite-v2-prod.appspot.com…s/documentation/utils/geocoder/images/markerA.png');width:20px;height:34px;"></span>
                        </td>
                        <td style="padding: 2px;">
                          <p class="result-formatted-address">
                          ${data.formatted_address}</p>
                          <p class="result-location">
                            Location:
                          ${data.geometry.location.lat()}.${data.geometry.location.lng()}</p>
                          <div id="details-result-0">
                        </div></td>
                      </tr>
                    </tbody></table>
                `  
                responseDiv.style.display = "block";
                // response.innerHTML = html;
                $('#lat_maps').val(data.geometry.location.lat())
                $('#lng_maps').val(data.geometry.location.lng())
                $('#alamat_jalan').text(data.formatted_address)
              })
              return result
            })
            .catch((e) => {
              alert("Geocode was not successful for the following reason: " + e);
            });
        }

        function initMap() {
            
            var centerCords = {
                lat: parseFloat(lat_now), lng: parseFloat(lng_now) 
            };
            
            map = new google.maps.Map(document.getElementById('googleMapJancok'), {
              center: centerCords,
              zoom: 16,
              // styles: sat_map_style,
              streetViewControl: false,
              mapTypeControl: false,
              overviewMapControl: false,
              zoomControl: false,
              fullscreenControl: false,
              // mapTypeId: 'roadmap'
            });
            addMarkerInfo();

            geocoder = new google.maps.Geocoder();

            const inputText = document.createElement("input");

            inputText.type = "text";
            inputText.placeholder = "Enter a location";
            // inputText.classList.add("input", "style: width: 100px;");

            const submitButton = document.createElement("input");

            submitButton.type = "button";
            submitButton.value = "Cari Lokasi";
            submitButton.classList.add("button", "btn-primary");

            const clearButton = document.createElement("input");

            clearButton.type = "button";
            clearButton.value = "Clear";
            clearButton.classList.add("button", "btn-secondary");
            response = document.createElement("div");
            response.id = "response";
            response.innerText = "";
            responseDiv = document.createElement("div");
            responseDiv.id = "response-container";
            responseDiv.appendChild(response);

            const instructionsElement = document.createElement("p");

            instructionsElement.id = "instructions";
            // instructionsElement.innerHTML ="<strong>Instructions</strong>: Enter an address in the textbox to geocode or click on the map to reverse geocode.";
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(inputText);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(submitButton);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(clearButton);
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(instructionsElement);
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(responseDiv);

            marker = new google.maps.Marker({
                map,
            });
            map.addListener("click", (e) => {
                geocode({ location: e.latLng });
            });
            submitButton.addEventListener("click", () =>
                geocode({ address: inputText.value })
            );
            clearButton.addEventListener("click", () => {
                clear();
            });

            clear();
        }
    </script>

</body>

</html>