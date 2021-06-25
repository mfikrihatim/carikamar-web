 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit User</h1>
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
                             <form action="<?php echo site_url('Welcome/EditUser'); ?>" method="PUT" role="form">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
                                         <input name="username" type="text" class="form-control" value="<?php echo $datas['username'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input name="password" type="password" class="form-control" value="<?php echo $datas['password'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Fullname</label>
                                         <input name="fullname" type="text" class="form-control" value="<?php echo $datas['fullname'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>ID Level</label>
                                         <select name="id_level" class="form-control ">
                                             <option value="">
                                                 Pilih ID Level
                                             </option>
                                             <option value="1" <?php if(isset($datas['id_level']) && $datas['id_level'] == 1){ echo 'selected'; }  ?>>
                                                 Admin
                                             </option>
                                             <option value="2" <?php if(isset($datas['id_level']) && $datas['id_level'] == 2){ echo 'selected'; }  ?>>
                                                 Warga
                                             </option>
                                             <option value="3" <?php if(isset($datas['id_level']) && $datas['id_level'] == 3){ echo 'selected'; }  ?>>
                                                 Ketua RT
                                             </option>
                                             <option value="4" <?php if(isset($datas['id_level']) && $datas['id_level'] == 4){ echo 'selected'; }  ?>>
                                                 Anonim
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>No HP</label>
                                         <input name="nohp" type="number" class="form-control" value="<?php echo $datas['nohp'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Email</label>
                                         <input name="email" type="email" class="form-control" value="<?php echo $datas['email'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Status</label>
                                         <select name="status" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="0" <?php if(isset($datas['status']) && $datas['status'] == 0){ echo 'selected'; }  ?>>
                                                 Pending
                                             </option>
                                             <option value="1" <?php if(isset($datas['status']) && $datas['status'] == 1){ echo 'selected'; }  ?>>
                                                 Aktif
                                             </option>
                                             <option value="2" <?php if(isset($datas['status']) && $datas['status'] == 2){ echo 'selected'; }  ?>>
                                                 Tidak Aktif
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Provinsi</label>
                                         <select name="prov_id" class="form-control ">
                                             <option selected disabled>Pilih Provinsi</option>
                                             <?php
                                                foreach ($provinsi as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['prov_id']; ?>" <?php if(isset($datas['prov_id']) && $datas['prov_id'] == $ReadDS['prov_id']){ echo 'selected'; }  ?>><?php echo $ReadDS['prov_name']; ?></option>
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
                                                 <option value="<?php echo $ReadDS['city_id']; ?>" <?php if(isset($datas['city_id']) && $datas['city_id'] == $ReadDS['city_id']){ echo 'selected'; }  ?>><?php echo $ReadDS['city_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kecamatan</label>
                                         <select name="dis_id" class="form-control ">
                                             <option selected disabled>Pilih Kecamatan</option>
                                             <?php
                                                foreach ($kecamatan as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['dis_id']; ?>" <?php if(isset($datas['dis_id']) && $datas['dis_id'] == $ReadDS['dis_id']){ echo 'selected'; }  ?>><?php echo $ReadDS['dis_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kelurahan</label>
                                         <select name="subdis_id" class="form-control ">
                                             <option selected disabled>Pilih Kelurahan</option>
                                             <?php
                                                foreach ($kelurahan as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['subdis_id']; ?>" <?php if(isset($datas['subdis_id']) && $datas['subdis_id'] == $ReadDS['subdis_id']){ echo 'selected'; }  ?>><?php echo $ReadDS['subdis_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kode Pos</label>
                                         <select name="postal_id" class="form-control ">
                                             <option selected disabled>Pilih Kode Pos</option>
                                             <?php
                                                foreach ($kodepos as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['postal_id']; ?>" <?php if(isset($datas['postal_id']) && $datas['postal_id'] == $ReadDS['postal_id']){ echo 'selected'; }  ?>><?php echo $ReadDS['postal_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat Lengkap</label>
                                         <input name="alamat_lengkap" type="text" class="form-control" value="<?php echo $datas['alamat_lengkap'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Pendidikan</label>
                                         <select name="id_pendidikan" class="form-control ">
                                             <option value="">
                                                 Pilih Sekolah
                                             </option>
                                             <option value="1" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 1){ echo 'selected'; }  ?>>
                                                 Tidak Sekolah
                                             </option>
                                             <option value="2" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 2){ echo 'selected'; }  ?>>
                                                 SD
                                             </option>
                                             <option value="3" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 3){ echo 'selected'; }  ?>>
                                                 SMP
                                             </option>
                                             <option value="4" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 4){ echo 'selected'; }  ?>>
                                                 SMA/SMK
                                             </option>
                                             <option value="5" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 5){ echo 'selected'; }  ?>>
                                                 D1
                                             </option>
                                             <option value="6" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 6){ echo 'selected'; }  ?>>
                                                 D2
                                             </option>
                                             <option value="7" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 7){ echo 'selected'; }  ?>>
                                                 D3
                                             </option>
                                             <option value="8" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 8){ echo 'selected'; }  ?>>
                                                 S1
                                             </option>
                                             <option value="9" <?php if(isset($datas['id_pendidikan']) && $datas['id_pendidikan'] == 9){ echo 'selected'; }  ?>>
                                                 S2
                                             </option>

                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Status Pernikahan</label>
                                         <select name="id_status_pernikahan" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1" <?php if(isset($datas['id_status_pernikahan']) && $datas['id_status_pernikahan'] == 1){ echo 'selected'; }  ?>>
                                                 Single/Belum Nikah
                                             </option>
                                             <option value="2" <?php if(isset($datas['id_status_pernikahan']) && $datas['id_status_pernikahan'] == 2){ echo 'selected'; }  ?>>
                                                 Sudah Menikah
                                             </option>
                                             <option value="3" <?php if(isset($datas['id_status_pernikahan']) && $datas['id_status_pernikahan'] == 3){ echo 'selected'; }  ?>>
                                                 Cerai
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Status Tinggal</label>
                                         <select name="id_status_tinggal" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1" <?php if(isset($datas['id_status_tinggal']) && $datas['id_status_tinggal'] == 1){ echo 'selected'; }  ?>>
                                                 Kontrak/Kos
                                             </option>
                                             <option value="2" <?php if(isset($datas['id_status_tinggal']) && $datas['id_status_tinggal'] == 2){ echo 'selected'; }  ?>>
                                                 Rumah Orang Tua
                                             </option>
                                             <option value="3" <?php if(isset($datas['id_status_tinggal']) && $datas['id_status_tinggal'] == 3){ echo 'selected'; }  ?>>
                                                 Rumah Sendiri
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Agama</label>
                                         <select name="id_agama" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1" <?php if(isset($datas['id_agama']) && $datas['id_agama'] == 1){ echo 'selected'; }  ?>>
                                                 Islam
                                             </option>
                                             <option value="2" <?php if(isset($datas['id_agama']) && $datas['id_agama'] == 2){ echo 'selected'; }  ?>>
                                                 Budha
                                             </option>
                                             <option value="3" <?php if(isset($datas['id_agama']) && $datas['id_agama'] == 3){ echo 'selected'; }  ?>>
                                                 Katholik
                                             </option>
                                             <option value="4" <?php if(isset($datas['id_agama']) && $datas['id_agama'] == 4){ echo 'selected'; }  ?>>
                                                 Protestan
                                             </option>
                                             <option value="5" <?php if(isset($datas['id_agama']) && $datas['id_agama'] == 5){ echo 'selected'; }  ?>>
                                                 Konghuchu
                                             </option>
                                             <option value="6" <?php if(isset($datas['id_agama']) && $datas['id_agama'] == 6){ echo 'selected'; }  ?>>
                                                 Hindu
                                             </option>
                                         </select>
                                     </div>

                                     <div class="form-group">
                                         <label>NIK</label>
                                         <input name="nik" type="text" class="form-control" value="<?php echo $datas['nik'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Tanggal Lahir</label>
                                         <input name="tgl_lahir" type="date" class="form-control" value="<?php echo $datas['tgl_lahir'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Tempat Kota Lahir</label>
                                         <select name="city_id" class="form-control ">
                                             <option selected disabled>Pilih Kota</option>
                                             <?php
                                                foreach ($kota as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['city_id']; ?>" <?php if(isset($datas['city_id']) && $datas['city_id'] == $ReadDS['city_id']){ echo 'selected'; }  ?>><?php echo $ReadDS['city_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Blok</label>
                                         <input name="blok" type="text" class="form-control" value="<?php echo $datas['blok'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>RW</label>
                                         <input name="rw" type="text" class="form-control" value="<?php echo $datas['rw'] ?>">
                                     </div>
                                     <div class="form-group">
                                         <label>Jenis Kelamin</label>
                                         <select name="jnskel" class="form-control ">
                                             <option value="">
                                                 Pilih Jenis Kelamin
                                             </option>
                                             <option value="1" <?php if(isset($datas['jnskel']) && $datas['jnskel'] == 1){ echo 'selected'; }  ?>>
                                                 Pria
                                             </option>
                                             <option value="2" <?php if(isset($datas['jnskel']) && $datas['jnskel'] == 2){ echo 'selected'; }  ?>>
                                                 Wanita
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Pekerjaan</label>
                                         <select name="id_jenis_pekerjaan" class="form-control " onChange="NamaPekerjaan(this)" onclick="NamaPekerjaan(this)">
                                             <option selected disabled>Pilih Jenis Pekerjaan</option>
                                             <?php
                                                foreach ($pekerjaan as $ReadDS) {
                                                ?>
                                                 <option name="<?php echo $ReadDS['nama_pekerjaan']; ?>" value="<?php echo $ReadDS['id']; ?>" <?php if(isset($datas['id_jenis_pekerjaan']) && $datas['id_jenis_pekerjaan'] == $ReadDS['id']){ echo 'selected'; }  ?>><?php echo $ReadDS['nama_pekerjaan']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <!-- <label>Nama Jenis Pekerjaan</label> -->
                                         <input hidden name="nama_jenis_pekerjaan" type="text" class="form-control" value="<?php echo $datas['nama_jenis_pekerjaan'] ?>">
                                     </div>
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
   function NamaPekerjaan(sel){
        
        var pekerjaan = document.getElementsByName("nama_jenis_pekerjaan")[0].value = sel.options[sel.selectedIndex].text;
    }
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