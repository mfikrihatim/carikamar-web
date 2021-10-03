<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Review Your Property Contract Aggrement</h1>
    <form action="" method="" class="input">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-secondary">
                        Additional Signature Information
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Fullname</p>
                                </div> 
                                <div class="col-md-6">
                                    <p style="font-weight: bold"><?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->nama_lengkap : ""  ?></p>
                                </div>      
                                <div class="col-md-6">
                                    <p>Role</p>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $role_kontak ?></p>
                                </div>      
                                <div class="col-md-6">
                                    <p>Email Address</p>
                                </div> 
                                <div class="col-md-6">
                                    <p style="font-weight: bold"><?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->email : "" ?></p>
                                </div>      
                                <div class="col-md-6">
                                    <p>Mobile Phone Number</p>
                                </div>
                                <div class="col-md-6">
                                    <p><?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->no_hp : "" ?></p>
                                </div>      
                                <div class="col-md-6">
                                    <a href="<?= site_url('Contract/SignatoryInformation/'.$CurrentUrl) ?>" class="btn btn-sm btn-outline-primary"><span style="font-weight: bold;">Edit Signature Information</span></a>
                                </div>  
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Property Contract Aggrement</label>
                                        <textarea class="form-control" name="contract" rows="7" cols="50"><?= $MasterPerjanjianKontrak[0]->deskripsi ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="float-left">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="check_status" value="1" />
                                            <label class="form-check-label" for="exampleRadios1">
                                                Yes / Setuju
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="float-right">
                    <button type="button" data-toggle="modal" data-target="#modalToVerification" class="btn btn-xl btn-warning"><span style="color: white; font-weight: bold;">Continue to Verification</span></button>
                </div>
            </div>   
        </div>
    </form>
</div>

<!-- Modal Verification -->
<!-- Modal -->
<div class="modal fade" id="modalToVerification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-weight: bold;">Verify your registration</h5>
            </div>
            <div class="col-md-12">
                <p>Kode Verification akan di kirimkan silahkan anda melihat pada masing masing provide pengiriman kode yang di tentukan seperti email atau no handphone</p>
            </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="send_verif" value="email" />
                    <label class="form-check-label" for="exampleRadios1">
                        Send your email <?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->email : "" ?>
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="send_verif" value="no_hp" />
                    <label class="form-check-label" for="exampleRadios1">
                        Send your no phone <?= !empty($InformasiPenjanjianKontrak) ? $InformasiPenjanjianKontrak->no_hp : "" ?>
                    </label>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
            <div class="float-left">
                <button type="button" class="btn btn-warning"><span style="color: white; font-weight: bold;">Send Invite Code</span></button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
