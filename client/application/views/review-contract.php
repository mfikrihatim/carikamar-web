<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Review Your Property Contract Aggrement</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header card-secondary">
                    Additional Signature Information
                </div>
                <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Fullname</p>
                            </div> 
                            <div class="col-md-6">
                                <p style="font-weight: bold"><?= $check_users->nama ?></p>
                            </div>      
                            <div class="col-md-6">
                                <p>Role</p>
                            </div>
                            <div class="col-md-6">
                                <p>Bussines Analayst</p>
                            </div>      
                            <div class="col-md-6">
                                <p>Email Address</p>
                            </div> 
                            <div class="col-md-6">
                                <p style="font-weight: bold"><?= $check_users->email ?></p>
                            </div>      
                            <div class="col-md-6">
                                <p>Mobile Phone Number</p>
                            </div>
                            <div class="col-md-6">
                                <p>+628986980231</p>
                            </div>      
                            <div class="col-md-6">
                                <button class="btn btn-sm btn-outline-primary"><span style="font-weight: bold;">Edit Signature Information</span></button>
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
                </form>
                
            </div>
        </div>
    </div>
</div>
