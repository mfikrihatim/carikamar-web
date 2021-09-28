<style type="text/css">
.intl-tel-input {
  display: table-cell;
}
.intl-tel-input .selected-flag {
  z-index: 4;
}
.intl-tel-input .country-list {
  z-index: 5;
}
.input-group .intl-tel-input .form-control {
  border-top-left-radius: 4px;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
}
</style>
<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Signatory Contract Information</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- <div class="card-header card-secondary">
                    Additional Signature Information
                </div> -->
                <form action="<?= site_url('Contract/PendatangananKontrakProses') ?>" method="post">
                    <div class="card-body">
                        <!-- <input type="hidden" name="informasi_umum_detail_id" value="<?= !empty($CurrentUrl) ? $CurrentUrl : $CurrentUrl ?>"> -->
                        <input type="hidden" name="informasi_umum_detail_id" value="<?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->informasi_umum_detail_id : "" ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Fullname</p>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $check_users->nama ?>">
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <p>Role</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="role_kontrak_id" required="">
                                        <?php foreach ($MasterRoleKontrak as $key): ?>
                                            <option value="<?= $key->id ?>"><?= $key->nama_role_kontrak ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <p>Email Address</p>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" value="<?= $check_users->email ?>">
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <p>Mobile Phone Number</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" name="no_hp" class="form-control" value="<?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->no_hp : "" ?>" id="phone">
                                </div>
                            </div>      
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="float-left">
                                    <div class="form-check form-check-inline">
                                        <input  <?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->flag_menyetujui == 1 ? "checked" : "" : ""   ?> class="form-check-input" type="checkbox" name="flag_menyetujui" value="1" />
                                        <label class="form-check-label" for="exampleRadios1">
                                            Yes / Setuju
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-right">
                                    <button class="btn btn-xl btn-warning" type="submit"><span style="color: white; font-weight: bold;">Review Kontrak</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
