<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Property Facilities</h1>
    <form id="input">
                <!-- <input type="text" name="informasi_umum_detail_id" id="informasi_umum_detail_id" class="form-control"
                style="display:none" value="" /> -->
                <input type="text" name="id" id="fasilitas_properti_id" class="form-control"
                style="display:none" value="" />
        <div class="card-body">
            <div class="form-group">
                <label>Pilih Informati Umum Detail</label>
                <select class="form-control" name="informasi_umum_detail_id"  required>
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
            <?php

            foreach ($DataMasterFasilitasPropertiHeader as $ReadDS) {
            ?>

                <div class="card collapsed-card">
                    <div class="card-header">

                        <h3 class="card-title"><?php echo $ReadDS->nama; ?></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <!-- /.card-header -->
                    <?php

                    foreach ($FasilitasProperti as $ReadDS) {
                    ?>
                        <div class="card-body">
                            <div class="row mt-1">
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input mr-2" type="checkbox" name="fasilitas_properti_detail_id" id="exampleRadios1"  value="<?php echo $ReadDS->id; ?>" />
                                        <label class="form-check-label" for="exampleRadios1"> <?php echo $ReadDS->nama; ?> </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            <?php
            }
            ?>
            <div class="form-group">
                <label>Flag Free</label>
                <div class="radio">
                    <label>
                        <input type="radio" value="1" name="flag_free" id="optionsRadios1"  required>
                        Yes
                    </label>
                    <label>
                        <input type="radio" value="0" name="flag_free" id="optionsRadios1"  required>
                        NO
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Flag Fullday</label>
                <div class="radio">
                    <label>
                        <input type="radio" value="1" name="flag_fullday"  id="optionsRadios1" required>
                        Yes
                    </label>
                    <label>
                        <input type="radio" value="0" name="flag_fullday"  id="optionsRadios1" required>
                        NO
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button id="simpan" type="button" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function() {
    $("#simpan").on('click', function() {
        var input = $('#input').serialize();
        var url = "<?php echo site_url('Property_facilities/SavePropertyFasilitas'); ?>";
        $.ajax({
            url: url,
            type: "POST",
            data: input,
            dataType: "JSON",
            success: function(data, status, xhr) {
                var result = data;
                $('#informasi_umum_detail_id').val(result.informasi_umum_detail_id);
                $('#fasilitas_properti_id').val(result.id);
                $("#Property_detail").attr("href",
                    "<?php echo site_url('Property_detail/index'); ?>" + "/" + result
                    .informasi_umum_detail_id);
                alert("Data Tersimpan");
            }
        });
    })



});
</script>