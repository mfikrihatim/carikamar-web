<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Property Detail</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <div class="card-body">
        <div class="form-group">
					<label>Pilih Informati Umum Detail</label>
					<select class="form-control" name="informasi_umum_detail_id" required>
						<option value="">Pilih Informati Umum Detail</option>
                  <?php
           
							foreach($DataInformationDetail as $ReadDS){
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
					<input type="text" name="mata_uang" class="form-control" placeholder="Masukan Mata Uang"required >
				</div>
            <div class="row mt-3">
                <div class="col-4">
                    Reception Area
                </div>
                <div class="col-7">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flag_kawasan"
                            value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            Available 24 Hours
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flag_kawasan"
                            value="2">
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
                                    <input type="text" name="waktu_checkin" class="form-control col-6 datetimepicker-input"
                                        data-toggle="datetimepicker" data-target="#checkin_from" />
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
                                    <input type="text" name="waktu_checkout" class="form-control col-6 datetimepicker-input"
                                        data-toggle="datetimepicker" data-target="#checkout_from" />
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
                        <input type="text" class="form-control col-3" id="inlineFormInputGroupUsername">
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
                        <input type="text" class="form-control col-3" id="inlineFormInputGroupUsername">
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
                        <input type="text" class="form-control col-4" id="inlineFormInputGroupUsername">
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
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Non Refundable</option>
                            <option>Cancel 1D prior arrival 1N charge, No Show 1N charge</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
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
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Adventure
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Backpacker
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Budget
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Conference
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Hip
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Honeymoon
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Luxury
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Shopping
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Spa
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Airport
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Boutique
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Business
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Family
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Golf
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Historic
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Long Stay
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Pet-friendly
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Single
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-2" type="checkbox" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Resort
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.col -->