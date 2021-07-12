<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">General Information</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form action="<?php echo site_url('generalinformation/AddGeneralInformation'); ?>" method="post" role="form" enctype='multipart/form-data'>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">Property Name*</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_properti" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Legal Entity Name</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_badan_hukum" />
                    </div>
                </div>
                <hr />
             
                <div class="row mt-3">
                    <div class="col-4">Property Type*</div>
                    <div class="col-7">
                        <div class="form-check mb-1">
                        <?php
                                //  $voucher = $this->MSudi->GetData('tb_voucher');
                                foreach ($DataMasterTipeProperti as $ReadDS) {
                                ?>
                            <input class="form-check-input" type="radio" name="tipe_properti_id" value="<?php echo $ReadDS->id; ?>" />
                            
                                <b><?php echo $ReadDS->nama_tipe; ?></b><br />
                               
                           
                            <?php
                                }
                            ?>
                        </div>
                     
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Property Address</div>
                    <div class="col-7">
                        <div id="googleMap" style="height: 400px"></div>
                        <input type="hidden" name="lat" id="lat" />
                        <input type="hidden" name="lng" id="lng" />


                        <div class="form-group mt-3">
                            <p>Street Address*</p>
                            <textarea class="form-control" name="alamat_jalan" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <p>Postal Code*</p>
                            <input type="text" name="kode_pos" class="form-control" />
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Phone Number</div>
                    <div class="col-7">
                        <input type="text" name="no_telp" class="form-control" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Number of Rooms*</div>
                    <div class="col-7">
                    <input type="text" name="jumlah_kamar" class="form-control" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                       Flag Chanel Manager
                        <!-- <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span> -->
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flag_chanel_manager" value="1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flag_chanel_manager"  value="0" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>

                </div>
                <br>
                
                <div class="card">
       
        <div class="card-body">
        <div class="card-header"><h4><b>Property Contacts</b></h4></div>
            <div class="row" id="row-contact">
                <div class="col-6" id="main-contact">
                    <div class="card">
                     
                        <div class="card-body">
                            <p>Jenis Kontak</p>
                            <input type="text" name="jenis_kontak" class="form-control" />
                            <p class="mt-3">Nama Lengkap*</p>
                            <input type="text" name="nama_lengkap" class="form-control" />
                            <p class="mt-3">Email*</p>
                            <input type="email" name="email" class="form-control" />
                            <p class="mt-3">Phone Number*</p>
                            <input type="number" name="no_hp" class="form-control" />
                            <p class="mt-3">Telfon Kantor*</p>
                            <input type="number" name="no_telp_kantor" class="form-control" />
                            <p class="mt-3">Extension*</p>
                            <input type="text" name="extension" class="form-control" />
                            <p class="mt-3">Jabatan*</p>
                            <input type="text" name="jabatan" class="form-control" />
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input mr-3" type="checkbox" name="flag_fullday" id="exampleRadios1" value="1" />
                                <label class="form-check-label" for="exampleRadios1">
                                    Contactable 24 Hours
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6" id="duplicate-contact">
                    <div class="card" style="height: 695px">
                        <div class="card-body">
                            <div class="h-100 row align-items-center">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <h3>Add New Contact</h3>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button class="btn btn-lg btn-default w-100">
                                            Reservation
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-lg btn-default w-100">
                                            Accounting/Payment
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <p class="text-center">
                                            Main Contact will be contacted for any
                                            inquiries regarding reservation, finance,
                                            and payment/accounting. <br /><br />If those
                                            fields were managed by different person,
                                            kindly add new contacts.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
  
</div>
<!-- /.col -->