    <!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Payment Information</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form id="input">
            <input type="text" name="informasi_umum_detail_id" id="informasi_umum_detail_id" class="form-control"
                style="display:none" value="<?= $CurrentUrl ?>" />
        <input type="text" name="id" id="informasi_pembayaran_id" class="form-control"
                style="display:none" value="<?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->id != NULL ? $dataInformationPembayaran->id : "" : "" ?>" />
            <div class="card-body">
                <div class="row ">
                    <div class="col-4">
                        Preferred Method
                        <!-- <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span> -->
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pilihan_metode" value="1" <?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->pilihan_metode != "" ? $dataInformationPembayaran->pilihan_metode == 1 ? "checked" : "" : "" : "" ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                Bank Transfer
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pilihan_metode" value="2" <?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->pilihan_metode != "" ? $dataInformationPembayaran->pilihan_metode == 2 ? "checked" : "" : "" : "" ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                VCC
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Bank Name</div>
                    <div class="col-7">
                        <div class="form-group">
                            <select class="form-control" name="master_bank_id" required>
                                <option value="">Choose Bank</option>
                                <?php

                            foreach ($DataMasterBank as $ReadDS) {
                            ?>
                            <option <?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->master_bank_id != "" ? $dataInformationPembayaran->master_bank_id == $ReadDS->id ? "selected" : "" : "" : ""  ?> value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_bank; ?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Account Number</div>
                    <div class="col-7">
                        <input type="number" class="form-control" name="nomor_akun" value="<?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->nomor_akun != "" ? $dataInformationPembayaran->nomor_akun : "" : "" ?>" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Account Holder</div>
                    <div class="col-7">
                        <input type="text" name="pemilik_akun" class="form-control" value="<?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->pemilik_akun != "" ? $dataInformationPembayaran->pemilik_akun : "" : "" ?>" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                        Payment Plan
                        <!-- <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span> -->
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rencana_pembayaran" value="1" <?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->rencana_pembayaran != "" ? $dataInformationPembayaran->rencana_pembayaran == 1 ? "checked" : "" : "" : "" ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                In Advance
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rencana_pembayaran" value="2" <?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->rencana_pembayaran != "" ? $dataInformationPembayaran->rencana_pembayaran == 2 ? "checked" : "" : "" : "" ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                Weekly
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rencana_pembayaran" value="3" <?= !empty($dataInformationPembayaran) ? $dataInformationPembayaran->rencana_pembayaran != "" ? $dataInformationPembayaran->rencana_pembayaran == 3 ? "checked" : "" : "" : "" ?>  />
                            <label class="form-check-label" for="exampleRadios1">
                                Monthly
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <button id="simpan" type="button" class="btn btn-primary">Submit</button>
                </div>
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
        var url = "<?php echo site_url('Payment_Information/SavePaymentInformation'); ?>";
        $.ajax({
            url: url,
            type: "POST",
            data: input,
            dataType: "JSON",
            success: function(data, status, xhr) {
                var result = data;
                $('#informasi_umum_detail_id').val(result.informasi_umum_detail_id);
                $('#informasi_pembayaran_id').val(result.id);
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
                      window.location.href = "<?php echo site_url('Payment_Information/index/').$CurrentUrl ?>"
                })
            }
        });
    })

});
</script>
<!-- /.col -->