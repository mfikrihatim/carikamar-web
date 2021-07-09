 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Tipe Kamar</h1>
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
                                     <a href="<?php echo site_url('Tipe_kamar/VFormAddTipeKamar'); ?>"
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
                                                 
                                                 <th>Informasi Umum Detail</th>
                                                 <th>Nama Kamar</th>
                                                 <th>Tipe Kamar</th>
                                                 <th>Tipe Kasur</th>
                                                 <th>Maksimum Kapasitas</th>
                                                 <th>Maksimum Extra Bed</th>
                                                 <th>Harga Extra Bed</th>
                                                 <th>Ukuran Lebar Kamar</th>
                                                 <th>Ukuran Panjang Kamar</th>
                                                 <th>Harga Kamar</th>
                                                 <th>Flag Include Breakfast</th>
                                                 <th>Jumlah Kamar</th>

                                                 <th>Tools</th>
                                                 <!-- <th>
 													&nbsp;
 												</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                if (!empty($TipeKamar)) {
                                                    foreach ($TipeKamar as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                             <tr>
                                                 <td><?php echo $index ?></td>

                                                 <td><?php echo $ReadDS->nama_properti; ?></td>
                                                 <td><?php echo $ReadDS->nama_kamar; ?></td>
                                                 <td><?php echo $ReadDS->nama_tipe_kamar; ?></td>
                                                 <td><?php echo $ReadDS->nama_tipe_kasur; ?></td>
                                                 <td><?php echo $ReadDS->maksimum_kapasitas; ?></td>
                                                 <td><?php echo $ReadDS->maksimum_extra_bed; ?></td>
                                                  <td><?php echo $ReadDS->harga_extra_bed; ?></td>
                                                  <td><?php echo $ReadDS->ukuran_kamar_lebar; ?></td>
                                                   <td><?php echo $ReadDS->ukuran_kamar_panjang; ?></td>
                                                   <td><?php echo $ReadDS->harga_kamar; ?></td>
                                                   <td><?php echo $ReadDS->flag_included_breakfast; ?></td>
                                                    <td><?php echo $ReadDS->jumlah_kamar; ?></td>


                                                 <td>
                                                     <a href="<?php echo site_url('Tipe_kamar/DataTipeKamar/' . $ReadDS->id . '/view'); ?>"
                                                         class="btn btn-xs btn-info">
                                                         Edit
                                                     </a>
                                                     <a href="<?php echo site_url('Tipe_kamar/DeleteDataTipeKamar/' . $ReadDS->id); ?>"
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