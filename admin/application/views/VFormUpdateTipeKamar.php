 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Tipe Kamar</h1>
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
                             <form action="<?php echo site_url('Tipe_kamar/UpdateDataTipeKamar'); ?>" method="post" enctype="multipart/form-data">
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
                                         <label>Nama kamar</label>

                                         <input type="text" class="form-control" name="nama_kamar" value="<?php echo $detail['nama_kamar']; ?>" placeholder="Masukan nama Properti">
                                     </div>
                                     <div class="form-group">
                                         <label>Tipe Kamar</label>
                                        

                                         <select class="form-control" name="master_tipe_kamar_id" required>

                                             <option value="">Pilih Tipe Kamar</option>
                                             <?php
                                                foreach ($MasterTipeKamar as $ReadDS) {
                                                    if ($ReadDS->id == $detail['master_tipe_kamar_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_tipe_kamar; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe_kamar; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Tipe Kasur</label>
                                        

                                         <select class="form-control" name="master_tipe_kasur_id" required>

                                             <option value="">Pilih Tipe Kasur</option>
                                             <?php
                                                foreach ($MasterTipeKasur as $ReadDS) {
                                                    if ($ReadDS->id == $detail['master_tipe_kasur_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_tipe_kasur; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe_kasur; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Maksimum Kapasitas</label>

                                         <input type="text" class="form-control" name="maksimum_kapasitas" value="<?php echo $detail['maksimum_kapasitas']; ?>" placeholder="Masukan Maksimum Kapasitas">
                                     </div>
                                     <div class="form-group">
                                         <label>Maksimum Extra Bed</label>

                                         <input type="text" class="form-control" name="maksimum_extra_bed" value="<?php echo $detail['maksimum_extra_bed']; ?>" placeholder="Masukan Maksimum Extra Bed">
                                     </div>
                                     <div class="form-group">
                                         <label>Harga Extra Bed</label>

                                         <input type="text" class="form-control" name="harga_extra_bed" value="<?php echo $detail['harga_extra_bed']; ?>" placeholder="Masukan Harga Extra Bed">
                                     </div>
                                     <div class="form-group">
                                         <label>Lebar Kamar</label>

                                         <input type="text" class="form-control" name="ukuran_kamar_lebar" value="<?php echo $detail['ukuran_kamar_lebar']; ?>" placeholder="Masukan Lebar Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Panjang Kamar</label>

                                         <input type="text" class="form-control" name="ukuran_kamar_panjang" value="<?php echo $detail['ukuran_kamar_panjang']; ?>" placeholder="Masukan Panjang Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Harga Kamar</label>

                                         <input type="text" class="form-control" name="harga_kamar" value="<?php echo $detail['harga_kamar']; ?>" placeholder="Masukan Harga Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Include Breakfast</label>

                                         <input type="text" class="form-control" name="flag_included_breakfast" value="<?php echo $detail['flag_included_breakfast']; ?>" placeholder="Masukan Flag Include Breakfast">
                                     </div>
                                     <div class="form-group">
                                         <label>Jumlah Kamar</label>

                                         <input type="text" class="form-control" name="jumlah_kamar" value="<?php echo $detail['jumlah_kamar']; ?>" placeholder="Masukan Jumlah Kamar">
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