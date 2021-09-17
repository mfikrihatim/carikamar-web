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
                             <form action="<?php echo site_url('Informasi_umum_detail/AddDataInformasiUmumDetail'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">

                                     <div class="form-group">
                                         <label>Pilih Tipe Properti</label>
                                         <select class="form-control" name="tipe_properti_id" required>
                                             <option value="">Pilih Tipe Properti</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($DataTipeProperti as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Nama Properti</label>
                                         <input name="nama_properti" type="text" class="form-control" placeholder="Nama Properti">
                                     </div>
                                     <div class="form-group">
                                         <label>Nama Badan Hukum</label>
                                         <input name="nama_badan_hukum" type="text" class="form-control" placeholder="Nama Badan Hukum">
                                     </div>
                                     <div class="form-group">
                                         <label>lokasi Maps</label>
                                         <input name="lokasi_maps" type="text" class="form-control" placeholder="lokasi Maps">
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat Jalan</label>
                                         <input name="alamat_jalan" type="text" class="form-control" placeholder="Alamat Jalan">
                                     </div>
                                     <div class="form-group">
                                         <label>Kode Pos</label>
                                         <input name="kode_pos" type="number" class="form-control" placeholder="Kode Pos">
                                     </div>
                                     <div class="form-group">
                                         <label>No Telp</label>
                                         <input name="no_telp" type="number" class="form-control" placeholder="No Telfon">
                                     </div>
                                     <div class="form-group">
                                         <label>Jumlah Kamar</label>
                                         <input name="jumlah_kamar" type="number" class="form-control" placeholder="No Telfon">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Chanel Manager</label>
                                         <input name="flag_chanel_manager" type="number" class="form-control" placeholder="No Telfon">
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