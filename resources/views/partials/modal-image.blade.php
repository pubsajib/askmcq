<!-- Login Modal -->
<div class="modal fade image" id="imageUpload" tabindex="-1" role="dialog" aria-labelledby="imageUpload" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                    <div id="upload-demo"></div>
                    </div>
                    <div class="col-md-4" style="padding:5%;">
                    <strong>Select image to crop:</strong>
                    <input type="file" id="image">
                    <button class="btn btn-primary btn-block upload-image" style="margin-top:2%">Upload Image</button>
                    </div>
                    <div class="col-md-4">
                    <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>