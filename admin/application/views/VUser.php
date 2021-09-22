 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data User</h1>
             </div>
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
                             <div class="card">
                                 <div class="card-header">
                                     <a href="<?php echo site_url('Master_User/VFormAddUser'); ?>" class="btn btn-success">
                                         Tambah data
                                     </a>

                                     <div class="card-tools">
                                         <div class="input-group input-group-sm" style="width: 150px;">
                                             <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                             <div class="input-group-append">
                                                 <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body table-responsive p-3" style="height: 100%;">
                                     <!-- <table class="table table-head-fixed text-nowrap"> -->
                                     <table id="example1" class="table table-bordered table-striped">
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <!-- <th>Kode Pegawai</th> -->
                                                 <th>Nama</th>
                                                 <th>Email</th>
                                                 <th>Password</th>
                                                 <th>Foto</th>

                                                 <th>Tools</th>
                                                 <!-- <th>
 													&nbsp;
 												</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                if (!empty($DataUser)) {
                                                    foreach ($DataUser as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                                     <tr>
                                                         <td><?php echo $index ?></td>
                                                         <td><?php echo $ReadDS->nama; ?></td>
                                                         <td><?php echo $ReadDS->email; ?></td>
                                                         <td><?php echo $ReadDS->password; ?></td>
                                                         <td><img width="50px" height="50px" src="<?php echo $ReadDS->foto; ?>">
                                                         </td>
                                                         <td>
                                                             <a href="<?php echo site_url('Master_user/DataUser/' . $ReadDS->id . '/view'); ?>" class="btn btn-xs btn-info">
                                                                 Edit
                                                             </a>
                                                             <a href="<?php echo site_url('Master_user/DeleteDataUser/' . $ReadDS->id); ?>" class="btn btn-xs btn-danger">
                                                                 Delete
                                                             </a>

                                                         </td>
                                                     </tr>
                                             <?php
                                                    }
                                                } ?>

                                         </tbody>
                                     </table>
                                 </div>
                                 <!-- /.card-body -->
                             </div>
                             <!-- /.card -->
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
             var username = document.getElementsByName("username");
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