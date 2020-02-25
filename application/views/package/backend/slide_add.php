<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
     <!-- Begin page -->
        <div id="wrapper">
            	<?php include('side_menu.php')?>
<div class="content-page">
    <!-- Top Bar Start -->
    <div class="topbar">
        <nav class="navbar-custom">                  
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
                <li>
                    <div class="page-title-box">
                       <h4><?php if ($currentID == '') {echo 'Add Slide';
} else {
    echo 'Slide detail';
} ?></h4>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Top Bar End -->
<hr>
    <!-- Start Page content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card-box">
                <?php 
if ($currentID != '') {
    $slideData = $this->Package_model->list_slideData($currentID);
    foreach ($slideData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="slideForm" name="slideForm">
                  <div class="form-group row" >
                    <label class="col-sm-3 col-form-label"package>Country : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="Country" name="Country" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->Country;}?> " >
                    </div>
                </div>
                <div class="form-group row" style="display:none">
                    <label class="col-sm-3 col-form-label">topic : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input class="form-control form-control-sm" id="topic" name="topic" type="text" value="<?php if ($currentID != '') {echo $Data->topic; } ?>">
                    </div>
                </div>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                            Images : <a style="color:red;">*</a>
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="slide_img" name="slide_img" type="file" class="form-control form-control-sm" value="" > 
											<p>Images should be no larger than 1920x640 pixels (.jpg .gif .png supported).</p>
                                        </div>
                                    </div>
                  <?php if(($currentID != '')&&($Data->img_name != '')){?>
                                    <div class="row">
							<div class="col-lg-12">
								<div class="card m-b-30">
									<h6 class="card-header">Images</h6>
									<div class="card-body">
										<div id="showImagepack" style="margin-top: 5px;"></div>
                                                                                <input type="hidden" id="imgold" name="imgold" value="<?php echo $Data->img_name?>" />
									</div>
								</div>
							</div>

							
					</div>	
                                    <?php }?>
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-primary btn-sm" onClick="Add()">Add / Edit Data</button>
                       
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                    </div>
                </div>
            </form>
            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        <!--2018 © Highdmin. - Coderthemes.com-->
    </footer>

</div>
        </div>

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- END wrapper --> 