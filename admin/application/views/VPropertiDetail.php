 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Properti Detail</h1>
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
                                     <a href="<?php echo site_url('Properti_Detail/VFormAddPropertiDetail'); ?>"
                                         class="btn btn-success">
                                         Tambah Data
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
                                                 <th>Informasi Umum Detail ID</th>
                                                 <th>Mata Uang</th>
                                                 <th>Flag Kawasan</th>
                                                 <th>Waktu Checkin</th>
                                                 <th>Waktu Checkout</th>
                                                 <th>Jarak Ke Kota</th>
                                                 <th>Jumlah Lantai</th>
                                                 <th>Biaya Sarapan Tambahan</th>
                                                 <th>ID Master Cancel</th>
                                                 <th>ID Master Style</th>
                                                 <th>Tools</th>
                                                 <!-- <th>
 													&nbsp;
 												</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                if (!empty($DataPropertiDetail)) {
                                                    foreach ($DataPropertiDetail as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                             <tr>
                                                 <td><?php echo $index ?></td>
                                                 <td><?php echo $ReadDS->nama_properti; ?></td>
                                                 <td><?php echo $ReadDS->mata_uang; ?></td>
                                                 <td><?php echo $ReadDS->flag_kawasan; ?></td>
                                                 <td><?php echo $ReadDS->waktu_checkin; ?></td>
                                                 <td><?php echo $ReadDS->waktu_checkout; ?></td>
                                                 <td><?php echo $ReadDS->jarak_ke_kota; ?></td>
                                                 <td><?php echo $ReadDS->jumlah_lantai; ?></td>
                                                 <td><?php echo $ReadDS->biaya_sarapan_tambahan; ?></td>
                                                 <td><?php echo $ReadDS->nama_cancel; ?></td>
                                                 <td><?php echo $ReadDS->nama_style; ?></td>
                                                 </td>
                                                 <td>
                                                     <a href="<?php echo site_url('Properti_Detail/DataPropertiDetail/' . $ReadDS->id . '/view'); ?>"
                                                         class="btn btn-xs btn-info">
                                                         Edit
                                                     </a>
                                                     <a href="<?php echo site_url('Properti_Detail/DeleteDataPropertiDetail/' . $ReadDS->id); ?>"
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