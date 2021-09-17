 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Review Kontrak</h1>
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
                             <form action="<?php echo site_url('Review_Kontrak/UpdateDataReviewKontrak'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Pilih Penandatangan Kontrak</label>
                                         <input type="hidden" name="id" class="form-control" value="<?php echo $detail['id']; ?>">

                                         <select class="form-control" name="informasi_penandatangan_kontrak_id" required>

                                             <option value="">Pilih Penandatangan Kontrak</option>
                                             <?php
                                                foreach ($InformasiPenandatanganKontrak as $ReadDS) {
                                                    if ($ReadDS->id == $detail['informasi_penandatangan_kontrak_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_lengkap; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_lengkap; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Perjanjian Kontrak</label>

                                         <select class="form-control" name="perjanjian_kontrak_id" required>

                                             <option value="">Pilih Perjanjian Kontrak</option>
                                             <?php
                                                foreach ($MasterPerjanjianKontrak as $ReadDS) {
                                                    if ($ReadDS->id == $detail['perjanjian_kontrak_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->deskripsi; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->deskripsi; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Status</label>
                                         <select class="form-control" name="flag_menyetujui" required>
                                             <option value="">Pilihan Status</option>
                                             <option value="1" <?php if ($detail['flag_menyetujui'] == "1") {
                                                                    echo 'selected';
                                                                } ?>>Disetujui</option>
                                             <option value="2" <?php if ($detail['flag_menyetujui'] == "0") {
                                                                    echo 'selected';
                                                                } ?>>Tidak Di setujui</option>

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