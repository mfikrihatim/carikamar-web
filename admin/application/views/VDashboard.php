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
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

    <script>
    window.onload = function() {
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