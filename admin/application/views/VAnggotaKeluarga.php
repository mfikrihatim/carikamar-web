 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Anggota Keluarga</h1>
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
                                     <a href="<?php echo site_url('Welcome/VFormAddAnggotaKeluarga'); ?>" class="btn btn-success">
                                         Tambah data
                                     </a>
                                 </div>
                             </div>
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>ID User</th>
                                         <th>No Urut</th>
                                         <th>Jumlah Keluarga</th>
                                         <th>Nama Anggota Keluarga</th>
                                         <th>Kewarganegaraan</th>
                                         <th>Agama</th>
                                         <th>NIK</th>
                                         <th>KITAP</th>
                                         <th>Negara</th>
                                         <th>Kota Lahir</th>
                                         <th>Status Dalam KK</th>
                                         <th>Pendidikan</th>
                                         <th>Jenis Pekerjaan</th>
                                         <th>Pekerjaan</th>
                                         <!-- <th>
                                             &nbsp;
                                         </th> -->
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        foreach ($datas as $index => $AK) {
                                            $index = $index + 1;

                                        ?>
                                         <tr>
                                             <td><?php echo $index ?></td>
                                             <td><?php echo $AK['id_user'] ?></td>
                                             <td><?php echo $AK['no_urut'] ?></td>
                                             <td><?php echo $AK['jumlah_keluarga'] ?></td>
                                             <td><?php echo $AK['nama_anggota_keluarga'] ?></td>
                                             <td><?php echo $AK['kewarganegaraan'] ?></td>
                                             <td><?php echo $AK['id_agama'] ?></td>
                                             <td><?php echo $AK['nik'] ?></td>
                                             <td><?php echo $AK['kitap'] ?></td>
                                             <td><?php echo $AK['id_countries'] ?></td>
                                             <td><?php echo $AK['id_city_tempat_lahir'] ?></td>
                                             <td><?php echo $AK['id_status_dalam_kk'] ?></td>
                                             <td><?php echo $AK['id_pendidikan'] ?></td>
                                             <td><?php echo $AK['id_jenis_pekerjaan'] ?></td>
                                             <td><?php echo $AK['nama_jenis_pekerjaan'] ?></td>
                                             <!-- <td>3</td>
                                         <td>4</td>
                                         <td>5</td> -->
                                             <td>
                                                 <div class="row">
                                                     <a href="<?php echo site_url('Welcome/VFormUpdateAnggotaKeluarga?id=' . $AK['id']); ?>" class="btn btn-xs btn-info">
                                                         Edit
                                                     </a>
                                                     <form action="<?php echo site_url('Welcome/DeleteAnggotaKeluarga?id=' . $AK['id']); ?>" method="POST">
                                                         <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                                         <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                                         <input type="hidden" name="username" id="username" value="" class="form-control">
                                                     </form>
                                                 </div>
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