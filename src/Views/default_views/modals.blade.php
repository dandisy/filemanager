<!-- Modal Create Folder -->
<div class="modal fade" id="modalCreateFolder" tabindex="-1" role="dialog" aria-labelledby="modalFillInLabel" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">New folder</span> name</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9">
                        <input type="text" placeholder="Name of the new folder" class="form-control input-lg" id="folder-name" name="folder-name">
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" id="create-folder" class="btn btn-primary btn-lg btn-large fs-15">Create Folder</button>
                    </div>
                </div>
                <p class="text-left hinted-text p-t-10 p-r-10">New folder will be created on current folder</p>
            </div>
            <div class="modal-footer">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Modal Create Folder -->

<!-- Modal Rename Folders and Files -->
<div class="modal fade" id="modalRename" tabindex="-1" role="dialog" aria-labelledby="modalFillInLabel" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Rename</span> <span class="file-info hide">this file</span> <span class="folder-info hide">this folder</span></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="type-rename">
                    <input type="hidden" id="path">
                    <div class="col-md-9">
                        <div class="input-group" id="data-rename">
                            <input type="text" placeholder="Your new name" class="form-control input-lg" id="new-name" name="new-name">
                            <span class="input-group-addon extension-info" id="new-ext"></span>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" id="rename-file" class="btn btn-primary btn-lg btn-large fs-15">Rename</button>
                    </div>
                </div>
                <p class="text-left hinted-text p-t-10 p-r-10">
                    <span>If new name exists, some data will be added to your new name</span>
                </p>
            </div>
            <div class="modal-footer">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Modal Create Folder -->

<!-- Modal Preview -->
<div class="modal fade" id="previewInfo" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">

                </div>
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="pg-close fs-14"></i>
                    </button>
                    <div class="row">
                        <div class="col-md-8" id="modal-preview">

                        </div>
                        <div class="col-md-4 b-l b-grey" id="modal-info">
                            <ul class="no-style">
                                <li><b>Name</b>: <span id="modal-name"></span></li>
                                <li><b>Size</b>: <span id="modal-size"></span></li>
                                <li class="hide"><b>Height</b>: <span id="modal-height"></span></li>
                                <li class="hide"><b>Width</b>: <span id="modal-width"></span></li>
                            </ul>
                            <button class="btn btn-complete m-t-30 hide">Download file</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- End Modal Preview -->

<!-- Modal Crop -->
<div class="modal fade" id="cropImage" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">
                  <h4 class="modal-title" id="modalCroppedTitle">Cropper</h4>
                </div>
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="pg-close fs-14"></i>
                    </button>
                    <div class="row">
                        <!-- <div class="col-md-8" id="crop-preview">

                        </div> -->
                        <div class="col-md-4 b-l b-grey" id="crop-info">
                            <ul class="no-style">
                                <li><b>Name</b>: <span id="crop-name"></span></li>
                                <li><b>Size</b>: <span id="crop-size"></span></li>
                                <!-- <li class="hide"><b>Height</b>: <span id="crop-height"></span></li>
                                <li class="hide"><b>Width</b>: <span id="crop-width"></span></li> -->
                            </ul>
                            <button class="btn btn-complete m-t-30 hide">Download file</button>
                        </div>
                    </div>

<!-- Content -->
<!-- <div class="container"> -->
    <div class="row">
      <div class="col-md-9">
        <!-- <h3>Demo:</h3> -->
        <div class="img-container" id="img-container">
          <!-- <img id="image" src="images/picture.jpg" alt="Picture"> -->
        </div>
      </div>
      <div class="col-md-3">
        <!-- <h3>Preview:</h3> -->
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg"></div>
          <div class="img-preview preview-md"></div>
          <div class="img-preview preview-sm"></div>
          <div class="img-preview preview-xs"></div>
        </div>

        <!-- <h3>Data:</h3> -->
        <div class="docs-data">
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataX">X</label>
            <input type="text" class="form-control" id="dataX" placeholder="x">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataY">Y</label>
            <input type="text" class="form-control" id="dataY" placeholder="y">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataWidth">Width</label>
            <input type="text" class="form-control" id="dataWidth" placeholder="width">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataHeight">Height</label>
            <input type="text" class="form-control" id="dataHeight" placeholder="height">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataRotate">Rotate</label>
            <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
            <span class="input-group-addon">deg</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataScaleX">ScaleX</label>
            <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataScaleY">ScaleY</label>
            <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 docs-buttons">
        <!-- <h3>Toolbar:</h3> -->
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
              <span class="fa fa-arrows"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
              <span class="fa fa-crop"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
              <span class="fa fa-search-plus"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
              <span class="fa fa-search-minus"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
              <span class="fa fa-arrow-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
              <span class="fa fa-arrow-right"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
              <span class="fa fa-arrow-up"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
              <span class="fa fa-arrow-down"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
              <span class="fa fa-rotate-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
              <span class="fa fa-rotate-right"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
              <span class="fa fa-arrows-h"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)">
              <span class="fa fa-arrows-v"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
              <span class="fa fa-check"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
              <span class="fa fa-remove"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
              <span class="fa fa-lock"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
              <span class="fa fa-unlock"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
              <span class="fa fa-refresh"></span>
            </span>
          </button>
          <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
            <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
              <span class="fa fa-upload"></span>
            </span>
          </label>
          <!-- <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
              <span class="fa fa-power-off"></span>
            </span>
          </button> -->
        </div>

        <div class="btn-group btn-group-crop">
          <button type="button" class="btn btn-danger" data-method="getCroppedCanvas">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
              Get Cropped Canvas
            </span>
          </button>
          <button type="button" class="btn btn-danger" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
              160&times;90
            </span>
          </button>
          <button type="button" class="btn btn-danger" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
              320&times;180
            </span>
          </button>
        </div>

        <!-- Show the cropped image in modal -->
        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <h4 class="modal-title" id="getCroppedCanvasTitle">Get Cropped</h4>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <a class="btn btn-info" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                <a class="btn btn-primary" id="saveCroppedImage" style="color:white">Save</a>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->

        <button type="button" class="btn btn-info" data-method="getData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
            Get Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
            Set Data
          </span>
        </button>
        <button type="button" class="btn btn-info" data-method="getContainerData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
            Get Container Data
          </span>
        </button>
        <button type="button" class="btn btn-info" data-method="getImageData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
            Get Image Data
          </span>
        </button>
        <button type="button" class="btn btn-info" data-method="getCanvasData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
            Get Canvas Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
            Set Canvas Data
          </span>
        </button>
        <button type="button" class="btn btn-info" data-method="getCropBoxData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
            Get Crop Box Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
            Set Crop Box Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
            0,0
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
            100%
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
            180°
          </span>
        </button>
        <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
      </div><!-- /.docs-buttons -->

      <div class="col-md-3 docs-toggles">
        <!-- <h3>Toggles:</h3> -->
        <div class="btn-group btn-group-justified" data-toggle="buttons">
          <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
              16:9
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
              4:3
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
              1:1
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
              2:3
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
              Free
            </span>
          </label>
        </div>

        <div class="btn-group btn-group-justified" data-toggle="buttons">
          <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
              VM0
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
              VM1
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
              VM2
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
              VM3
            </span>
          </label>
        </div>

        <div class="dropdown docs-options">
          <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
            Toggle Options
            <!-- <span class="caret"></span> -->
          </button>
          <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="responsive" checked>
                responsive
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="restore" checked>
                restore
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="checkCrossOrigin" checked>
                checkCrossOrigin
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="checkOrientation" checked>
                checkOrientation
              </label>
            </li>

            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="modal" checked>
                modal
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="guides" checked>
                guides
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="center" checked>
                center
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="highlight" checked>
                highlight
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="background" checked>
                background
              </label>
            </li>

            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="autoCrop" checked>
                autoCrop
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="movable" checked>
                movable
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="rotatable" checked>
                rotatable
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="scalable" checked>
                scalable
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="zoomable" checked>
                zoomable
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="zoomOnTouch" checked>
                zoomOnTouch
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="zoomOnWheel" checked>
                zoomOnWheel
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="cropBoxMovable" checked>
                cropBoxMovable
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="cropBoxResizable" checked>
                cropBoxResizable
              </label>
            </li>
            <li style="line-height:21px" role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                toggleDragModeOnDblclick
              </label>
            </li>
          </ul>
        </div><!-- /.dropdown -->

        <!-- <a class="btn btn-default btn-block" data-toggle="tooltip" href="https://fengyuanchen.github.io/cropperjs" title="Cropper without jQuery">Cropper.js</a> -->

      </div><!-- /.docs-toggles -->
    </div>
<!-- </div> -->

                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- End Modal Preview -->