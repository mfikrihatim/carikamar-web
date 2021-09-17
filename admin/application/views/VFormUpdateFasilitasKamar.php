 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Fasilitas Kamar</h1>
                 </div>

             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.css'>
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="box">
                 <div class="box-header with-border">
                     <div class="row">
                         <div class="col-12">
                             <form action="<?php echo site_url('Fasilitas_kamar/UpdateDataFasilitasKamar'); ?>" method="post" enctype="multipart/form-data">
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
                                         <label>Fasilitas Kamar Detail</label>
                                        

                                         <select class="form-control" name="fasilitas_kamar_detail_id" required>

                                             <option value="">Pilih Fasilitas Kamar</option>
                                             <?php
                                                foreach ($MasterFasilitasKamarDetail as $ReadDS) {
                                                    if ($ReadDS->id == $detail['fasilitas_kamar_detail_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected><?php echo $ReadDS->nama; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama; ?></option>
                                             <?php
                                                    }
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">

                                     <div class="form-group">
                                         <label>Tipe Kamar</label>
                                    
                                         <select class="col-8 form-control" multiple="multiple" name="availability_tipe_kamar_id[]" id="my-select">
                                             <?php
                                                foreach ($TipeKamar as $ReadDS) {
                                                    if ($ReadDS->id == $detail['availability_tipe_kamar_id']) {
                                                ?>
                                                     <option value="<?php echo $ReadDS->id; ?>" selected>
                                                         <?php echo $ReadDS->nama_kamar; ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_kamar; ?>
                                                     </option>
                                             <?php
                                                    }
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
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js'></script>

    <script>
        $('#my-select').multiSelect();
    </script>
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