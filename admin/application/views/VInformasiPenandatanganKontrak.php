 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Informasi Penandatangan Kontrak</h1>
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
                                     <a href="<?php echo site_url('Informasi_penandatangan_kontrak/VFormAddInformasiPenandatanganKontrak'); ?>" class="btn btn-success">
                                         Tambah Data Informasi Penandatangan Kontrak
                                     </a>
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body table-responsive p-3" style="height: 100%;">
                                     <!-- <table class="table table-head-fixed text-nowrap"> -->
                                     <table id="example1" class="table table-bordered table-striped">
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <!-- <th>Kode Pegawai</th> -->
                                                 <th>Informasi Umum Detail</th>
                                                 <th>Nama Lengkap</th>
                                                 <th>Role Kontrak</th>
                                                 <th>Email</th>
                                                 <th>No Handphone</th>
                                                 <th>Status</th>
                                                 <th>Tools</th>
                                                 <!-- <th>
 													&nbsp;
 												</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                if (!empty($InformasiPenandatanganKontrak)) {
                                                    foreach ($InformasiPenandatanganKontrak as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                                     <tr>
                                                         <td><?php echo $index ?></td>
                                                         <td><?php echo $ReadDS->nama_properti; ?></td>
                                                         <td><?php echo $ReadDS->nama_lengkap; ?></td>
                                                         <td><?php echo $ReadDS->nama_role_kontrak; ?></td>
                                                         <td><?php echo $ReadDS->email; ?></td>
                                                         <td><?php echo $ReadDS->no_hp; ?></td>
                                                      
                                                         <td>
                                                             <?php if ($ReadDS->flag_menyetujui == "0") {
                                                                    echo 'Tidak Disetujui';
                                                                } else {
                                                                    echo 'Disetujui';
                                                                } ?></td>
                                                     

                                                         <td>
                                                             <a href="<?php echo site_url('Informasi_penandatangan_kontrak/DataInformasiPenandatanganKontrak/' . $ReadDS->id . '/view'); ?>" class="btn btn-xs btn-info">
                                                                 Edit
                                                             </a>
                                                             <a href="<?php echo site_url('Informasi_penandatangan_kontrak/DeleteDataInformasiPenandatanganKontrak/' . $ReadDS->id); ?>" class="btn btn-xs btn-danger">
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