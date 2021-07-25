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
     <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.css'>
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="box">
                 <div class="box-header with-border">
                     <div class="row">
                         <div class="col-12">
                             <form action="<?php echo site_url('Informasi_penandatangan_kontrak/AddDataInformasiPenandatanganKontrak'); ?>" method="post" enctype="multipart/form-data">
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
                                         <label>Nama Lengkap</label>
                                         <input name="nama_lengkap" type="text" class="form-control" placeholder="Masukan Nomor Akun">
                                     </div>
                                     <div class="form-group">
                                         <label>Pilih Role Kontrak</label>
                                         <select class="form-control" name="role_kontrak_id" required>
                                             <option value="">Pilih Role Kontrak</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($MasterRoleKontrak as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_role_kontrak; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Email</label>
                                         <input name="email" type="email" class="form-control" placeholder="Masukan Email">
                                     </div>
                                     <div class="form-group">
                                         <label>Nomor Handphone</label>
                                         <input name="no_hp" type="number" class="form-control" placeholder="Masukan Nomor Handphone">
                                     </div>
                                    
                                     <div class="form-group">
                                         <label>Flag Menyetujui</label>
                                         <select class="form-control" name="flag_menyetujui" required>
                                             <option value="">Pilihan Flag Menyetujui</option>
                                             <option value="1">YA</option>
                                             <option value="0">Tidak</option>
                                             
                                         </select>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                         </div>
                         </form>
                     </div>

                 </div>
     </section>
 </div>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js'></script>

 <script>
     $('#my-select').multiSelect();
 </script>