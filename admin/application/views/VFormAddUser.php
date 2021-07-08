 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah User</h1>
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
                             <form action="<?php echo site_url('Master_user/AddDataUser'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">

                                     <div class="form-group">
                                         <label>Nama</label>
                                         <input name="nama" type="text" class="form-control" placeholder="nama">
                                     </div>
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input name="password" type="password" class="form-control" placeholder="Password">
                                     </div>
                                     <div class="form-group">
                                         <label>Email</label>
                                         <input name="email" type="email" class="form-control" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputFile">Foto Slide</label>
                                         <input type="file" name="userfile" />
                                         <!-- <p class="help-block">Example block-level help text here.</p> -->
                                     </div>
                                     <!-- <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                     <input type="hidden" name="userlogin" id="userlogin" value="" class="form-control"> -->

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