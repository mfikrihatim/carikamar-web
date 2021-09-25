<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.1.0/dist/css/adminlte.min.css'); ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <!-- <div class="card-header text-center">
            </div> --> 
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
                        <p class="" style="font-weight: 500; font-size: 20px;">Selamat Datang Kembali!</p>
                        <p class="" style="font-weight: 500; font-size: 15px;">Masuk untuk mengelola akomodasi Anda mulai dari memeriksa reservasi hingga mengelola ketersediaan kamar!!</p>
                    </div>
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <?php if ($this->session->flashdata('msg')): ?>
                    <br>
                    <div class="alert alert-warning" role="alert">
                      <?= $this->session->flashdata('pesan') ?>
                    </div>
                    <br>
                <?php endif ?>
                <form action="" method="post">
                    <label>Your email address</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <label>Password</label>
                    <div class="input-group mb-3">
                        <input type="password" name="password"  class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-md-6">
                            <p class="mb-1">
                                <a href="forgot-password.html">Lupa Password ?</a>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <!-- /.col -->
                        <div class="col-lg-12">
                             <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <p class="mb-1">
                            <span sty>Not yet a partner ? </span><a href="<?php echo site_url('Login/register'); ?>" class="text-center">Buat Akun Baru</a>
                        </p>
                    </div>
                </div>

                <!-- <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
                <!-- /.social-auth-links -->


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>">
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/AdminLTE-3.1.0/dist/js/adminlte.min.js'); ?>"></script>
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
</body>

</html>