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
                       <h4><?php if ($currentID == '') {echo 'Add Ticket Explanation';
} else {
    echo 'Ticket Explanation Detail';
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
    $ExplanationData = $this->Package_model->list_ExplanationData($currentID);
    foreach ($ExplanationData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="ExplanationForm" name="ExplanationForm">
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Explanation : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="Explanation" name="Explanation" type="text" class="summernote"><?php if ($currentID != '') {echo $Data->explanation; } ?></textarea>
                    </div>
                </div>
                
                 
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