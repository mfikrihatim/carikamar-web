<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Daftar Akun</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
</head>

<body class="hold-transition register-page" style="background-color: #19599e">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="<?php echo base_url('assets/AdminLTE-3.1.0/index2.html'); ?>" class="h1"><b>CARIKAMAR</a>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <p class="" style="font-weight: 500; font-size: 20px;">Ayo Daftarkan Akomodasi !</p>
                        <p class="" style="font-weight: 500; font-size: 15px;">Daftar untuk mengelola akomodasi Anda mulai dari memeriksa reservasi hingga mengelola ketersediaan kamar!!</p>
                    </div>
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <?php if ($this->session->flashdata('msg')): ?>
                    <br>
                    <div class="alert <?= $this->session->flashdata('msg') == 'error' ? "alert-warning" : "alert-primary" ?>" role="alert">
                      <?= $this->session->flashdata('pesan') ?>
                    </div>
                    <br>
                <?php endif ?>
                <form action="<?php echo site_url('Login/buat_akun_baru'); ?>" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email"  name="email" class="form-control" placeholder="Email" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="retype_password" class="form-control" placeholder="Retype password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <!-- /.col -->
                        <div class="col-lg-12">
                             <button type="submit" name="login" class="btn btn-primary btn-block">Daftar Sekarang</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br>
                <a href="<?php echo site_url('Login/index'); ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('AdminLTE-3.1.0/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('AdminLTE-3.1.0/dist/js/adminlte.min.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php if ($this->session->flashdata('msg')) { ?>
        <script type="text/javascript">
            $(document).ready(function() {
                swal({
                    title: "<?= strtoupper($this->session->flashdata('msg')) ?>",
                    text: "<?= $this->session->flashdata('pesan') ?>",
                    type: "<?= $this->session->flashdata('msg') ?>",
                    timer: 5000,
                })
            })
        </script>
    <?php } ?>
    <script>
    	$(document).ready(function(){
    	   	$('#submit').click(function() {
    			var pass = $('#pass').val();
    			var pass2 = $('#pass2').val();						
    			if (pass != pass2) {				
    				alert("password tidak sama!");
    			}
    		});
    	});
    </script>
</body>

</html>