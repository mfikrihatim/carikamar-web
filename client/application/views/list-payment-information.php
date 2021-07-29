<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Payment Information</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form action="<?php echo site_url('General_information/AddGeneralInformation'); ?>" method="post" role="form"
            enctype='multipart/form-data'>
            <div class="card-body">
                <div class="row ">
                    <div class="col-4">
                        Preferred Method
                        <!-- <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span> -->
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="preferred_mtehod" value="0" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Bank Transfer
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="preferred_mtehod" value="1" checked />
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
                            <select class="form-control" name="bank_name" required>
                                <option value="">Choose Bank</option>
                                <!-- <?php

                            foreach ($DataMasterBank as $ReadDS) {
                            ?>
                            <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama; ?></option>
                            <?php
                            }
                            ?> -->
                            </select>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Account Number</div>
                    <div class="col-7">
                        <input type="number" class="form-control" name="account_number" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Account Holder</div>
                    <div class="col-7">
                        <input type="text" name="account_number" class="form-control" />
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
                            <input class="form-check-input" type="radio" name="payment_plan" value="0" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                In Advance
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment_plan" value="1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Weekly
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment_plan" value="2" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Monthly
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>
<!-- /.col -->