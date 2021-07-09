 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah Data</h1>
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
                             <form action="<?php echo site_url('Informasi_umum_kontak/AddDataInformasiUmumKontak'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">

                                     <div class="form-group">
                                         <label>Pilih Informasi Detail</label>
                                         <select class="form-control" name="informasi_umum_detail_id" required>
                                             <option value="">Pilih Informasi Detail</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($InformasiUmumDetail as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Jenis Kontak</label>
                                         <input name="jenis_kontak" type="text" class="form-control" placeholder="Jenis Kontak">
                                     </div>
                                     <div class="form-group">
                                         <label>Nama Lengkap</label>
                                         <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                                     </div>
                                     <div class="form-group">
                                         <label>Email</label>
                                         <input name="email" type="email" class="form-control" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <label>No Handphone</label>
                                         <input name="no_hp" type="number" class="form-control" placeholder="No Handphone">
                                     </div>
                                     <div class="form-group">
                                         <label>No Telfon Kantor</label>
                                         <input name="no_telp_kantor" type="number" class="form-control" placeholder="No Telfon Kantor">
                                     </div>
                                     <div class="form-group">
                                         <label>Extension</label>
                                         <input name="extension" type="text" class="form-control" placeholder="Extension">
                                     </div>
                                     <div class="form-group">
                                         <label>Jabatan</label>
                                         <input name="jabatan" type="text" class="form-control" placeholder="Jabatan">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Fullday</label>
                                         <input name="flag_fullday" type="number" class="form-control" placeholder="Flag Fullday">
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