<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.js"></script>

<div class="container">
    <div class="row mt-20">
        <div class="col-md-12">
        <form action="/test" method="post" class="dropzone dropzone-file-area" id="formPhoto">
        @csrf
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        <span class="sbold">Drop files here or click to upload <br/>Max size: 10MB</span>
        </form>
        </div>
    </div>
    <div class="row mt-20">
        <div class="col-md-12">
            <button id="btnUpload" class="btn waves-effect waves-light btn-outline-success"><i class="fa fa-upload"></i> Upload</button>
            <div class="dz-error-message"></div>
        </div>
    </div>
</div>

<script>
 Dropzone.options.formPhoto = {
    autoProcessQueue: false,
    maxFilesize: 10,
    maxThumbnailFilesize: 10,
    maxFiles: 1,
    parallelUploads: 2,
    timeout: 3600000, //1h
    addRemoveLinks: true,
    dictRemoveFile: 'Clear',
    acceptedFiles: '.jpg, .jpeg, .png',
    init: function() {
        var submitButton = document.querySelector("#btnUpload")
        myDropzone = this; // closure
        submitButton.addEventListener("click", function() {
            myDropzone.processQueue();
        });
        // files are dropped here:
        this.on("addedfile", function() {

        });
        this.on('error', function(file, errorMessage) {
            if (errorMessage.indexOf('Error 404') !== -1) {
                var errorDisplay = document.querySelectorAll('[dz-error-message]');
                errorDisplay[errorDisplay.length - 1].innerHTML = 'Error 404: The upload page was not found on the server';
            }
            if (errorMessage.indexOf('File is too big') !== -1) {
                toastr.warning("Max size 10MB");
                // i remove current file
                this.removeFile(file);
            }
        });
        this.on("complete", function (file, response) {
            if(response==0){
                toastr.warning("Format accepted .jpg, .png, .jpeg");
            }else{
                toastr.success("Save successfull");;
            }
        });
    }
}
</script>
