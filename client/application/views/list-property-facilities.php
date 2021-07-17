<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Property Facilities</h1>
    <form action="<?php echo site_url('Property_facilities/AddPropertyFasilitas'); ?>" method="post" role="form" enctype='multipart/form-data'>
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
                                    <input class="form-check-input mr-2" type="checkbox" name="informasi_umum_detail_id" id="exampleRadios1" value="<?php echo $ReadDS->id; ?>" />
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
</div>