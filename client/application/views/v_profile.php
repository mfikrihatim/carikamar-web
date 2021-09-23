<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">My Profile</h1>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Information Profile</div>
                <form action="<?= site_url('Profile/ChangeProfile') ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email"  id="email" class="form-control" placeholder="Email ..." value="<?= !empty($DataUser) ? $DataUser->email : "" ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input style="font-weight: bold;" type="text" name="nama"  id="nama" class="form-control" placeholder="Nama ..." value="<?= !empty($DataUser) ? $DataUser->nama : "" ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-xl btn-primary" type="submit">Change Profile</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">Change Password</div>
                <form id="input-form" method="POST" action="<?= site_url('Profile/ChangePassword') ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="passowrd" name="current_password" id="current_password" class="form-control"placeholder="Masukan Current Passowrd" required>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="passowrd" name="new_password" id="new_password" class="form-control"placeholder="New Passowrd" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="passowrd" name="confirm_password" id="confirm_password" class="form-control"placeholder="Confirm Passowrd" required>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-xl btn-primary" type="submit">Change Password</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if ($this->session->flashdata('msg')) { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            swal({
                title: "<?= strtoupper($this->session->flashdata('msg')) ?>",
                text: "<?= $this->session->flashdata('pesan') ?>",
                type: "<?= $this->session->flashdata('msg') ?>",
                timer: 5000,
            })
        })
    </script>
<?php } ?>
