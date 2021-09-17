<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Rooms</h1>
    <form id="input">
        <!-- <input type="text" name="informasi_umum_detail_id" id="informasi_umum_detail_id" class="form-control"
                style="display:none" value="" /> -->
        <?php if (!empty($DataInformationDetailEdit)): ?>
        
            <?php foreach ((object) $DataInformationDetailEdit as $key): ?>
                <input type="text" name="id[]" id="tipe_kamar_id" class="form-control"
                style="display:none" value="<?= $key->id ?>" />
                <div class="card">
                    <div class="card-header">Rooms Type</div>
                    <div class="card-body">
                        <div class="row" id="clonetempat">
                            <div class="card col-12" id="clonecard">
                                <div class="card-header">
                                    <h3 class="card-title">Room</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-primary" id="clonebutton">
                                            Duplicate
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Pilih Informati Umum Detail</label>
                                        <select class="form-control" name="informasi_umum_detail_id[]" required>
                                            <option value="">Pilih Informati Umum Detail</option>
                                            <?php

                                            foreach ($DataInformationDetail as $ReadDS) {
                                            ?>
                                                <option <?= $ReadDS->id == $key->informasi_umum_detail_id ? "selected" : "" ?> value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mt-3">
                                            <div class="col-4">Room Name*</div>
                                            <div class="col-7">
                                                <input type="text" name="nama_kamar[]" class="form-control" name="nama_properti" value="<?= $key->nama_kamar ?>" />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">Room Specification</div>
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Room Type</label>
                                                    <select class="form-control" name="master_tipe_kamar_id[]" required>
                                                        <option value="">Room Type</option>
                                                        <?php
                                                        foreach ($DataMasterTipeKamar as $ReadDS) {
                                                        ?>
                                                            <option <?= $ReadDS->id == $key->master_tipe_kamar_id ? "selected" : "" ?> value="<?php echo $ReadDS->id; ?>">
                                                                <?php echo $ReadDS->nama_tipe_kamar; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Bed Type</label>
                                                    <select class="form-control" name="master_tipe_kasur_id[]" required>
                                                        <option value="">Bed Type</option>
                                                        <?php

                                                        foreach ($DataMasterTipeKasur as $ReadDS) {
                                                        ?>
                                                            <option <?= $ReadDS->id == $key->master_tipe_kasur_id ? "selected" : "" ?> value="<?php echo $ReadDS->id; ?>">
                                                                <?php echo $ReadDS->nama_tipe_kasur; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Maximum Occupany</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="maksimum_kapasitas[]" id="inlineFormInputGroupUsername" value="<?= $key->maksimum_kapasitas ?>" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">Person</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">Extra Bed Information</div>
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Maximum Extra Beds</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="maksimum_extra_bed[]" id="inlineFormInputGroupUsername" value="<?= $key->maksimum_extra_bed ?>" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">Pieces</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Price of Extra Beds</label>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">IDR</div>
                                                        </div>
                                                        <input type="text" class="form-control" name="harga_extra_bed[]" id="inlineFormInputGroupUsername" value="<?= $key->harga_extra_bed ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">Room Size</div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Width</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="ukuran_kamar_lebar[]" id="inlineFormInputGroupUsername" value="<?= $key->ukuran_kamar_lebar ?>" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">Meters</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Length</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="ukuran_kamar_panjang[]" id="inlineFormInputGroupUsername" value="<?= $key->ukuran_kamar_panjang ?>" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">Meters</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">Room Rate*</div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">IDR</div>
                                                        </div>
                                                        <input type="text" class="form-control" name="harga_kamar[]" id="inlineFormInputGroupUsername" required value="<?= $key->harga_kamar ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">Breakfast Included*</div>
                                            <?php $breakfast = array('yes' => 1, 'no' => 0); ?>
                                                <div class="col-7">
                                                <?php foreach ($breakfast as $no => $value): ?>
                                                        <div class="form-check form-check-inline">
                                                            <input <?=  $key->flag_included_breakfast == $value ? "checked" : "" ?> class="form-check-input" type="radio" name="flag_included_breakfast[]<?= $value ?>" id="exampleRadios1<?= $value ?>" value="<?= $value ?>" />
                                                            <label class="form-check-label" for="exampleRadios1<?= $value ?>">
                                                                <?= $no ?>
                                                            </label>
                                                        </div>
                                                <?php endforeach ?>
                                                </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">Number Of This Rooms Type</div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlah_kamar[]" id="inlineFormInputGroupUsername" value="<?= $key->jumlah_kamar ?>" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">Rooms</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>    
            <?php endforeach ?>

        <?php else: ?>
            <div class="card">
                <div class="card-header" id="cloneTempat1">Rooms Type</div>
                <div class="card-body">
                    <div class="row" id="clonetempat">
                        <div class="card col-12" id="clonecard">
                            <div class="card-header">
                                <h3 class="card-title">Room</h3>
                                <div class="card-tools">
                                    <button class="btn btn-primary" id="clonebutton">
                                        Duplicate
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pilih Informati Umum Detail</label>
                                    <select class="form-control" name="informasi_umum_detail_id[]" required>
                                        <option value="">Pilih Informati Umum Detail</option>
                                        <?php

                                        foreach ($DataInformationDetail as $ReadDS) {
                                        ?>
                                            <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col-4">Room Name*</div>
                                        <div class="col-7">
                                            <input type="text" name="nama_kamar[]" class="form-control" name="nama_properti" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Room Specification</div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Room Type</label>
                                                <select class="form-control" name="master_tipe_kamar_id[]" required>
                                                    <option value="">Room Type</option>
                                                    <?php

                                                    foreach ($DataMasterTipeKamar as $ReadDS) {
                                                    ?>
                                                        <option value="<?php echo $ReadDS->id; ?>">
                                                            <?php echo $ReadDS->nama_tipe_kamar; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Bed Type</label>
                                                <select class="form-control" name="master_tipe_kasur_id[]" required>
                                                    <option value="">Bed Type</option>
                                                    <?php

                                                    foreach ($DataMasterTipeKasur as $ReadDS) {
                                                    ?>
                                                        <option value="<?php echo $ReadDS->id; ?>">
                                                            <?php echo $ReadDS->nama_tipe_kasur; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Maximum Occupany</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="maksimum_kapasitas[]" id="inlineFormInputGroupUsername" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">Person</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Extra Bed Information</div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Maximum Extra Beds</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="maksimum_extra_bed[]" id="inlineFormInputGroupUsername" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">Pieces</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Price of Extra Beds</label>
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">IDR</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="harga_extra_bed[]" id="inlineFormInputGroupUsername" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Room Size</div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Width</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="ukuran_kamar_lebar[]" id="inlineFormInputGroupUsername" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">Meters</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Length</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="ukuran_kamar_panjang[]" id="inlineFormInputGroupUsername" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">Meters</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Room Rate*</div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">IDR</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="harga_kamar[]" id="inlineFormInputGroupUsername" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Breakfast Included*</div>
                                        <div class="col-7">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flag_included_breakfast[]" id="exampleRadios1" value="1" />
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flag_included_breakfast[]" id="exampleRadios1" value="0" />
                                                <label class="form-check-label" for="exampleRadios1">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Number Of This Rooms Type</div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="jumlah_kamar[]" id="inlineFormInputGroupUsername" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">Rooms</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>

            </div>
        <?php endif ?>
        
        <div class="form-group">
        <button id="simpan" type="button" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var counter = 0;
            $("#clonebutton").click(function(e) {
                // $("#clonecard").clone().appendTo("#clonetempat");
                e.preventDefault();
                counter++
                var html = `
                    <div class="card-body"><div class="card-header"><div class="card-body"> <div class="form-group"> <label>Pilih Informati Umum Detail</label> <select class="form-control" name="informasi_umum_detail_id[]" required> <option value="">Pilih Informati Umum Detail</option> <?php foreach ($DataInformationDetail as $ReadDS) { ?> <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?> </option> <?php } ?> </select> </div> <div class="card-body"> <div class="row mt-3"> <div class="col-4">Room Name*</div> <div class="col-7"> <input type="text" name="nama_kamar[]" class="form-control" name="nama_properti" /> </div> </div> <div class="row mt-3"> <div class="col-4">Room Specification</div> <div class="col-7"> <div class="form-group"> <label for="exampleFormControlSelect1">Room Type</label> <select class="form-control" name="master_tipe_kamar_id[]" required> <option value="">Room Type</option> <?php foreach ($DataMasterTipeKamar as $ReadDS) { ?> <option value="<?php echo $ReadDS->id; ?>"> <?php echo $ReadDS->nama_tipe_kamar; ?></option> <?php } ?> </select> </div> <div class="form-group"> <label for="exampleFormControlSelect1">Bed Type</label> <select class="form-control" name="master_tipe_kasur_id[]" required> <option value="">Bed Type</option> <?php foreach ($DataMasterTipeKasur as $ReadDS) { ?> <option value="<?php echo $ReadDS->id; ?>"> <?php echo $ReadDS->nama_tipe_kasur; ?></option> <?php } ?> </select> </div> <div class="form-group"> <label for="exampleFormControlSelect1">Maximum Occupany</label> <div class="input-group"> <input type="text" class="form-control" name="maksimum_kapasitas[]" id="inlineFormInputGroupUsername" /> <div class="input-group-append"> <div class="input-group-text">Person</div> </div> </div> </div> </div> </div> <div class="row mt-3"> <div class="col-4">Extra Bed Information</div> <div class="col-7"> <div class="form-group"> <label for="exampleFormControlSelect1">Maximum Extra Beds</label> <div class="input-group"> <input type="text" class="form-control" name="maksimum_extra_bed[]" id="inlineFormInputGroupUsername" /> <div class="input-group-append"> <div class="input-group-text">Pieces</div> </div> </div> </div> <div class="form-group"> <label for="exampleFormControlSelect1">Price of Extra Beds</label> <div class="input-group"> <div class="input-group-append"> <div class="input-group-text">IDR</div> </div> <input type="text" class="form-control" name="harga_extra_bed[]" id="inlineFormInputGroupUsername" /> </div> </div> </div> </div> <div class="row mt-3"> <div class="col-4">Room Size</div> <div class="col-4"> <div class="form-group"> <label for="exampleFormControlSelect1">Width</label> <div class="input-group"> <input type="text" class="form-control" name="ukuran_kamar_lebar[]" id="inlineFormInputGroupUsername" /> <div class="input-group-append"> <div class="input-group-text">Meters</div> </div> </div> </div> </div> <div class="col-4"> <div class="form-group"> <label for="exampleFormControlSelect1">Length</label> <div class="input-group"> <input type="text" class="form-control" name="ukuran_kamar_panjang[]" id="inlineFormInputGroupUsername" /> <div class="input-group-append"> <div class="input-group-text">Meters</div> </div> </div> </div> </div> </div> <div class="row mt-3"> <div class="col-4">Room Rate*</div> <div class="col-4"> <div class="form-group"> <div class="input-group"> <div class="input-group-append"> <div class="input-group-text">IDR</div> </div> <input type="text" class="form-control" name="harga_kamar[]" id="inlineFormInputGroupUsername" required /> </div> </div> </div> </div> <div class="row mt-3"> <div class="col-4">Breakfast Included*</div> <div class="col-7"> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="flag_included_breakfast[]${counter}" id="exampleRadios1${counter}" value="1" /> <label class="form-check-label" for="exampleRadios1${counter}"> Yes </label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="flag_included_breakfast[]${counter}" id="exampleRadios1${counter}" value="0" /> <label class="form-check-label" for="exampleRadios1${counter}"> No </label> </div> </div> </div> <div class="row mt-3"> <div class="col-4">Number Of This Rooms Type</div> <div class="col-4"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name="jumlah_kamar[]" id="inlineFormInputGroupUsername" /> <div class="input-group-append"> <div class="input-group-text">Rooms</div> </div> </div> </div> </div> </div> </div> </div></div></div>
                `
                $("#clonetempat").append(html);                
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#removebutton").click(function() {
                $("#clonecard").remove();
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$(document).ready(function() {
    $("#simpan").on('click', function() {
        var input = $('#input').serialize();
        var url = "<?php echo site_url('Room/SaveTipeKamar'); ?>";
        $.ajax({
            url: url,
            type: "POST",
            data: input,
            dataType: "JSON",
            success: function(data, status, xhr) {
                var result = data;
                $('#informasi_umum_detail_id').val(result.informasi_umum_detail_id);
                $('#tipe_kamar_id').val(result.id);
                // $("#Property_detail").attr("href",
                //     "<?php echo site_url('Property_detail/index'); ?>" + "/" + result
                //     .informasi_umum_detail_id);
                // alert("Data Tersimpan");
                // swal({
                //   title: "Success!",
                //   text: "Berhasil Update Data.",
                //   type: "success",
                //   timer: 5000,
                //   showConfirmButton: true
                // })
                // .then((response) => {
                //       window.location.href = ""
                // })
            }
        });
    })



});
</script>