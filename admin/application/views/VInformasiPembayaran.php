 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Informasi Pembayaran</h1>
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
                                     <a href="<?php echo site_url('Informasi_pembayaran/VFormAddInformasiPembayaran'); ?>"
                                         class="btn btn-success">
                                         Tambah Data Informasi Pembayaran
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
                                                 <th>Pilihan Metode</th>
                                                 <th>Bank</th>
                                                 <th>Nomor Akun</th>
                                                 <th>Pemilik Akun</th>
                                                 <th>Rencana Pembayaran</th>
                                                 <th>Tools</th>
                                                 <!-- <th>
 													&nbsp;
 												</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                if (!empty($InformasiPembayaran)) {
                                                    foreach ($InformasiPembayaran as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                             <tr>
                                                 <td><?php echo $index ?></td>
                                                 <td><?php echo $ReadDS->nama_properti; ?></td>
                                                 <td><?php echo $ReadDS->pilihan_metode; ?></td>
                                                 <td><?php echo $ReadDS->nama_bank; ?></td>
                                                 <td><?php echo $ReadDS->nomor_akun; ?></td>
                                                 <td><?php echo $ReadDS->pemilik_akun; ?></td>
                                                 <td><?php echo $ReadDS->rencana_pembayaran; ?></td>
                                                 

                                                 <td>
                                                     <a href="<?php echo site_url('Master_bank/DataMasterBank/' . $ReadDS->id . '/view'); ?>"
                                                         class="btn btn-xs btn-info">
                                                         Edit
                                                     </a>
                                                     <a href="<?php echo site_url('Master_bank/DeleteDataMasterBank/' . $ReadDS->id); ?>"
                                                         class="btn btn-xs btn-danger">
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