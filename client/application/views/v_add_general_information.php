<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">General Information</h1>
    <div class="card">
        <div class="card-header">Property Details</div>
        <form id="input">
            <input type="text" name="informasi_umum_detail_id" id="informasi_umum_detail_id" class="form-control"
                style="display:none" value="" />
            <input type="text" name="informasi_umum_kontak_id" id="informasi_umum_kontak_id" class="form-control"
                style="display:none" value="" />
            <div class="card-body">
                <div class="row">
                    <div class="col-4">Property Name*</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_properti" id="nama_properti" value="<?= empty($DataMasterProperti->nama_properti) ? '' : $DataMasterProperti->nama_properti ?>"/>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Legal Entity Name</div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="nama_badan_hukum" id="nama_badan_hukum" value='<?= empty($DataMasterProperti->nama_badan_hukum) ? '' : $DataMasterProperti->nama_badan_hukum ?>'/>
                    </div>
                </div>
                <hr />

                <div class="row mt-3">
                    <div class="col-4">Property Type*</div>
                    <div class="col-7">
                        <div class="form-check mb-1">
                            <?php
                            foreach ($DataMasterTipeProperti as $ReadDS) {
                            ?>
                                <input class="form-check-input" type="radio" name="tipe_properti_id" id="tipe_properti_id" value="<?= $ReadDS->id ?>" >
                                <b><?php echo $ReadDS->nama_tipe; ?></b><br />
                                <?php echo $ReadDS->deskripsi; ?><br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Property Address</div>
                    <div class="col-7">
                        <!-- <div id="googleMap" style="height: 400px"></div>
                        <input type="hidden" name="lat" id="lat" />
                        <input type="hidden" name="lng" id="lng" /> -->

                        <div class="form-group mt-3">
                            <p>Maps*</p>
                            <div id="googleMapJancok" style="height: 400px"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="lat_maps" id="lat_maps" placeholder="Lat ..." readonly="" value="">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="lng_maps" id="lng_maps" placeholder="Long ..." readonly="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <p>Street Address*</p>
                            <textarea class="form-control" name="alamat_jalan" id="alamat_jalan" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <p>Postal Code*</p>
                            <input type="text" name="kode_pos" class="form-control" id="kode_pos" value=""/>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Phone Number</div>
                    <div class="col-7">
                        <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= !empty($DataMasterProperti->no_telp) ? $DataMasterProperti->no_telp : null  ?>"/>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">Number of Rooms*</div>
                    <div class="col-7">
                        <input type="text" name="jumlah_kamar" id="jumlah_kamar" class="form-control" value="<?= !empty($DataMasterProperti->jumlah_kamar) ? $DataMasterProperti->jumlah_kamar : null ?>"/>
                    </div>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col-4">
                        Flag Chanel Manager
                        <!-- <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span> -->
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flag_chanel_manager" value="1" <?= !empty($DataMasterProperti->flag_chanel_manager) == 1 ? 'checked' : NULL ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flag_chanel_manager" value="0" <?= !empty($DataMasterProperti->flag_chanel_manager) == 0 ? 'checked' : NULL ?> />
                            <label class="form-check-label" for="exampleRadios1">
                                No
                            </label>
                        </div>
                    </div>

                </div>
                <br>

                <div class="card">

                    <div class="card-body">
                        <div class="card-header">
                            <h4><b>Property Contacts</b></h4>
                        </div>
                        <div class="row" id="row-contact">
                            <div class="col-6" id="main-contact">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Jenis Kontak</p>
                                        <input type="text" name="jenis_kontak" id="jenis_kontak" class="form-control" value='<?= empty($DataMasterKontak->jenis_kontak) ? '' : $DataMasterKontak->jenis_kontak ?>' />
                                        <p class="mt-3">Nama Lengkap*</p>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value='<?= empty($DataMasterKontak->jenis_kontak) ? '' : $DataMasterKontak->jenis_kontak ?>' />
                                        <p class="mt-3">Email*</p>
                                        <input type="email" name="email" id="email" class="form-control" value="<?= empty($DataMasterKontak->email) ? '' : $DataMasterKontak->email ?>" />
                                        <p class="mt-3">Phone Number*</p>
                                        <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?= empty($DataMasterKontak->no_hp) ? '' : $DataMasterKontak->no_hp ?>"/>
                                        <p class="mt-3">Telfon Kantor*</p>
                                        <input type="number" name="no_telp_kantor" id="no_telp_kantor" class="form-control" value="<?= empty($DataMasterKontak->no_telp_kantor) ? '' : $DataMasterKontak->no_telp_kantor ?>" />
                                        <p class="mt-3">Extension*</p>
                                        <input type="text" name="extension" id="extension" class="form-control" value="<?= empty($DataMasterKontak->extension) ? '' : $DataMasterKontak->extension ?>"/>
                                        <p class="mt-3">Jabatan*</p>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= empty($DataMasterKontak->jabatan) ? '' : $DataMasterKontak->jabatan ?>"/>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input mr-3" type="checkbox" name="flag_fullday" id="flag_fullday" id="exampleRadios1" value="1" <?= empty($DataMasterKontak->flag_fullday) == 0 ? NULL : 'checked' ?> />
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
        var url = "<?php echo site_url('General_information/SaveGeneralInformation'); ?>";
        $.ajax({
            url: url,
            type: "POST",
            data: input,
            dataType: "JSON",
            success: function(data, status, xhr) {
                var result = data;
                $('#informasi_umum_detail_id').val(result.informasi_umum_detail_id);
                $('#informasi_umum_kontak_id').val(result.informasi_umum_kontak_id);
                $("#Property_detail").attr("href",
                    "<?php echo site_url('Property_detail/index'); ?>" + "/" + result
                    .informasi_umum_detail_id);
                // alert("Data Tersimpan");
                swal({
                  title: "Success!",
                  text: "Berhasil Manambahkan Data.",
                  type: "success",
                  timer: 5000,
                  showConfirmButton: true
                })
                .then((response) => {
                      window.location.href = `index/${result.informasi_umum_detail_id}`
                })
            }
        });
    })
});
</script>
<script type="text/javascript">
let map;
let marker;
let geocoder;
let responseDiv;
let response;
var lat_now = `<?= $lat ?>`;
var lng_now = `<?= $lng ?>`;

window.onload = function () {
    initMap();
};

function addMarkerInfo() {
    
    var MarkerMaps = async () => {
        var myLatlng = {lat: parseFloat(lat_now), lng: parseFloat()}
        var icons = "https://i.ibb.co/1Qctzk1/map-marker.png"
        const marker = new google.maps.Marker({
            position: myLatlng,
            icon: {
                url: icons,
            },
            map: map,
            title: "Hello World!",
            draggable: true,

        });
    }
    MarkerMaps()
}

function closeOtherInfo() {
    if (InforObj.length > 0) {
        InforObj[0].set("marker", null);
        InforObj[0].close();
        InforObj.length = 0;
    }
}

function clear() {
  marker.setMap(null);
  responseDiv.style.display = "none";
}

function geocode(request) {
  clear();
  geocoder
    .geocode(request)
    .then((result) => {
      const { results } = result;

      map.setCenter(results[0].geometry.location);
      marker.setPosition(results[0].geometry.location);
      marker.setMap(map);
      // responseDiv.style.display = "block";
      // response.innerText = JSON.stringify(result, null, 2);
      result.results.map((data, index) => {
        var html = `
          <table><tbody>
              <tr valign="top">
                <td style="padding: 2px">
                  <span id="result-0-marker-img" style="display:block;background-image:url('https://developers-dot-devsite-v2-prod.appspot.com…s/documentation/utils/geocoder/images/markerA.png');width:20px;height:34px;"></span>
                </td>
                <td style="padding: 2px;">
                  <p class="result-formatted-address">
                  ${data.formatted_address}</p>
                  <p class="result-location">
                    Location:
                  ${data.geometry.location.lat()}.${data.geometry.location.lng()}</p>
                  <div id="details-result-0">
                </div></td>
              </tr>
            </tbody></table>
        `  
        responseDiv.style.display = "block";
        // response.innerHTML = html;
        $('#lat_maps').val(data.geometry.location.lat())
        $('#lng_maps').val(data.geometry.location.lng())
        $('#alamat_jalan').text(data.formatted_address)
      })
      return result
    })
    .catch((e) => {
      alert("Geocode was not successful for the following reason: " + e);
    });
}

function initMap() {
    
    var centerCords = {
        lat: parseFloat(lat_now), lng: parseFloat(lng_now) 
    };
    
    map = new google.maps.Map(document.getElementById('googleMapJancok'), {
      center: centerCords,
      zoom: 16,
      // styles: sat_map_style,
      streetViewControl: false,
      mapTypeControl: false,
      overviewMapControl: false,
      zoomControl: false,
      fullscreenControl: false,
      // mapTypeId: 'roadmap'
    });
    addMarkerInfo();

    geocoder = new google.maps.Geocoder();

    const inputText = document.createElement("input");

    inputText.type = "text";
    inputText.placeholder = "Enter a location";
    // inputText.classList.add("input", "style: width: 100px;");

    const submitButton = document.createElement("input");

    submitButton.type = "button";
    submitButton.value = "Cari Lokasi";
    submitButton.classList.add("button", "btn-primary");

    const clearButton = document.createElement("input");

    clearButton.type = "button";
    clearButton.value = "Clear";
    clearButton.classList.add("button", "btn-secondary");
    response = document.createElement("div");
    response.id = "response";
    response.innerText = "";
    responseDiv = document.createElement("div");
    responseDiv.id = "response-container";
    responseDiv.appendChild(response);

    const instructionsElement = document.createElement("p");

    instructionsElement.id = "instructions";
    // instructionsElement.innerHTML ="<strong>Instructions</strong>: Enter an address in the textbox to geocode or click on the map to reverse geocode.";
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(inputText);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(submitButton);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(clearButton);
    map.controls[google.maps.ControlPosition.LEFT_TOP].push(instructionsElement);
    map.controls[google.maps.ControlPosition.LEFT_TOP].push(responseDiv);

    marker = new google.maps.Marker({
        map,
    });
    map.addListener("click", (e) => {
        geocode({ location: e.latLng });
    });
    submitButton.addEventListener("click", () =>
        geocode({ address: inputText.value })
    );
    clearButton.addEventListener("click", () => {
        clear();
    });

    clear();
}
</script>