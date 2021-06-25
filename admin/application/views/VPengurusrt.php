 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Pengurus RT</h1>
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
                         <div class="card-body">
                             <div style="margin-bottom: 10px;">
                                 <div class="col-lg-12">
                                     <a href="<?php echo site_url('Welcome/VFormAddPengurusRt'); ?>" class="btn btn-success">
                                         Tambah data
                                     </a>
                                 </div>
                             </div>
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Lengkap</th>
                                         <th>ID Jabatan</th>
                                         <th>ID Periode</th>
                                         <th>Status</th>
                                         <!-- <th>
                                             &nbsp;
                                         </th> -->
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        foreach ($datas as $index => $pengurus) {
                                            $index = $index + 1;

                                        ?>
                                         <tr>
                                             <td><?php echo $index ?></td>
                                             <td><?php echo $pengurus['nama_lengkap'] ?></td>
                                             <td><?php echo $pengurus['id_jabatan'] ?></td>
                                             <td><?php echo $pengurus['id_periode'] ?></td>
                                             <td><?php echo $pengurus['status'] ?></td>
                                             <td>
                                                 <a href="<?php echo site_url('Welcome/VFormUpdatePengurusRt?id=' . $pengurus['id']); ?>" class="btn btn-xs btn-info">
                                                     Edit
                                                 </a>
                                                 <form action="<?php echo site_url('Welcome/DeletePengurusRt?id=' . $pengurus['id']); ?>" method="POST">
                                                     <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                                     <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                                     <input type="hidden" name="username" id="username" value="" class="form-control">
                                                 </form>

                                             </td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
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