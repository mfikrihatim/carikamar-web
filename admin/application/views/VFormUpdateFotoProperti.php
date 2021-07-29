 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Data Foto Properti</h1>
                 </div>

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
                             <form action="<?php echo site_url('Foto_properti/UpdateDataFotoProperti'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Informasi Umum Detail</label>
                                         <input type="hidden" name="id" class="form-control" value="<?php echo $detail['id']; ?>">

                                         <select class="form-control" name="informasi_umum_detail_id" required>

                                             <option value="">Pilih Informasi Umum Detail</option>
                                             <?php
                                                foreach ($InformasiUmumDetail as $ReadDS) {
                                                    if ($ReadDS->id == $detail['informasi_umum_detail_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_properti; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Foto Sebelumnya</label><br>
                                         <div class="form-group">
                                             <?php

                                                foreach ($detail['foto'] as $fotos) {


                                                ?>
                                                 <img src="<?php echo $fotos;  ?>" width="200px" height="200px" style="border-radius: 100%;"><br>
                                             <?php
                                                }
                                                ?>
                                             <div>
                                                 <label>Product Picture Detail</label>
                                                 <input type="file" name="fotoProperti[]" multiple><br>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label>Tipe Foto</label>


                                             <select class="form-control" name="foto_tipe_id" required>

                                                 <option value="">Pilih Tipe Foto</option>
                                                 <?php
                                                    foreach ($FotoTipe as $ReadDS) {
                                                        if ($ReadDS->id == $detail['foto_tipe_id']) {
                                                    ?>
                                                         <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_tipe_foto; ?></option>
                                                     <?php } else { ?>
                                                         <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe_foto; ?></option>
                                                 <?php
                                                        }
                                                    }
                                                    ?>
                                             </select>
                                         </div>
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