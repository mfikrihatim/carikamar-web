 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit Anggota Keluarga</h1>
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
                             <form action="<?php echo site_url('Welcome/EditAnggotaKeluarga'); ?>" method="PUT" role="form">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>No Urut</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="no_urut" type="number" class="form-control" value="<?php echo $datas['no_urut'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Jumlah Keluarga</label>
                                         <input name="jumlah_keluarga" type="number" class="form-control" value="<?php echo $datas['jumlah_keluarga'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Nama Anggota Keluarga</label>
                                         <input name="nama_anggota_keluarga" type="text" class="form-control" value="<?php echo $datas['nama_anggota_keluarga'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Kewarganegaraan</label>
                                         <select name="kewarganegaraan" class="form-control ">
                                             <option value="">
                                                 Pilih Kewarganegaraan
                                             </option>
                                             <option value="1">
                                                 WNI
                                             </option>
                                             <option value="2">
                                                 WNA
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Agama</label>
                                         <select name="id_agama" class="form-control ">
                                             <option value="">
                                                 Pilih Agama
                                             </option>
                                             <option value="1">
                                                 Islam
                                             </option>
                                             <option value="2">
                                                 Budha
                                             </option>
                                             <option value="3">
                                                 Katholik
                                             </option>
                                             <option value="4">
                                                 Protestan
                                             </option>
                                             <option value="5">
                                                 Konghuchu
                                             </option>
                                             <option value="6">
                                                 Hindu
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>NIK</label>
                                         <input name="nik" type="number" class="form-control" value="<?php echo $datas['nik'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Kitap</label>
                                         <input name="kitap" type="number" class="form-control" value="<?php echo $datas['kitap'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Negara</label>
                                         <select name="id_countries" class="form-control ">
                                             <option selected disabled>Pilih Negara</option>
                                             <?php
                                                foreach ($negara as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['id']; ?>"><?php echo $ReadDS['country_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kota</label>
                                         <select name="city_id" class="form-control ">
                                             <option selected disabled>Pilih Kota</option>
                                             <?php
                                                foreach ($kota as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['city_id']; ?>"><?php echo $ReadDS['city_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Status Dalam KK</label>
                                         <select name="id_agama" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1">
                                                 Kepala Keluarga
                                             </option>
                                             <option value="2">
                                                 Suami
                                             </option>
                                             <option value="3">
                                                 Istri
                                             </option>
                                             <option value="4">
                                                 Anak
                                             </option>
                                             <option value="5">
                                                 Menantu
                                             </option>
                                             <option value="6">
                                                 Cucu
                                             </option>
                                             <option value="7">
                                                 Orang Tua
                                             </option>
                                             <option value="8">
                                                 Mertua
                                             </option>
                                             <option value="9">
                                                 Famili Lain
                                             </option>
                                             <option value="10">
                                                 Pembantu
                                             </option>
                                             <option value="11">
                                                 Lainnya
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Pendidikan</label>
                                         <select name="id_pendidikan" class="form-control ">
                                             <option value="">
                                                 Pilih Pendidikan
                                             </option>
                                             <option value="1">
                                                 Tidak Sekolah
                                             </option>
                                             <option value="2">
                                                 SD
                                             </option>
                                             <option value="3">
                                                 SMP
                                             </option>
                                             <option value="4">
                                                 SMA/SMK
                                             </option>
                                             <option value="5">
                                                 D1
                                             </option>
                                             <option value="6">
                                                 D2
                                             </option>
                                             <option value="7">
                                                 D3
                                             </option>
                                             <option value="8">
                                                 S1
                                             </option>
                                             <option value="9">
                                                 S2
                                             </option>
                                         </select>
                                     </div>
                                     <!-- <div class="form-group">
                                         <label>Alamat Lengkap</label>
                                         <input name="alamat_lengkap" type="text" class="form-control" value="<?php echo $datas['alamat_lengkap'] ?>">
                                     </div> -->
                                     <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                     <input type="hidden" name="userlogin" id="username" value="" class="form-control">

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