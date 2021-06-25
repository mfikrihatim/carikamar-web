 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Panic Button</h1>
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

                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>ID User</th>
                                         <th>No Telepon</th>
                                         <th>Tanggal Telepon</th>
                                         <th>Alamat Nomor Telepon</th>
                                         <!-- <th>
                                             &nbsp;
                                         </th> -->
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        foreach ($datas as $index => $panic) {
                                            $index = $index + 1;

                                        ?>
                                         <tr>
                                             <td><?php echo $index ?></td>
                                             <td><?php echo $panic['id_user'] ?></td>
                                             <td><?php echo $panic['no_call'] ?></td>
                                             <td><?php echo $panic['call_date'] ?></td>
                                             <td><?php echo $panic['alamat_call'] ?></td>
                                             <!-- <td>
                                             <a class="btn btn-xs btn-info" href="">
                                                 Edit
                                             </a>
                                             <a class="btn btn-xs btn-danger" href="">
                                                 Delete
                                             </a>

                                         </td> -->
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
     </section>
 </div>