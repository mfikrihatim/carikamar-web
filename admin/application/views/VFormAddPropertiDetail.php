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
                                         <label>Mata Uang</label>
                                         <input name="mata_uang" type="text" class="form-control"
                                             placeholder="Mata Uang">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Kawasan</label>
                                         <input name="flag_kawasan" type="checkbox" class="form-control"
                                             placeholder="Flag Kawasan">
                                     </div>
                                     <div class="form-group">
                                         <label>Waktu Checkin</label>
                                         <input name="waktu_checkin" type="datetime" class="form-control"
                                             placeholder="Waktu Checkin">
                                     </div>
                                     <div class="form-group">
                                         <label>Waktu Checkout</label>
                                         <input name="waktu_checkout" type="datetime" class="form-control"
                                             placeholder="Waktu Checkout">
                                     </div>
                                     <div class="form-group">
                                         <label>Jarak Ke Kota</label>
                                         <input name="jarak_ke_kota" type="text" class="form-control"
                                             placeholder="Jarak Ke Kota">
                                     </div>
                                     <div class="form-group">
                                         <label>Jumlah Lantai</label>
                                         <input name="jumlah_lantai" type="numeric" class="form-control"
                                             placeholder="Jumlah Lantai">
                                     </div>
                                     <div class="form-group">
                                         <label>Biaya Sarapan Tambahan</label>
                                         <input name="biaya_sarapan_tambahan" type="text" class="form-control"
                                             placeholder="Biaya Sarapan Tambahan">
                                     </div>
                                     <!-- <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                     <input type="hidden" name="userlogin" id="userlogin" value="" class="form-control"> -->
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