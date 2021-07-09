<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Rooms</h1>
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
                        <div class="row mt-3">
                            <div class="col-4">Room Name*</div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="nama_properti" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">Room Specification</div>
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Room Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Non Refundable</option>
                                        <option>
                                            Cancel 1D prior arrival 1N charge, No Show 1N charge
                                        </option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Bed Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Non Refundable</option>
                                        <option>
                                            Cancel 1D prior arrival 1N charge, No Show 1N charge
                                        </option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Maximum Occupany</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" />
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
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" />
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
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" />
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
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" />
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
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" />
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
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">Breakfast Included*</div>
                            <div class="col-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1" checked />
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1" checked />
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
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" />
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
<!-- /.col -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#clonebutton").click(function() {
        $("#clonecard").clone().appendTo("#clonetempat");
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