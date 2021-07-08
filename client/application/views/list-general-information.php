<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">General Information</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form action="<?php echo site_url('generalinformation/AddGeneralInformation'); ?>" method="post" role="form" enctype='multipart/form-data'>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">Property Name*</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_properti" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Legal Entity Name</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_badan_hukum" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                        Does This Property Have Different Name Previously?
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                        Does This Property Belong to Particular Hotel Chain?
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Property Type*</div>
                    <div class="col-7">
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Hotel</b><br />
                                Establishment that provides accommodations, meals,
                                and other services for paying guests (travellers,
                                tourists)
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Hostel</b><br />
                                Budget accommodation (usually shared-room type) rent
                                by individual travellers (backpackers) or groups
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Villa</b><br />
                                Furnished country house located in countryside area
                                that is often rented for vacation purpose
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Resort</b><br />
                                A fancy accommodation that is located in a very
                                scenic or sometimes remote location without
                                compromising modern technology and amenities
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Apartment</b><br />
                                Serviced apartment complex with hotel-style booking
                                system that enables travellers to stay for a period
                                of time
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Bed and Breakfast</b><br />
                                An establishment that offers a spare room in private
                                accommodation (e.g. private house, boarding house).
                                It also provides breakfast
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Other</b><br />
                            </label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Property Address</div>
                    <div class="col-7">
                        <div id="googleMap" style="height: 400px"></div>
                        <input type="hidden" name="lat" id="lat" />
                        <input type="hidden" name="lng" id="lng" />
                        <div class="form-group mt-3">
                            <p>Street Address*</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <p>Postal Code*</p>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group mt-3">
                            <p>Country*</p>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="" hidden>Select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Phone Number</div>
                    <div class="col-7">
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Number of Rooms*</div>
                    <div class="col-7">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" />
                            <div class="input-group-append">
                                <div class="input-group-text">Rooms</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                        Does This Property Use Channel Manager System?
                        <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span>
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-header">Property Contacts</div>
        <div class="card-body">
            <div class="row" id="row-contact">
                <div class="col-6" id="main-contact">
                    <div class="card">
                        <div class="card-header">
                            <p class="float-left">Main Contact</p>
                            <button class="
																btn btn-sm btn-default
																float-right
																dropdown-toggle
															" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fas fa-cog"></span> Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-item cursor-pointer" onClick="duplicateContact();">
                                    Duplicate This Contact
                                </div>
                                <div class="dropdown-item cursor-pointer">
                                    Clear All Fields
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Full Name*</p>
                            <input type="text" class="form-control" />
                            <p class="mt-3">E-mail Address*</p>
                            <input type="text" class="form-control" />
                            <p class="mt-3">Mobile Number*</p>
                            <input type="text" class="form-control" />
                            <p class="mt-3">Office Phone Number*</p>
                            <input type="text" class="form-control" />
                            <p class="mt-3">Extension*</p>
                            <input type="text" class="form-control" />
                            <p class="mt-3">Position*</p>
                            <input type="text" class="form-control" />
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input mr-3" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" />
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
</div>
<!-- /.col -->