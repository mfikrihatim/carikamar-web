<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Property Detail</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form action="<?php echo site_url('Property_detail/AddPropertyDetail'); ?>" method="post" role="form"
            enctype='multipart/form-data'>
            <div class="card-body">
                <div class="form-group">
                    <label>Pilih Informati Umum Detail</label>
                    <select class="form-control" name="informasi_umum_detail_id" required>
                        <option value="">Pilih Informati Umum Detail</option>
                        <?php

                        foreach ($DataInformationDetail as $ReadDS) {
                        ?>
                        <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <hr />
                <div class="form-group">
                    <label>Mata Uang</label>
                    <input type="text" name="mata_uang" class="form-control"
                        value="<?php if($data->mata_uang != ''){echo $data->mata_uang;}  ?>"
                        placeholder="Masukan Mata Uang" required>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        Reception Area
                    </div>
                    <div class="col-7">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flag_kawasan" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                Available 24 Hours
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flag_kawasan" value="2">
                            <label class="form-check-label" for="exampleRadios1">
                                Not Available 24 Hours
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                        Check-In Time
                    </div>
                    <div class="col-7">
                        <div class="bootstrap-timepicker">
                            <div class="form-check-inline">
                                <div class="form-group">
                                    <p>From:</p>
                                    <div class="input-group date" id="checkin_from" data-target-input="nearest">
                                        <input type="text" name="waktu_checkin"
                                            class="form-control col-6 datetimepicker-input" data-toggle="datetimepicker"
                                            data-target="#checkin_from" />
                                        <div class="input-group-append" data-target="#checkin_from"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        Check-Out Time
                    </div>
                    <div class="col-7">
                        <div class="bootstrap-timepicker">
                            <div class="form-check-inline">
                                <div class="form-group">
                                    <p>From:</p>
                                    <div class="input-group date" id="checkout_from" data-target-input="nearest">
                                        <input type="text" name="waktu_checkout"
                                            class="form-control col-6 datetimepicker-input" data-toggle="datetimepicker"
                                            data-target="#checkout_from" />
                                        <div class="input-group-append" data-target="#checkout_from"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="row mt-3">
                    <div class="col-4">
                        Distance to City Center*
                    </div>
                    <div class="col-7">
                        <div class="input-group">
                            <input type="text" name="jarak_ke_kota" class="form-control col-3"
                                id="inlineFormInputGroupUsername">
                            <div class="input-group-append">
                                <div class="input-group-text">km</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="row mt-3">
                    <div class="col-4">
                        Number of Floors
                    </div>
                    <div class="col-7">
                        <div class="input-group">
                            <input type="text" name="jumlah_lantai" class="form-control col-3"
                                id="inlineFormInputGroupUsername">
                            <div class="input-group-append">
                                <div class="input-group-text">floors</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="row mt-3">
                    <div class="col-4">
                        Additional Breakfast Charge (Exclude Room Rate)
                    </div>
                    <div class="col-7">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">IDR</div>
                            </div>
                            <input type="text" name="biaya_sarapan_tambahan" class="form-control col-4"
                                id="inlineFormInputGroupUsername">
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="card">
        <div class="card-header">Property Cancellation Policy</div>
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-4">
                    Cancellation Policy*
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" name="master_cancel_id" required>
                            <option value="">Example select</option>
                            <?php

                            foreach ($DataPropertiMasterCancel as $ReadDS) {
                            ?>
                            <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Property Style</div>
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">


                        <?php

                        foreach ($DataPropertiMasterStyle as $ReadDS) {
                        ?>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="master_style_id[]" value="<?php echo $ReadDS->id; ?>">
                                    <?php echo $ReadDS->nama; ?>
                                </label>
                            </div>
                            <?php
                            // $no++;
                        }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
</div><!-- /.col -->