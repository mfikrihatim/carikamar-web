 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah Data Properti Detail</h1>
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
                             <form action="<?php echo site_url('Properti_Detail/AddDataPropertiDetail'); ?>"
                                 method="post" role="form">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Pilih Informasi Umum </label>
                                         <select class="form-control" name="informasi_umum_detail_id" required>
                                             <option value="">Pilih Informasi Umum</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($DataInformasiUmumDetail as $ReadDS) {
                                                ?>
                                             <option value="<?php echo $ReadDS->id; ?>">
                                                 <?php echo $ReadDS->nama_properti; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Mata Uang</label>
                                                 <input name="mata_uang" type="text" class="form-control"
                                                     placeholder="Mata Uang">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Flag Kawasan</label>
                                                 <div class="input-group">
                                                     <label class="form-check-label ml-4 mr-3">
                                                         <input class="form-check-input" type="checkbox"
                                                             name="flag_kawasan" value="1" id="submit" /> 1
                                                     </label>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Waktu Checkin</label>
                                                 <input name="waktu_checkin" type="time" class="form-control"
                                                     placeholder="Waktu Checkin">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Waktu Checkout</label>
                                                 <input name="waktu_checkout" type="time" class="form-control"
                                                     placeholder="Waktu Checkout">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Jarak Ke Kota</label>
                                                 <input name="jarak_ke_kota" type="text" class="form-control"
                                                     placeholder="Jarak Ke Kota">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Jumlah Lantai</label>
                                                 <input name="jumlah_lantai" type="numeric" class="form-control"
                                                     placeholder="Jumlah Lantai">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label>Biaya Sarapan Tambahan</label>
                                         <input name="biaya_sarapan_tambahan" type="text" class="form-control"
                                             placeholder="Biaya Sarapan Tambahan">
                                     </div>
                                     <div class="form-group">
                                         <label>Pilih Alasan Batal </label>
                                         <select class="form-control" name="master_cancel_id" required>
                                             <option value="">Pilih Informasi Umum</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($DataPropertiDetailMasterCancel as $ReadDS) {
                                                ?>
                                             <option value="<?php echo $ReadDS->id; ?>">
                                                 <?php echo $ReadDS->nama; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Pilih Jenis </label>
                                         <select class="form-control" name="master_style_id" required>
                                             <option value="">Pilih Informasi Umum</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($DataPropertiDetailMasterStyle as $ReadDS) {
                                                ?>
                                             <option value="<?php echo $ReadDS->id; ?>">
                                                 <?php echo $ReadDS->nama; ?></option>
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