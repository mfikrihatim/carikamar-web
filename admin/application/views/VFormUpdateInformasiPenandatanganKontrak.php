 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Infomasi Penandatangan Kontrak</h1>
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
                             <form action="<?php echo site_url('Informasi_penandatangan_kontrak/UpdateDataInformasiPenandatanganKontrak'); ?>" method="post" enctype="multipart/form-data">
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
                                     <!-- Password -->
                                     <div class="form-group">
                                             <label>Nama Lengkap</label>

                                             <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $detail['nama_lengkap']; ?>" placeholder="Masukan Nama Lengkap">
                                         </div>
                                         <div class="form-group">
                                             <label>Master Role Kontrak</label>

                                             <select class="form-control" name="role_kontrak_id" required>

                                                 <option value="">Pilih Role Kontrak</option>
                                                 <?php
                                                    foreach ($MasterRoleKontrak as $ReadDS) {
                                                        if ($ReadDS->id == $detail['role_kontrak_id']) {
                                                    ?>
                                                         <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_role_kontrak; ?></option>
                                                     <?php } else { ?>
                                                         <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_role_kontrak; ?></option>
                                                 <?php
                                                        }
                                                    }
                                                    ?>
                                             </select>
                                         </div>

                                         <div class="form-group">
                                             <label>Email</label>

                                             <input type="email" class="form-control" name="email" value="<?php echo $detail['email']; ?>" placeholder="Masukan Email">
                                         </div>
                                         <div class="form-group">
                                             <label>No Handphone</label>

                                             <input type="number" class="form-control" name="no_hp" value="<?php echo $detail['no_hp']; ?>" placeholder="Masukan no handphone">
                                         </div>
                                         <div class="form-group">
                                             <label>Flag Menyetujui</label>
                                             <select class="form-control" name="flag_menyetujui" required>
                                                 <option value="">Pilihan Rencana Pembayaran</option>
                                                 <option value="1" <?php if ($detail['flag_menyetujui'] == "1") {
                                                                        echo 'selected';
                                                                    } ?>>Ya</option>
                                                 <option value="0" <?php if ($detail['flag_menyetujui'] == "0") {
                                                                        echo 'selected';
                                                                    } ?>>TIDAK</option>
                                                
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