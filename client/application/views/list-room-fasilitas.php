<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Property Facilities</h1>
    <form action="<?php echo site_url('Room_facilities/AddFasilitasKamar'); ?>" method="post" role="form" enctype='multipart/form-data'>
        <div class="card-body">
            <input style="display: none;" type="text" name="id_fasilitas_kamar" value="<?= !empty($DataFasilitasKamar) ? $DataFasilitasKamar->id : "" ?>">
            <div class="form-group">
                <label>Pilih Informati Umum Detail</label>
                <select class="form-control" name="informasi_umum_detail_id" required>
                    <option value="">Pilih Informati Umum Detail</option>
                    <?php

                    foreach ($DataInformationDetail as $ReadDS) {
                    ?>
                        <option <?= !empty($DataFasilitasKamar) ? $DataFasilitasKamar->informasi_umum_detail_id != "" ? $DataFasilitasKamar->informasi_umum_detail_id == $ReadDS->id ? "selected" : "" : "" : "" ?> value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_properti; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <?php

            foreach ($DataFasilitasKamarHeader as $ReadDS) {
            ?>

                <div class="card collapsed-card">
                    <div class="card-header">

                        <h3 class="card-title"><?php echo $ReadDS->nama; ?></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <?php if (!empty($DataFasilitasKamar)): ?>
                        <?php foreach (json_decode($DataFasilitasKamar->availability_tipe_kamar_id) as $key): 
                            $arrayData[$key] = $key;
                        ?>
                        <?php endforeach ?>

                    <?php endif ?>

                    <!-- /.card-header -->
                    <?php foreach ($FasilitasKamar as $ReadDS) { ?>
                        <div class="card-body">
                            <div class="row mt-1">
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input 
                                        <?php if (in_array($ReadDS->id, $arrayData)): ?>
                                            checked="checked"
                                        <?php endif ?>
                                        class="form-check-input mr-2" type="checkbox" name="availability_tipe_kamar_id[]" id="exampleRadios1" value="<?php echo $ReadDS->id; ?>" />
                                        <input class="form-check-input mr-2" type="hidden" name="fasilitas_kamar_detail_id" id="exampleRadios1" value="<?php echo $ReadDS->id; ?>" />
                                        <label class="form-check-label" for="exampleRadios1"> <?php echo $ReadDS->nama; ?> </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>

            <?php
            }
            ?>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>