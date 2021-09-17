 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Data Tipe Foto</h1>
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
                             <form action="<?php echo site_url('Foto_tipe/UpdateDataFotoTipe'); ?>"
                                 method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Nama Tipe Foto</label>
                                         <input type="hidden" name="id" value="<?php echo $detail['id']; ?>"
                                             class="form-control">
                                         <input type="text" class="form-control" name="nama_tipe_foto"
                                             value="<?php echo $detail['nama_tipe_foto']; ?>" placeholder="Masukan nama tipe foto">
                                     </div>
                                     <div class="form-group">
                                             <label>Flag Foto</label>
                                             <select class="form-control" name="flag_foto" required>
                                                 <option value="">Pilihan Flag Foto</option>
                                                 <option value="1" <?php if ($detail['flag_foto'] == "1") {
                                                                        echo 'selected';
                                                                    } ?>>Foto Properti</option>
                                                 <option value="2" <?php if ($detail['flag_foto'] == "2") {
                                                                        echo 'selected';
                                                                    } ?>>Foto Kamar</option>
                                                
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