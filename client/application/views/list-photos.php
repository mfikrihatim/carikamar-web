<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
input[type="file"] {
    display: block;
}

.imageThumb {
    max-height: 75px;
    border: 2px solid;
    padding: 1px;
    cursor: pointer;
}

.pip {
    display: inline-block;
    margin: 10px 10px 0 0;
}

.remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
}

.remove:hover {
    background: white;
    color: black;
}
</style>
<!-- /.col -->
<div class="col-sm-9">
    <h1 class="mb-3 mt-1">Photos</h1>
    <div class="card">
        <div class="card-header">Property</div>
        <form action="<?php echo site_url('General_information/AddGeneralInformation'); ?>" method="post" role="form"
            enctype='multipart/form-data'>
            <div class="card-body">
                <div class="row ">
                    <div class="col-4">
                        Property
                        <!-- <span class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Channel Manager allows you to manage availability, rates, and inventory across all of your OTA channels from a single source"></span> -->
                    </div>
                    <div class="col-7">
                        <div class="field" align="left">
                            <h3>Upload your images</h3>
                            <input type="file" id="files" name="files[]" multiple />
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<!-- /.col -->
<script>
$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result +
                        "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\">Remove image</span>" +
                        "</span>").insertAfter("#files");
                    $(".remove").click(function() {
                        $(this).parent(".pip").remove();
                    });

                    // Old code here
                    /*$("<img></img>", {
                      class: "imageThumb",
                      src: e.target.result,
                      title: file.name + " | Click to remove"
                    }).insertAfter("#files").click(function(){$(this).remove();});*/

                });
                fileReader.readAsDataURL(f);
            }
            console.log(files);
        });
    } else {
        alert("Your browser doesn't support to File API")
    }
});
</script>