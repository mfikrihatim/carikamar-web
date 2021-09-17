 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Informasi Kontak</h1>
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
                             <form action="<?php echo site_url('Informasi_umum_kontak/UpdateDataInformasiUmumKontak'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Informasi Detail</label>
                                         <input type="hidden" name="id" class="form-control" value="<?php echo $detail['id']; ?>">

                                         <select class="form-control" name="informasi_umum_detail_id" required>

                                             <option value="">Pilih Informasi Detail</option>
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
                                         <label>Jenis Kontak</label>

                                         <input type="text" class="form-control" name="jenis_kontak" value="<?php echo $detail['jenis_kontak']; ?>" placeholder="Masukan Jenis Kontak">
                                     </div>
                                     <div class="form-group">
                                         <label>Nama Lengkap</label>

                                         <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $detail['nama_lengkap']; ?>" placeholder="Masukan nama Lengkap">
                                     </div>
                                     <div class="form-group">
                                         <label>Email</label>

                                         <input type="email" class="form-control" name="email" value="<?php echo $detail['email']; ?>" placeholder="Masukan Email">
                                     </div>
                                    
                                     <div class="form-group">
                                         <label>No Handphone</label>

                                         <input type="number" class="form-control" name="no_hp" value="<?php echo $detail['no_hp']; ?>" placeholder="Masukan No Handphone">
                                     </div>
                                     <div class="form-group">
                                         <label>No Telfon Kantor</label>

                                         <input type="number" class="form-control" name="no_telp_kantor" value="<?php echo $detail['no_telp_kantor']; ?>" placeholder="Masukan No Telfon Kantor">
                                     </div>
                                     <div class="form-group">
                                         <label>Extension</label>

                                         <input type="text" class="form-control" name="extension" value="<?php echo $detail['extension']; ?>" placeholder="Masukan Extension">
                                     </div>
                                     <div class="form-group">
                                         <label>Jabatam</label>

                                         <input type="text" class="form-control" name="jabatan" value="<?php echo $detail['jabatan']; ?>" placeholder="Masukan Jabatam">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Fullday</label>

                                         <input type="text" class="form-control" name="flag_fullday" value="<?php echo $detail['flag_fullday']; ?>" placeholder="Masukan Flag Fullday">
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