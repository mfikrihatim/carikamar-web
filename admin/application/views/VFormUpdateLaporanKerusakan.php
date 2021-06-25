 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Laporan Kerusakan</h1>
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
                             <form action="<?php echo site_url('Welcome/EditLaporanKerusakan'); ?>" method="POST" role="form" enctype='multipart/form-data'>
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Deskripsi</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="deskripsi" type="text" class="form-control" placeholder="Deskripsi" value="<?php echo $datas['deskripsi'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Fasilitas</label>
                                         <select name="fasilitas" class="form-control ">
                                             <option value="">
                                                 Pilih Fasilitas
                                             </option>
                                             <option value="Rumah">
                                                 Rumah
                                             </option>
                                             <option value="Lingkungan">
                                                 Lingkungan
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Lokasi</label>
                                         <input name="lokasi" type="text" class="form-control" placeholder="Lokasi" value="<?php echo $datas['lokasi'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat Perumahan</label>
                                         <input name="alamat_perumahan" type="text" class="form-control" placeholder="Alamat Perumahan" value="<?php echo $datas['alamat_perumahan'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Blok</label>
                                         <input name="blok" type="text" class="form-control" placeholder="Blok" value="<?php echo $datas['blok'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>No Rumah</label>
                                         <input name="no_rumah" type="text" class="form-control" placeholder="No Rumah" value="<?php echo $datas['no_rumah'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <div class="col-sm-2">
                                            <?php 
                                                $images = $datas['foto'];
                                                if($images != null){
                                                    $imageList = json_decode($images);
                                                    foreach($imageList as $image){
                                                        echo "<img src='$image' class='img-fluid mb-2' alt='white sample' />";
                                                    }
                                                }
                                                //  
                                         
                                            ?>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputFile">File input</label>
                                         <br>
                                         <input type="file" name="files[]" multiple />

                                         <!-- <p class="help-block">Example block-level help text here.</p> -->
                                     </div>

                                     <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                     <input type="hidden" name="username" id="username" value="" class="form-control">

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
             var username = document.getElementsByName("username");
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