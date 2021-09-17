<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Property Detail</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form id="input">
        <input type="text" name="informasi_umum_detail_id" id="informasi_umum_detail_id" class="form-control"
                style="display: none;" value="<?= !empty($DataPropertyDetail) ? $DataPropertyDetail->informasi_umum_detail_id != "" ? $DataPropertyDetail->informasi_umum_detail_id : NULL: NULL ?>" />
            <input type="text" name="id" id="properti_detail_id" class="form-control" value="<?= !empty($DataPropertyDetail) ? $DataPropertyDetail->id != "" ? $DataPropertyDetail->id : NULL: NULL ?>" style="display: none;"/>
            <div class="card-body">
                <div class="form-group">
                    <label>Pilih Information Umum Detail</label>
                    <select class="form-control" name="informasi_umum_detail_id" id="informasi_umum_detail_id" required>
                        <option value="">-- Select Nama Property --</option>
                        <?php foreach ($SelectInformationDetails as $ReadDS) {?>
                            <option <?= !empty($DataPropertyDetail) ? $DataPropertyDetail->informasi_umum_detail_id != "" ? $DataPropertyDetail->informasi_umum_detail_id == $ReadDS->id ? "selected" : NULL : NULL : NULL  ?> value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <hr />
                <div class="form-group">
                    <label>Mata Uang</label>
                    <input type="text" name="mata_uang" id="mata_uang" class="form-control"placeholder="Masukan Mata Uang" required value="<?= !empty($DataPropertyDetail->mata_uang) ? $DataPropertyDetail->mata_uang : NULL ?>">
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        Reception Area
                    </div>
                    <div class="col-7">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flag_kawasan" id="flag_kawasan" value="1" <?= !empty($DataPropertyDetail) ? $DataPropertyDetail->flag_kawasan == 1 ? "checked" : NULL : NULL  ?>>
                            <label class="form-check-label" for="exampleRadios1">
                                Available 24 Hours
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flag_kawasan" id="flag_kawasan" value="2"  <?= !empty($DataPropertyDetail) ? $DataPropertyDetail->flag_kawasan == 2 ? "checked" : NULL : NULL  ?>>
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
                                        <input type="text" name="waktu_checkin" id="waktu_checkin"
                                            class="form-control col-6 datetimepicker-input" data-toggle="datetimepicker"
                                            data-target="#checkin_from" value="<?= !empty($DataPropertyDetail->waktu_checkin) ? $DataPropertyDetail->waktu_checkin : NULL ?>"/>
                                        <div class="input-group-append" data-target="#checkin_from"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
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
                                        <input type="text" name="waktu_checkout" class="form-control col-6 datetimepicker-input" data-toggle="datetimepicker" data-target="#checkout_from" value="<?= !empty($DataPropertyDetail->waktu_checkout) ? $DataPropertyDetail->waktu_checkout : NULL ?>"/>
                                        <div class="input-group-append" data-target="#checkout_from"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
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
                            <input type="text" name="jarak_ke_kota" id="jarak_ke_kota" class="form-control col-3" id="inlineFormInputGroupUsername" value="<?= !empty($DataPropertyDetail->jarak_ke_kota) ? $DataPropertyDetail->jarak_ke_kota : NULL ?>">
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
                            <input type="text" name="jumlah_lantai" id="jumlah_lantai" class="form-control col-3" id="inlineFormInputGroupUsername" value="<?= !empty($DataPropertyDetail->jumlah_lantai) ? $DataPropertyDetail->jumlah_lantai : NULL ?>" >
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
                            <input type="text" name="biaya_sarapan_tambahan" id="biaya_sarapan_tambahan" class="form-control col-4"
                                id="inlineFormInputGroupUsername" value="<?= !empty($DataPropertyDetail->biaya_sarapan_tambahan) ? number_format($DataPropertyDetail->biaya_sarapan_tambahan) : NULL ?>">
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
                        <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                        <select class="form-control" name="master_cancel_id" id="master_cancel_id" required>
                            <?php  foreach ($DataPropertiMasterCancel as $ReadDS) { ?>
                                <option <?= !empty($DataPropertyDetail) ? $DataPropertyDetail->master_cancel_id == $ReadDS->id ? "selected" : NULL : NULL ?> value="<?= $ReadDS->id  ?>" ><?= $ReadDS->nama; ?></option>
                            <?php } ?>
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
                        <!-- <?php foreach ($DataPropertiMasterStyle as $dpms) { ?>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="master_style_id[]" id="master_style_id[]" value="<?php echo $dpms->id; ?>"  <?= $DataPropertyDetail->master_style_id === $dpms->id ? 'checked' : '' ?>>
                                    <?php echo $dpms->nama; ?>
                                </label>
                            </div>
                        <?php } ?> -->
                        <?php if (!empty($DataPropertyDetail)): ?>
                            <?php  foreach (json_decode($DataPropertyDetail->master_style_id) as $style_id): $arrayData[$style_id] = $style_id; ?>
                            <?php endforeach ?>                        
                            <div class="form-group">
                                <?php foreach ($DataPropertiMasterStyle as $dpms): ?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="master_style_id[]" id="master_style_id[]" 
                                                    <?php if (in_array($dpms->id, $arrayData)) { ?>
                                                        checked="checked"
                                                    <?php } ?>
                                                value="<?echo $dpms->id ?>" />
                                                <?php echo $dpms->nama; ?>
                                            </label>
                                        </div>
                                <?php endforeach ?>
                            </div>
                        <?php else: ?>
                                <div class="form-group">
                                <?php foreach ($DataPropertiMasterStyle as $dpms) { ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="master_style_id[]" id="master_style_id[]" value="<?php echo $dpms->id; ?>">
                                            <?php echo $dpms->nama; ?>
                                        </label>
                                    </div>
                                <?php } ?>
                                </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button id="simpan" type="button" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $("#simpan").on('click', function() {
        var input = $('#input').serialize();
        var url = "<?php echo site_url('Property_detail/SavePropertyDetail'); ?>";
        $.ajax({
            url: url,
            type: "POST",
            data: input,
            dataType: "JSON",
            success: function(data, status, xhr) {
                var result = data;
                $('#informasi_umum_detail_id').val(result.informasi_umum_detail_id);
                $('#properti_detail_id').val(result.id);
                /*$("#Property_detail").attr("href",
                    "<?php echo site_url('Property_detail/index'); ?>" + "/" + result
                    .informasi_umum_detail_id);
                alert("Data Tersimpan");*/
                swal({
                  title: "Success!",
                  text: "Berhasil Update Data.",
                  type: "success",
                  timer: 5000,
                  showConfirmButton: true
                })
                .then((response) => {
                      window.location.href = `${result.informasi_umum_detail_id}`
                })
            }
        });
    })



});
</script>

<!-- /.col -->