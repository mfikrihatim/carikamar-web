 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Informasi Detail</h1>
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
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-header">
                                     <a href="<?php echo site_url('Informasi_umum_detail/VFormAddInformasiUmumDetail'); ?>" class="btn btn-success">
                                         Tambah Informasi Detail
                                     </a>
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body table-responsive p-3" style="height: 100%;">
                                     <!-- <table class="table table-head-fixed text-nowrap"> -->
                                     <table id="example1" class="table table-bordered table-striped">
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Nama Tipe</th>
                                                 <th>Nama Properti</th>
                                                 <th>Nama Badan Hukum</th>
                                                 <th>Lokasi</th>
                                                 <th>Alamat Jalan</th>
                                                 <th>Kode Pos</th>
                                                 <th>Nomer Telfon</th>
                                                 <th>Jumlah Kamar</th>
                                                 <th>Flag Chanel Manager</th>
                                                 <th>Tools</th>
                                                 <!-- <th>
 													&nbsp;
 												</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                if (!empty($InformasiUmumDetail)) {
                                                    foreach ($InformasiUmumDetail as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                                     <tr>
                                                         <td><?php echo $index ?></td>

                                                         <td><?php echo $ReadDS->nama_tipe; ?></td>
                                                         <td><?php echo $ReadDS->nama_properti; ?></td>
                                                         <td><?php echo $ReadDS->nama_badan_hukum; ?></td>
                                                         <td><?php echo $ReadDS->lokasi_maps; ?></td>
                                                         <td><?php echo $ReadDS->alamat_jalan; ?></td>
                                                         <td><?php echo $ReadDS->kode_pos; ?></td>
                                                         <td><?php echo $ReadDS->no_telp; ?></td>
                                                         <td><?php echo $ReadDS->jumlah_kamar; ?></td>
                                                         <td><?php echo $ReadDS->flag_chanel_manager; ?></td>
                                                         <td>
                                                             <a href="<?php echo site_url('Informasi_umum_detail/DataInformasiUmumDetail/' . $ReadDS->id . '/view'); ?>" class="btn btn-xs btn-info">
                                                                 Edit
                                                             </a>
                                                             <a href="<?php echo site_url('Informasi_umum_detail/DeleteDataInformasiUmumDetail/' . $ReadDS->id); ?>" class="btn btn-xs btn-danger">
                                                                 Delete
                                                             </a>

                                                         </td>
                                                     </tr>
                                             <?php
                                                    }
                                                } ?>

                                         </tbody>
                                     </table>
                                 </div>
                                 <!-- /.card-body -->
                             </div>
                             <!-- /.card -->
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