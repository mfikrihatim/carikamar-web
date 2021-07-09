 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Informasi Detail</h1>
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
                             <form action="<?php echo site_url('Informasi_umum_detail/UpdateDataInformasiUmumDetail'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Tipe Properti</label>
                                         <input type="hidden" name="id" class="form-control" value="<?php echo $detail['id']; ?>">

                                         <select class="form-control" name="tipe_properti_id" required>

                                             <option value="">Pilih Tipe Properti</option>
                                             <?php
                                                foreach ($DataTipeProperti as $ReadDS) {
                                                    if ($ReadDS->id == $detail['tipe_properti_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_tipe; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <!-- Password -->
                                     <div class="form-group">
                                         <label>Nama Properti</label>

                                         <input type="text" class="form-control" name="nama_properti" value="<?php echo $detail['nama_properti']; ?>" placeholder="Masukan nama Properti">
                                     </div>
                                     <div class="form-group">
                                         <label>Nama Badan Hukum</label>

                                         <input type="text" class="form-control" name="nama_badan_hukum" value="<?php echo $detail['nama_badan_hukum']; ?>" placeholder="Masukan nama Badan Hukum">
                                     </div>
                                     <div class="form-group">
                                         <label>Lokasi Maps</label>

                                         <input type="text" class="form-control" name="lokasi_maps" value="<?php echo $detail['lokasi_maps']; ?>" placeholder="Masukan Lokasi Maps">
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat Jalan</label>

                                         <input type="text" class="form-control" name="alamat_jalan" value="<?php echo $detail['alamat_jalan']; ?>" placeholder="Masukan Alamat Jalan">
                                     </div>
                                     <div class="form-group">
                                         <label>Kode Pos</label>

                                         <input type="text" class="form-control" name="kode_pos" value="<?php echo $detail['kode_pos']; ?>" placeholder="Masukan Kode Pos">
                                     </div>
                                     <div class="form-group">
                                         <label>No Telp</label>

                                         <input type="text" class="form-control" name="no_telp" value="<?php echo $detail['no_telp']; ?>" placeholder="Masukan No Telp">
                                     </div>
                                     <div class="form-group">
                                         <label>Jumlah Kamar</label>

                                         <input type="text" class="form-control" name="jumlah_kamar" value="<?php echo $detail['jumlah_kamar']; ?>" placeholder="Masukan Jumlah Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Chanel Manager</label>

                                         <input type="text" class="form-control" name="flag_chanel_manager" value="<?php echo $detail['flag_chanel_manager']; ?>" placeholder="Masukan Flag Chanel Manager">
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