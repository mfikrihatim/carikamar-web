<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $datas['count_panic_button']; ?></h3>

                            <p>Panic Button</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?php echo site_url('Welcome/DataPanicButton'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3><?php echo $datas['count_service']; ?></h3>

                            <p>Laporan Kerusakan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo site_url('Welcome/DataLaporanKerusakan'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              
            </div>
            <!-- /.row -->
            <!-- Main row -->
           
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

    <script>

    window.onload = function () {
        /** Your code here. **/
        if (localStorage.getItem("user_id") === null) {
            localStorage.setItem("user_id", "<?php echo $userlogin['id']; ?>");
            localStorage.setItem("username", "<?php echo $userlogin['username']; ?>");
            localStorage.setItem("fullname", "<?php echo $userlogin['fullname']; ?>");
            localStorage.setItem("id_level", "<?php echo $userlogin['id_level']; ?>");
            localStorage.setItem("token", "<?php echo $userlogin['token']; ?>");
        }
       
    
}
    </script>