 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit User</h1>
                 </div>
                 <!-- <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Dashboard v1</li>
                     </ol>
                 </div>/.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="box">
                 <div class="box-header with-border">
                     <div class="row">
                         <div class="col-12">
                             <form action="<?php echo site_url('Welcome/EditInfo'); ?>" method="POST" role="form">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Nama Info</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="nama_info" type="text" class="form-control" value="<?php echo $datas['nama_info'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>deskripsi Info</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="deskripsi_info" type="text" class="form-control" value="<?php echo $datas['deskripsi_info'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat Lat</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="alamat_lat" type="text" class="form-control" value="<?php echo $datas['alamat_lat'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat lengkap</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="alamat_lengkap" type="text" class="form-control" value="<?php echo $datas['alamat_lengkap'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat longitude</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="alamat_longitude" type="text" class="form-control" value="<?php echo $datas['alamat_longitude'] ?>">
                                     </div>
                                     <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                     <input type="hidden" name="userlogin" id="username" value="" class="form-control">

                                     <div class="form-group">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
     </section>
 </div>

 <script>
     window.onload = function() {
         /** Your code here. **/

         if (localStorage.getItem("user_id") != null) {
             var userID = document.getElementsByName("user_id");
             var username = document.getElementsByName("userlogin");
             for (var x = 0; x < userID.length; x++) // comparison should be "<" not "<="
             {
                 userID[x].value = localStorage.getItem("user_id");
             }

             for (var x = 0; x < username.length; x++) // comparison should be "<" not "<="
             {
                 username[x].value = localStorage.getItem("username");
             }

         }


     }
 </script>