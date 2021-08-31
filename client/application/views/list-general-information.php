<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">General Information</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form id="input">
            <input type="text" name="informasi_umum_detail_id" id="informasi_umum_detail_id" class="form-control"
                style="display:none" value="" />
            <input type="text" name="informasi_umum_kontak_id" id="informasi_umum_kontak_id" class="form-control"
                style="display:none" value="" />
            <div class="card-body">
                <div class="row">
                    <div class="col-4">Property Name*</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_properti" id="nama_properti" value="<?= empty($DataMasterProperti->nama_properti) ? '' : $DataMasterProperti->nama_properti ?>"/>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Legal Entity Name</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_badan_hukum" id="nama_badan_hukum" value='<?= empty($DataMasterProperti->nama_badan_hukum) ? '' : $DataMasterProperti->nama_badan_hukum ?>'/>
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
                                <input class="form-check-input" type="radio" name="tipe_properti_id" id="tipe_properti_id" value="<?= $ReadDS->id ?>" <?= $DataMasterProperti->tipe_properti_id == $ReadDS->id ? 'checked' : NULL ?>/>
                                <b><?php echo $ReadDS->nama_tipe; ?></b><br />
                                <?php echo $ReadDS->deskripsi; ?><br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Property Address</div>
                    <div class="col-7">
                        <!-- <div id="googleMap" style="height: 400px"></div>
                        <input type="hidden" name="lat" id="lat" />
                        <input type="hidden" name="lng" id="lng" /> -->


                        <div class="form-group ">
                            <p>Street Address*</p>
                            <textarea class="form-control" name="alamat_jalan" id="alamat_jalan" rows="3"><?= $DataMasterProperti->alamat_jalan ?></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <p>Postal Code*</p>
                            <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?= $DataMasterProperti->kode_pos ?>"/>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Phone Number</div>
                    <div class="col-7">
                        <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $DataMasterProperti->no_telp ?>"/>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Number of Rooms*</div>
                    <div class="col-7">
                        <input type="text" name="jumlah_kamar" id="jumlah_kamar" class="form-control" value="<?= $DataMasterProperti->jumlah_kamar ?>"/>
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
                            <input class="form-check-input" type="radio" name="flag_chanel_manager" value="1" <?= $DataMasterProperti->flag_chanel_manager == 1 ? 'checked' : NULL ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flag_chanel_manager" value="0" <?= $DataMasterProperti->flag_chanel_manager == 0 ? 'checked' : NULL ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>

                </div>
                <br>

                <div class="card">

                    <div class="card-body">
                        <div class="card-header">
                            <h4><b>Property Contacts</b></h4>
                        </div>
                        <div class="row" id="row-contact">
                            <div class="col-6" id="main-contact">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Jenis Kontak</p>
                                        <input type="text" name="jenis_kontak" id="jenis_kontak" class="form-control" value='<?= empty($DataMasterKontak->jenis_kontak) ? '' : $DataMasterKontak->jenis_kontak ?>' />
                                        <p class="mt-3">Nama Lengkap*</p>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value='<?= empty($DataMasterKontak->jenis_kontak) ? '' : $DataMasterKontak->jenis_kontak ?>' />
                                        <p class="mt-3">Email*</p>
                                        <input type="email" name="email" id="email" class="form-control" value="<?= empty($DataMasterKontak->email) ? '' : $DataMasterKontak->email ?>" />
                                        <p class="mt-3">Phone Number*</p>
                                        <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?= empty($DataMasterKontak->no_hp) ? '' : $DataMasterKontak->no_hp ?>"/>
                                        <p class="mt-3">Telfon Kantor*</p>
                                        <input type="number" name="no_telp_kantor" id="no_telp_kantor" class="form-control" value="<?= empty($DataMasterKontak->no_telp_kantor) ? '' : $DataMasterKontak->no_telp_kantor ?>" />
                                        <p class="mt-3">Extension*</p>
                                        <input type="text" name="extension" id="extension" class="form-control" value="<?= empty($DataMasterKontak->extension) ? '' : $DataMasterKontak->extension ?>"/>
                                        <p class="mt-3">Jabatan*</p>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= empty($DataMasterKontak->jabatan) ? '' : $DataMasterKontak->jabatan ?>"/>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input mr-3" type="checkbox" name="flag_fullday" id="flag_fullday" id="exampleRadios1" value="1" <?= $DataMasterKontak->flag_fullday == 0 ? NULL : 'checked' ?> />
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
                    <button id="simpan" type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function() {
    $("#simpan").on('click', function() {
        var input = $('#input').serialize();
        var url = "<?php echo site_url('General_information/SaveGeneralInformation'); ?>";
        $.ajax({
            url: url,
            type: "POST",
            data: input,
            dataType: "JSON",
            success: function(data, status, xhr) {
                var result = data;
                $('#informasi_umum_detail_id').val(result.informasi_umum_detail_id);
                $('#informasi_umum_kontak_id').val(result.informasi_umum_kontak_id);
                $("#Property_detail").attr("href",
                    "<?php echo site_url('Property_detail/index'); ?>" + "/" + result
                    .informasi_umum_detail_id);
                alert("Data Tersimpan");
            }
        });
    })



});
</script>