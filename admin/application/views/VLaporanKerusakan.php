 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Laporan Kerusakan</h1>
             </div>
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
                         <div class="card-body">
                             <div style="margin-bottom: 10px;">
                                 <div class="col-lg-12">
                                     <a href="<?php echo site_url('Welcome/VFormAddLaporanKerusakan'); ?>" class="btn btn-success">
                                         Tambah data
                                     </a>
                                 </div>
                             </div>
                             
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Deskripsi</th>
                                         <th>Fasilitas</th>
                                         <th>Lokasi</th>
                                         <th>Alamat Perumahan</th>
                                         <th>Blok</th>
                                         <th>No Rumah</th>
                                         <th>
                                             &nbsp;
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        foreach ($datas as $index => $laporan) {
                                            $index = $index + 1;
                                        ?>
                                         <tr>
                                             <td><?php echo $index ?></td>
                                             <td><?php echo $laporan['deskripsi'] ?></td>
                                             <td><?php echo $laporan['fasilitas'] ?></td>
                                             <td><?php echo $laporan['lokasi'] ?></td>
                                             <td><?php echo $laporan['alamat_perumahan'] ?></td>
                                             <td><?php echo $laporan['blok'] ?></td>
                                             <td><?php echo $laporan['no_rumah'] ?></td>
                                             <td>
                                                 <a href="<?php echo site_url('Welcome/VFormUpdateLaporanKerusakan?id=' . $laporan['id']); ?>" class="btn btn-xs btn-info">
                                                     Edit
                                                 </a>
                                                 <form action="<?php echo site_url('Welcome/DeleteLaporanKerusakan?id=' . $laporan['id']); ?>" method="POST">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                                    <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                                    <input type="hidden" name="username" id="username" value="" class="form-control">
            
                                                </form>
                                             </td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
     </section>
 </div>
 <script>
 window.onload = function () {
        /** Your code here. **/
 
        if (localStorage.getItem("user_id") != null) {
            var userID = document.getElementsByName("user_id");
            var username = document.getElementsByName("username");
            for(var x=0; x < userID.length; x++)   // comparison should be "<" not "<="
                {
                    userID[x].value = localStorage.getItem("user_id");                   
                }

                for(var x=0; x < username.length; x++)   // comparison should be "<" not "<="
                {
                    username[x].value = localStorage.getItem("username");                   
                }
     
        }
       
    
}
 </script>