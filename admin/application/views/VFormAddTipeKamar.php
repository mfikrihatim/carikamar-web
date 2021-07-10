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
                             <form action="<?php echo site_url('Tipe_kamar/AddDataTipeKamar'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">

                                     <div class="form-group">
                                         <label>Pilih Informasi Umum Detail</label>
                                         <select class="form-control" name="informasi_umum_detail_id" required>
                                             <option value="">Pilih Informasi Umum Detail</option>
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
                                         <label>Nama Kamar</label>
                                         <input name="nama_kamar" type="text" class="form-control" placeholder="Nama Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Pilih Tipe Kamar</label>
                                         <select class="form-control" name="master_tipe_kamar_id" required>
                                             <option value="">Tipe Kamar</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($MasterTipeKamar as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe_kamar; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Pilih Tipe Kasur</label>
                                         <select class="form-control" name="master_tipe_kasur_id" required>
                                             <option value="">Tipe Kasur</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($MasterTipeKasur as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_tipe_kasur; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Maksimum Kapasitas</label>
                                         <input name="maksimum_kapasitas" type="text" class="form-control" placeholder="Maksimum Kapasitas">
                                     </div>
                                     <div class="form-group">
                                         <label>Maksimum Extra Bed</label>
                                         <input name="maksimum_extra_bed" type="text" class="form-control" placeholder="Maksimum Extra Bed">
                                     </div>
                                     <div class="form-group">
                                         <label>Harga Extra Bed</label>
                                         <input name="harga_extra_bed" type="text" class="form-control" placeholder="Harga Extra Bed">
                                     </div>
                                     <div class="form-group">
                                         <label>Lebar Kamar</label>
                                         <input name="ukuran_kamar_lebar" type="number" class="form-control" placeholder="Lebar Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Panjang Kamar</label>
                                         <input name="ukuran_kamar_panjang" type="number" class="form-control" placeholder="Panjang Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Harga Kamar</label>
                                         <input name="harga_kamar" type="number" class="form-control" placeholder="Harga Kamar">
                                     </div>
                                     <div class="form-group">
                                         <label>Flag Include Breakfast</label>
                                         <input name="flag_included_breakfast" type="number" class="form-control" placeholder="Flag Include Breakfast">
                                     </div>
                                     <div class="form-group">
                                         <label>Jumlah Kamar</label>
                                         <input name="jumlah_kamar" type="number" class="form-control" placeholder="Jumlah Kamar">
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