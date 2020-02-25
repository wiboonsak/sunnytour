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
                       <h4>Report Booking</h4>
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

                   <div class="form-group row">
									<label class="col-md-2 col-sm-4 col-form-label">Check in</label>
                                    <div class="col-md-4 col-sm-8">
                                         <div class="input-group">
                                             <input type="text" class="form-control" id="datepicker1" placeholder="dd/mm/yyyy">
                                             <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-sm-8">
                                         <div class="col-md-12">
                                             <input name="SearchBooking" id="SearchBooking" type="text"  style="width: 100%;height: 37px;" placeholder=" ระบุชื่อผู้จอง หรือ หมายเลขการจอง">
                                         </div>
                                    </div>   
                                     <div class="col-md-2">
						<button class="btn  btn-success" type="button" name="Button" onclick="searchinput('<?php echo $status?>')" >ค้นหา</button>
					</div>
                                                                       
									</div>
                    <hr>
                                           <div id="showData">
                                                 
<!--    <form method="post" action="<?php //echo base_url(); ?>PackageCMS/action">
     <input type="submit" name="export" class="btn btn-success" value="Excel" />
    </form>-->
<br>
                            <table id="table2" class="table table-hover">
                                <thead>
                                    <tr>
                                       
                                        <th style="text-align:center;">หมายเลขการจอง</th>
                                        <th style="text-align:center;">ชื่อผู้จอง</th>
                                        <th style="text-align:center;">จำนวนเงิน</th>
                                        <th style="text-align:center;">วันที่ทำการจอง</th>
                                        <th style="text-align:center;" width="7%">รายละเอียด</th>
                                        <th style="text-align:center;" width="7%">ยกเลิก</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
 <?php 
 
    foreach ($checkinData->result() AS $Data) {?>	
                                        <tr id="row<?php echo $Data->id ?>" >
                                           
                                            <td><?php echo $Data->booking_id ?></td>
                                            <td style="text-align:center;"><?php echo $Data->customer_name ?> <?php echo $Data->customer_Lastname?><br><?php echo $Data->customer_telephone ?></td>
                                            <td style="text-align:center;"><?php echo number_format($Data->total_price) ?></td>
                                            <td style="text-align:center;"><?php echo $this->Package_model->GetEngDateTime($Data->date_booking);?></td>
                                            <td style="text-align:center;" > <a href="#" onClick="windowOpener('770', '1200', 'windowName', '<?php echo base_url('PackageCMS/email_book_package/').$Data->booking_id?>')"><button type="button" class="btn btn-xs btn-info btn-sm" data-toggle="button" style="width: 88.28px" >Detail</button></a></td>
                                           
                                            <td style="text-align:center;">
                                                <button   type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $Data->id ?>', 'tbl_package_booking')" ><i class="icon-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php }?>
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
       