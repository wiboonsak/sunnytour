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
                       <h4>List Slide</h4>
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

            <div class="card-box">									<div id="showData">
                            <div class="pull-right">
                                <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('PackageCMS/slideAdd') ?>'"><i class="fa fa-plus"></i> Add Slide</button>
                            </div>
                            <table id="table2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="text-align:center;">Country</th>
                                        <th style="text-align:center;">Show on web</th>
                                        <th style="text-align:center;" width="100">Slide Order</th>
                                        <th style="text-align:center;" width="100">Edit</th>
                                        <th style="text-align:center;" width="100">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
 <?php $n = 1; 
  $slideData =$this->Package_model->list_slideData();
    foreach ($slideData->result() AS $Data) {?>	
                                        <tr id="row<?php echo $Data->id ?>">
                                            <th scope="row"><?php echo $n ?></th>
                                            <td><?php echo $Data->Country ?></td>
                                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $Data->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $Data->id ?>', this.value, 'tbl_slide_show')" value="<?php echo $Data->show_onweb ?>"  <?php
                                                    if ($Data->show_onweb == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                                            <td >
                                <input id="order<?php echo $Data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $Data->slide_order ?>" onChange="updateOrder('<?php echo $Data->id ?>', 'slide_order', this.value)" style="text-align:center;">
                            </td>
                                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('PackageCMS/slideAdd/' . $Data->id) ?>'"><i class="icon-pencil"></i></button></td>
                                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $Data->id ?>', 'tbl_slide_show')"><i class="icon-trash"></i></button></td>
                                        </tr>
                                    <?php $n++;}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
              
            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        <!--2018 © Highdmin. - Coderthemes.com-->
    </footer>

</div>
       