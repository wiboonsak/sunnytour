
<!-- header -->
    <div class="topbar light topbar-padding">
      <div class="container">
        <div class="topbar-left-items" style="width: auto !important">
          <ul class="toplist toppadding pull-left paddtop1">
            <li class="rightl" style="border-right: #DFDFDF 1px solid; text-align: left !important"><i class="fa fa-map-marker"></i> แผนกทัวร์ <br><a href="tel:+660819902137">(081) 990-2137</a></li>
            <li style="border-right: #DFDFDF 1px solid; text-align: left !important"><i class="fa fa-plane"></i> แผนกตั๋วเครื่องบิน<br><a href="tel:+660819906332">(081) 990-6332</a></li>
			<li style="text-align: left !important"><i class="fa fa-whatsapp"></i> LINE@:<br><a href="http://line.me/ti/p/~@yzk5802s" target="_blank">@yzk5802s</a></li>
          </ul>
        </div>
        <!--end left-->
        
        <div class="topbar-right-items pull-right">
          <ul class="toplist toppadding">
            <li style="font-size: 20px;	margin: 2px; padding: 0 5px 0 5px; border-radius: 100px; width: 35px; height: 35px; line-height: 35px; border: 1px solid #7d7066;"><a href="https://www.facebook.com/SunnyToursHadyai/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li style="font-size: 20px;	margin: 2px; padding: 0 5px 0 5px; border-radius: 100px; width: 35px; height: 35px; line-height: 35px; border: 1px solid #7d7066;"><a href="https://www.instagram.com/sunny.tours.hatyai/?hl=th" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="last" style="font-size: 20px; margin: 2px; padding: 0 5px 0 5px; border-radius: 100px; width: 35px; height: 35px; line-height: 35px; border: 1px solid #7d7066;"><a href="https://www.youtube.com/channel/UCfLZbYCS1WQ5VqDnraJhK8g?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
          </ul>
		  </div>
      </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="col-md-12 nopadding">
      <div class="header-section white dark-dropdowns style1 links-dark pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="<?php echo base_url('Welcome')?>" title="" class="logo mar-4"> <img src="<?php echo base_url('HTML/images/logo/logo.png')?>" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">                    
                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
						<li class="active"> <a href="<?php echo base_url('Welcome')?>">หน้าแรก</a></li>
                                                <li class="mega-menu"> <a href="<?php echo base_url('Tour')?>">แพ็คเกจทัวร์</a> <span class="arrow"></span>
                        <ul>
                          <li> <a href="#" title="home samples">ทัวร์ในประเทศ</a> <span class="arrow"></span>
                            <ul>
                                <?php 
                                $categorylocalList = $this->Fontend_model->getCategorylocal('1');
$categoryList = $this->Fontend_model->getCategory('2');
                                foreach ($categorylocalList->result() AS $catelocal){
                                ?>
                              <li> <a href="<?php echo base_url('Tour/Tourbycate/').$catelocal->id.'/'.$catelocal->type_cate?>"><i class="fa fa-angle-right"></i> &nbsp; <?php echo $catelocal->category_title?></a> </li>
                                <?php }?>
                            </ul>
                          </li>
                          <li> <a href="#">ทัวร์ต่างประทศ</a> <span class="arrow"></span>
                            <ul>
                                <?php 
                                foreach ($categoryList->result() AS $cate){
                                ?>
                              <li> <a href="<?php echo base_url('Tour/Tourbycate/').$cate->id.'/'.$cate->type_cate?>"><i class="fa fa-angle-right"></i> &nbsp; <?php echo $cate->category_title?></a> </li>
                               <?php }?>
                            </ul>
                          </li>                         
                        </ul>
                      </li>

                      <li> <a href="<?php echo base_url('Promotion')?>">โปรโมชั่น</a></li>
                      <li> <a href="<?php echo base_url('Welcome/Ticket')?>">จองตั๋วเครื่องบิน</a></li>
					  <li> <a href="<?php echo base_url('Welcome/Visa')?>">รับทำวีซ่า</a></li>
                      <li> <a href="<?php echo base_url('Welcome/Grouptour')?>">จัดกรุ๊ปทัวร์ส่วนตัว</a></li>
					  <li> <a href="<?php echo base_url('Contact')?>">ติดต่อเรา</a></li>
						
                      <!--<li> <a href="#">บริการของเรา</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                          <li> <a href="<?php //echo base_url('Welcome/Visa')?>">รับทำวีซ่า</a></li>
                          <li> <a href="<?php //echo base_url('Exchange')?>">แลกเงินตราต่างประเทศ</a></li>
                          <li> <a href="<?php //echo base_url('Welcome/Grouptour')?>">จัดกรุ๊ปทัวร์ส่วนตัว</a></li>
                        </ul>
                      </li>-->						
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
      
    </div>
    <div class="clearfix"></div>

 <!-- end header -->
    