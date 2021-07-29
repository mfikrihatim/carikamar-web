 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah Data</h1>
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
                             <form action="<?php echo site_url('Foto_properti/AddDataFotoProperti'); ?>" method="post"
                                 role="form" enctype="multipart/form-data">
                                 <div class="card-body">
                                 <div class="form-group">
                                         <label>Pilih Informasi Umum Detail</label>
                                         <select class="form-control" name="informasi_umum_detail_id" required>
                                             <option value="">Pilih Informasi Umum Detail</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($InformasiUmumDetail as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div>
 										<label>Upload Foto</label>
 										<input type="file" name="fotoProperti[]" multiple><br>
 									</div>
                                     <div class="form-group">
                                         <label>Foto Tipe</label>
                                         <select class="form-control" name="foto_tipe_id" required>
                                             <option value="">Pilih Foto tipe</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($FotoTipe as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe_foto; ?></option>
                                             <?php
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
// window.onload = function() {
//     /** Your code here. **/

//     if (localStorage.getItem("user_id") != null) {
//         var userID = document.getElementsByName("user_id");
//         var username = document.getElementsByName("userlogin");
//         for (var x = 0; x < userID.length; x++) // comparison should be "<" not "<="
//         {
//             userID[x].value = localStorage.getItem("user_id");
//         }

//         for (var x = 0; x < username.length; x++) // comparison should be "<" not "<="
//         {
//             username[x].value = localStorage.getItem("username");
//         }

//     }


// }
 </script>