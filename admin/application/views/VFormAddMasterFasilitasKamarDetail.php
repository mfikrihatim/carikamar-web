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
                             <form action="<?php echo site_url('Master_fasilitas_kamar_detail/AddDataMasterFasilitasKamarDetail'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">

                                     <div class="form-group">
                                         <label>Pilih Fasilitas Kamar Header</label>
                                         <select class="form-control" name="fasilitas_kamar_header_id" required>
                                             <option value="">Pilih Fasilitas Kamar Header</option>
                                             <?php
                                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                                foreach ($DataFasilitasHeader as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Nama</label>
                                         <input name="nama" type="text" class="form-control" placeholder="Nama Fasilitas">
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