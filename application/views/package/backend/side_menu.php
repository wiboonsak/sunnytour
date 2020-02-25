<style>
    #sidebar-menu > ul > li > a:hover {

        color: #f9bc0b;
    }

    #sidebar-menu > ul > li > a {		
        color: #FFFFFF;
    }

    .nav-second-level li a, .nav-thrid-level li a {		
        color: #FFFFFF;
    }
	
    #sidebar-menu > ul > li > a:focus, #sidebar-menu > ul > li > a:active {		
        color: #FFFFFF !important;
        background-color: #86afcf !important;
    }

    #sidebar-menu > ul > li > a.active {		
        color: #FFFFFF !important;
        background-color: #86afcf !important;
    }

    /*.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, .page-item.active .page-link {
            
            
    }*/
	.nav-second-level li a:hover, .nav-thrid-level li a:hover {
    	background-color: #c9eae9;
    	color: #FFFFFF;
	}

    .mce-btn {		
        background-color: #86afcf !important;    
        color: #FFFFFF !important;
    }

    .mce-menubtn button span, .mce-menubtn button i, .mce-btn button span, .mce-btn button i {
        color: #FFFFFF !important;
    }

    .mce-menubar .mce-caret, .mce-btn .mce-caret {
        border-top-color: #FFFFFF !important;
    }

	.nav-second-level li.active > a {
    	color: #FFFFFF;
    	background-color: #c9eae9;
		font-weight: 600;
	}

</style>
<title>[Back Office] </title>

<div class="left side-menu" style="background-color: #2f79b1">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left" >
            <a href="<?php echo base_url('PackageCMS') ?>" class="logo">
                <span>
                    <img src="<?php echo base_url('HTML/images/logo/logo.png') ?>" alt="" width="90%" >
                </span>
                <i>
                    <img src="<?php echo base_url('HTML/images/logo/logo.png') ?>" alt="" width="90%" >
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">          
			<h5 style="color: #FFFFFF;text-align: center">Welcome</h5>			
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <li style="background-color: #1164a3">
                    <a href="<?php echo base_url('PackageCMS/bookinglist')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #FFFFFF;"></span> <span>Package Booking</span>
                    </a>
                </li> 
                <li style="background-color: #1164a3">
                    <a href="<?php echo base_url('PackageCMS/included')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #FFFFFF;"></span> <span>Package Feature</span>
                    </a>
                </li> 

                <li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Package Abroad Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/category_abroad')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Category</span>
                    </a>
                </li>  
                <li>
                    <a href="<?php echo base_url('PackageCMS/packagelist')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Package Tour</span>
                    </a>
                </li>  
                <li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Package Local Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/category_local')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Category</span>
                    </a>
                </li>  
                <li>
                    <a href="<?php echo base_url('PackageCMS/packagelistlocal')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Package Tour</span>
                    </a>
                </li>  
                <li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Report</strong> </p>
                    <!--</a>-->
                </li>    
                 <li>
                        <a href="javascript: void(0);"><i class="fa fa-bar-chart-o"></i><span>Package Report</span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                           <li><a href="<?php echo base_url('PackageCMS/Reportbooking/2')?>">Package Booking</a></li>  
                           <li><a href="<?php echo base_url('PackageCMS/Reportbooking/3')?>">Report Cancel</a></li> 
                            </ul>
                </li> 
                 <li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Activities Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/promotion')?>">
                        <i class="fa fa-product-hunt"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Activities & promotions</span>
                    </a>
                </li>  
                 <!--<li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Exchange Managing</strong> </p>
                   
                </li> 
                <li>
                    <a href="<?php //echo base_url('PackageCMS/exchange')?>">
                        <i class="fa fa-money"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Exchange</span>
                    </a>
                </li>--> 
				<li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Ticket Managing</strong> </p>
                   
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/ticketslide')?>">
                        <i class="fa fa-file-image-o"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Slide Ticket</span>
                    </a>
                </li> 
                <li>
                    <?php  $ExplanationData = $this->Package_model->list_ExplanationData();
                           $numexpla = $ExplanationData->num_rows();
                           if($numexpla>0){
                               foreach ($ExplanationData->result() AS $Data) {}
                    ?>
                    <a href="<?php echo base_url('PackageCMS/explanation/').$Data->id?>">
                           <?php }else{?>
                     <a href="<?php echo base_url('PackageCMS/explanation')?>">
                           <?php }?>
                        <i class="fa fa-file-text-o"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Ticket Explanation</span>
                    </a>
                </li> 
                 <li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Slide Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/slide')?>">
                        <i class="fa fa-file-image-o"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Slide</span>
                    </a>
                </li> 
                   <li> <p style="background-color: #1164a3; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Admin Managing</strong> </p>
                    <!--</a>-->
                </li>
                <?php if($this->session->userdata('type_user')=='1'){?>
		  <li>
                    <a href="<?php echo base_url('PackageCMS/Admin_add')?>">
                        <i class="fa fa-desktop"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Add Admin</span>
                    </a>
                </li> 
                <?php }?>
		  <li>
                    <a href="javascript:void(0);" onClick="cangePassForm()">
                        <i class="fa fa-desktop"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Change Password</span>
                    </a>
                </li>  
                <li>
                    <a href="<?php echo base_url('Logout')?>">
                        <i class="fa fa-desktop"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Log out</span>
                    </a>
                </li>  		  
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<script>
			function cangePassForm(){
				$.post('<?php echo base_url('PackageCMS/cangePassForm')?>' , { }, function(data){
						$('#myModal .modal-body').empty();
						$('#myModalLabel').text('เปลี่ยนรหัสผ่าน');
						$('.bodyA').html(data);
						$('#myModal').modal('show');	
				})
			}
			//-----------------------newpass cnewpass
			function DoChangePass(){
				var newpass = $('#newpass').val();
				var cnewpass = $('#cnewpass').val();
                                var id = <?php echo $user_type = $this->session->userdata('user_id')?>;
				if(newpass==''){
					$('#ShowError').html('<span class="text-danger">กรุณาใส่รหัสผ่านใหม่</span>');
					return false;
				}else if(cnewpass==''){
					$('#ShowError').html('<span class="text-danger">กรุณายืนยันรหัสผ่านใหม่</span>');
					return false;	
				}else if(newpass!=cnewpass){
					$('#ShowError').html('<span class="text-danger">รหัสผ่านและยืนยันรหัสผ่านต้องตรงกัน</span>');
					return false;	
				}else{
					$('#ShowError').empty();
					$.post('<?php echo base_url('PackageCMS/doChangePass')?>', { newpass : newpass,id : id  }, function(data){
						if(data==1){
							alert('The password has been changed.');
							$('#myModal').modal('hide');	
						}else{
							$('#ShowError').html('<span class="text-danger">Error Can not change password.</span>');
						}
					})
				}
			}
		</script>
