 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Properti Detail</h1>
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
                             <form action="<?php echo site_url('Properti_Detail/UpdateDataPropertiDetail'); ?>"
                                 method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <!-- <div class="form-group">
                                         <label>Fasilitas Kamar Header</label>
                                         <input type="hidden" name="id" class="form-control"
                                             value="<?php echo $detail['id']; ?>">

                                         <select class="form-control" name="fasilitas_kamar_header_id" required>

                                             <option value="">Pilih Fasilitas Kamar Header</option>
                                             <?php
                                                foreach ($DataFasilitasHeader as $ReadDS) {
                                                    if ($ReadDS->id == $detail['fasilitas_kamar_header_id']) {
                                                ?>
                                             <option value="<?php echo $ReadDS->id; ?>" selected>
                                                 <?php echo $ReadDS->nama; ?></option>
                                             <?php } else { ?>
                                             <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama; ?>
                                             </option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div> -->
                                     <!-- Password -->
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Mata Uang</label>
                                                 <input name="mata_uang" type="text" class="form-control"
                                                     value="<?php echo $detail['mata_uang']; ?>">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Flag Kawasan</label>
                                                 <div class="input-group">
                                                     <label class="form-check-label ml-4 mr-3">
                                                         <input
                                                             class="form-check-input <?php echo $detail['mata_uang']; 'checked' ?>"
                                                             type="checkbox" name="flag_kawasan" value="1" />
                                                         1
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
                                                     value="<?php echo $detail['waktu_checkin']; ?>">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Waktu Checkout</label>
                                                 <input name="waktu_checkout" type="time" class="form-control"
                                                     value="<?php echo $detail['waktu_checkout']; ?>">
                                             </div>
                                         </div>
                                     </div>
                                     <div class=" row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Jarak Ke Kota</label>
                                                 <input name="jarak_ke_kota" type="text" class="form-control"
                                                     value="<?php echo $detail['jarak_ke_kota']; ?>">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Jumlah Lantai</label>
                                                 <input name="jumlah_lantai" type="numeric" class="form-control"
                                                     value="<?php echo $detail['jumlah_lantai']; ?>">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label>Biaya Sarapan Tambahan</label>
                                         <input name="biaya_sarapan_tambahan" type="text" class="form-control"
                                             value="<?php echo $detail['biaya_sarapan_tambahan']; ?>">
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