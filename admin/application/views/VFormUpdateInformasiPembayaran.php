 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Informasi Pembayaran</h1>
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
                             <form action="<?php echo site_url('Informasi_pembayaran/UpdateDataInformasiPembayaran'); ?>" method="post" enctype="multipart/form-data">
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
                                         <div class="form-group">
                                             <label>pilihan Metode</label>
                                             <select class="form-control" name="pilihan_metode" required>
                                                 <option value="">Pilihan Metode</option>
                                                 <option value="1" <?php if ($detail['pilihan_metode'] == "1") {
                                                                        echo 'selected';
                                                                    } ?>>Bank Transfer</option>
                                                 <option value="2" <?php if ($detail['pilihan_metode'] == "2") {
                                                                        echo 'selected';
                                                                    } ?>>VCC</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label>Master Bank</label>

                                             <select class="form-control" name="master_bank_id" required>

                                                 <option value="">Pilih Master Bank</option>
                                                 <?php
                                                    foreach ($MasterBank as $ReadDS) {
                                                        if ($ReadDS->id == $detail['master_bank_id']) {
                                                    ?>
                                                         <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama_bank; ?></option>
                                                     <?php } else { ?>
                                                         <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_bank; ?></option>
                                                 <?php
                                                        }
                                                    }
                                                    ?>
                                             </select>
                                         </div>

                                         <div class="form-group">
                                             <label>Nomor Akun</label>

                                             <input type="number" class="form-control" name="nomor_akun" value="<?php echo $detail['nomor_akun']; ?>" placeholder="Masukan Nomor Akun">
                                         </div>
                                         <div class="form-group">
                                             <label>Pemilik Akun</label>

                                             <input type="text" class="form-control" name="pemilik_akun" value="<?php echo $detail['pemilik_akun']; ?>" placeholder="Masukan Nama Pemilik Akun">
                                         </div>
                                         <div class="form-group">
                                             <label>Rencana Pembayaran</label>
                                             <select class="form-control" name="rencana_pembayaran" required>
                                                 <option value="">Pilihan Rencana Pembayaran</option>
                                                 <option value="1" <?php if ($detail['rencana_pembayaran'] == "1") {
                                                                        echo 'selected';
                                                                    } ?>>In Advance</option>
                                                 <option value="2" <?php if ($detail['rencana_pembayaran'] == "2") {
                                                                        echo 'selected';
                                                                    } ?>>Weekly</option>
                                                 <option value="3" <?php if ($detail['rencana_pembayaran'] == "3") {
                                                                        echo 'selected';
                                                                    } ?>>Monthly</option>
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