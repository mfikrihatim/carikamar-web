 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Master Tipe Properti</h1>
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
                         <div class="card-body">
                             <div style="margin-bottom: 10px;">
                                 <div class="col-lg-12">
                                     <a href="<?php echo site_url('Master_Tipe_Properti/VFormAddMasterTipeProperti'); ?>"
                                         class="btn btn-success">
                                         Tambah data
                                     </a>
                                 </div>
                             </div>
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Tipe</th>
                                         <th>Deskripsi Tipe</th>
                                         <!-- <th>Foto</th> -->
                                         <!-- <th>
                                             &nbsp;
                                         </th> -->
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                                if (!empty($DataMasterTipeProperti)) {
                                                    foreach ($DataMasterTipeProperti as $index => $ReadDS) {
                                                        $index = $index + 1;
                                                ?>
                                     <tr>
                                         <td><?php echo $index ?></td>

                                         <td><?php echo $ReadDS->nama_tipe; ?></td>
                                         <td><?php echo $ReadDS->deskripsi; ?></td>
                                         <td>
                                             <a href="<?php echo site_url('Master_Tipe_Properti/index/' . $ReadDS->id . '/view'); ?>"
                                                 class="btn btn-xs btn-info">
                                                 Edit
                                             </a>
                                             <a href="<?php echo site_url('Master_Tipe_Properti/DeleteDataTipeProperti/' . $ReadDS->id); ?>"
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