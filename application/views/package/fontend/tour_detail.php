<?php  $Dataid = $this->uri->segment(3);
 foreach ($getpackageDetail->result() AS $Data){}
 if($Data->type_cate == '1'){
            $cate = $this->Fontend_model->getCategorylocalbyid($Data->category_id);
        }else{
            $cate = $this->Fontend_model->getCategorybyid($Data->category_id);
        }
         foreach ($cate->result() AS $cate2){}
 
  $include = $this->Fontend_model->Listpackageinclude($Dataid);
    foreach ($include->result() AS $include2){}
  $getprice_option = $this->Fontend_model->getprice_option($Dataid);
    foreach ($getprice_option->result() AS $price_option){}
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sunny Tours Hatyai ซันนี่ ทัวร์ หาดใหญ่ ศูนย์รวมการท่องเที่ยว บริการจองตั๋วเครื่องบิน นำเที่ยว จำหน่าย แพ็คเกจทัวร์ในประเทศ แพ็คเกจทัวร์ต่างประเทศ ด้วยบริการที่ดีที่สุด</title>
<meta name="keywords" content="แพคเกจทัวร์, แพ็คเกจทัวร์, แพ็คเก็จทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ, ทัวร์ทั่วโลก, ทัวร์ราคาประหยัด, ทัวร์อิสระ, มาเลเซีย, ไต้หวัน, ฮ่องกง, ญี่ปุ่น, เกาหลี, เวียดนาม, รัสเซีย, ออสเตรเรีย, ภาคเหนือ, ภาคใต้, ทัวร์, แลกเงิน, หาดใหญ่, ประเทศไทย, บริษัททัวร์, ราคาถูก, จองตั๋ว, ตั๋วเครื่องบิน, รับทำวีซ่า, วีซ่า" />
<meta name="description" content="ซันนี่ทัวร์ หาดใหญ่ บริการจองตั๋วเครื่องบินหลากหลายสายการบิน  บริการนำเที่ยว จำหน่ายแพ็คเกจทัวร์ในประเทศ ทัวร์ต่างประเทศ วางแผนการท่องเที่ยวของคุณอย่างอิสระ เลือกแพคเกจทัวร์ที่ตรงใจคุณวันนี้ โทร : (081) 990-2137 แผนกตั๋วเครื่องบิน (081) 990-2137">
<meta name="author" content="ME-FI.COM">
  <meta property="fb:app_id"        content="355179808591281"/>
         <meta property="og:url"           content="<?php echo base_url('Promotion/promotion_Detail/').$Dataid?>"/>
         <meta property="og:type"          content="website"/>
        <meta property="og:title"         content="<?php echo $Data->package_name_en?>"/>
        <meta property="og:description"   content="<?php echo strip_tags($Data->package_detail)?>"/>
        <meta property="og:image"         content="<?php echo base_url('uploadfile/package_img/').$Data->img?>"/>
<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url('HTML/images/favicon.ico')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.css')?>">
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c0747ce0624ce0011ee8bbb&product=inline-share-buttons' async='async'></script>
<script type='text/javascript' src='https://social-plugins.line.me/lineit/share?url={encodeURIComponent(URL)}' ></script>
<script type='text/javascript' src='https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fline.me%2Fen' ></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	
<!-- Template's stylesheets -->
<link rel="stylesheet" href="<?php echo base_url('HTML/js/megamenu/stylesheets/screen.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/theme-default.css" type="text/css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/js/loaders/stylesheets/screen.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/shop.css" type="text/css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')?>" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/et-line-font/et-line-font.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/settings.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/layers.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/navigation.css')?>">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.theme.css')?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/cubeportfolio/cubeportfolio.min.css')?>">
<!--<link rel="stylesheet" href="<?php //echo base_url('HTML/css/shortcodes.css')?>" type="text/css">
<link rel="stylesheet" href="<?php //echo base_url('HTML/css/corporate.css')?>" type="text/css">-->
<link href="<?php echo base_url('HTML/js/tabs/css/responsive-tabs.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('HTML/less/skin.less')?>">


<!-- Skin stylesheet -->
<style>
    
    .isDisabled {
  pointer-events: none;
  cursor: not-allowed !important;
  opacity: 0.5;
  text-decoration: none;
}
@media only screen and (max-width: 700px) {
   .test{
    display:none;   
   }
   .test2{
    display: block;   
   }
   .fontsize{
       font-size: 12px !important;
   }
   
}
@media  only screen and  (min-width: 701px) {
   .test2{
    display:none;   
   }
}


</style> 
</head>
<body>
   <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  </script>
<div class="over-loader loader-live">
  <div class="loader">
			<div class="loader-item style9">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
</div>
<!--end loading--> 

<div class="wrapper-boxed">
  <div class="site-wrapper">
	<!-- header  -->
	 <?php include("header2.php"); ?>
	<!-- end header --->
    
    <div class="clearfix"></div>
    
     <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(<?php echo base_url('HTML/images/bg_tour.jpg')?>);"><img class="nodisplay-image" src="<?php echo base_url('HTML/images/bg_tour.jpg')?>" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">       
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner less-height">        
       <div class="overlay">       
       <div class="text text-center">
    <h3 class="uppercase text-white less-mar-1 title">Package Tours</h3>
    <h6 class="uppercase text-white sub-title">รวมแพ็กเกจทัวร์ที่จะพาคุณไปทัวร์สถานที่ท่องเที่ยวยอดนิยมในต่างแดน</h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->

    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       <div class="col-md-6"> <h3>Package Tours</h3></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
    <li><a href="<?php echo base_url('Welcome')?>" style="color:black">หน้าหลัก</a></li>
    <li><a href="<?php echo base_url('Tour')?>" style="color:black">Package</a></li>
    <li class="current"><a href="<?php echo base_url('Tour/package_Detail/').$Dataid?>">ทัวร์ <?php echo $cate2->category_title?></a></li>
</ol>  
</div>
          
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->
  
    
    
<section class="sec-bpadding-2">
  <div class="container">
  <div class="row">
    <div class="col-md-3 test">        
     		  <div class="sidebar-item-holder">
                <h5 class="uppercase sp-sb-title">ค้นหาข้อมูล</h5>
				<div class="control-group" style="padding: 0px !important">
					  <label class="control control--checkbox">เที่ยวต่างประเทศ
                                              <input type="checkbox" onclick="checkdata(this.value,this.checked,'1')" value="2" style="float: left; margin: 5px 10px;"/>
						  <div class="control__indicator red"></div>
					  </label>
                                    <br>
					  <label class="control control--checkbox">เที่ยวในประเทศ
						 <input type="checkbox" onclick="checkdata(this.value,this.checked,'1')" value="1" style="float: left; margin: 5px 10px;"/>
						  <div class="control__indicator red"></div>
					  </label>
                                    <input type="hidden" id="arrayinout" name="arrayinout"/>
				  </div>			  
				  
              </div>
              <!--end item holder--> 
		
              <div class="sidebar-item-holder">
                <h5 class="uppercase sp-sb-title">ค้นหาข้อมูล</h5>		
				   <div class="control-group" style="padding: 0px !important">
                                       <?php foreach ($listpackage_feature->result() AS $feature){?>
					  <label class="control control--checkbox"><?php echo $feature->include_name_en?>
                                              <input type="checkbox" onclick="checkdata(this.value,this.checked,'2')" value="<?php echo $feature->id?>" style="float: left; margin: 5px 10px;"/>
						  <div class="control__indicator red"></div>
                                                  
					  </label>
                                       <br>
                                       <?php }?>  
                                       <input type="hidden" id="arrayfeature" name="arrayfeature"/>
				  </div>
              </div>
              <!--end item holder--> 
              
  			  <div class="sidebar-item-holder">
                <h5 class="uppercase sp-sb-title">ค้นหาข้อมูล</h5>
                <input type="text"  class="sp-news-letter" placeholder="Search" maxlength="100" onchange="searchinput1(this.value)"/>
              </div>
              <!--end item holder-->
		
		
     		<div class="sidebar-item-holder">
                <h5 class="uppercase sp-sb-title">แพ็คเกจทัวร์ล่าสุด</h5>
                <?php 
                foreach ($getlastpackage->result() AS $lastpackage){
                ?>
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                  <div class="imgbox-small left"> <img src="<?php echo base_url('uploadfile/package_img/').$lastpackage->img?>" alt="" class="img-responsive"/></div>
                  <div class="text-box-right">
                      <h6 class="uppercase nopadding"><a href="<?php echo base_url('Tour/package_Detail/').$lastpackage->id?>" class="text-hover-gyellow" style="color:black"><?php echo $lastpackage->package_name_en?></a></h6>
                    <div class="blog-post-info padding-top-1"> <span><a href="tour_detail.php">คลิกอ่านต่อ</a></span></div>
                  </div>
                </div>
                <?php }?>
                </div>
              <!--end item holder-->         
              
              
              
            <div class="bg2-right-col-item-holder">
                <h5 class="uppercase sp-sb-title">Tags</h5>
                <ul class="sp-tags">
                  <li><a href="#">แพ็คเกจทัวร์</a></li>
                  <li><a href="#">ทัวร์ต่างประเทศ</a></li>
                  <li><a href="#">มาเลเซีย</a></li>
                  <li><a href="#">ปีนัง</a></li>
                  <li><a href="#">ไต้หวัน</a></li>
                  <li><a href="#">โปรไฟไหม้</a></li>
                  <li><a href="#">ทัวร์ราคาถูก</a></li>
                  <li><a href="#">รับทำวีซ่า</a></li>
				  <li><a href="#">แลกเงิน</a></li>
                </ul>
              </div>
              <!--end item holder-->    
                           
  </div>
  <!--end right column -->
  
  	<!--end right column -->
	<div class="col-md-9" id="searchID">
      

	<section class="sec-padding">
	  <div class="row slide-controls-2">
		<!-- Slide ถ้ามี Tab รายละเอียด Slide จะไม่แสดงค่ะ -->
		<div id="owl-demo2" class="owl-carousel owl-theme">
<?php 
foreach ($imagesList->result() AS $imagesList2){
?>
			<div class="item">
			<div class="col-md-12">
			  <img src="<?php echo base_url('uploadfile/package_img/').$imagesList2->images_name?>" alt="" class="img-responsive"/>                           
			  </div> 

			</div>
<?php }?>
		</div>
		<!--end carousel-->
	  </div>

	 <div class="col-divider-margin-6"></div>

	 <div class="col-md-5">
             <ul class="port-project-info" style="border:2px solid #f0ad4e;padding: 20px">
		<li><span><i class="fa fa-map-marker" style="color: #edb347; font-size: 16pt"></i> </span> ทัวร์ <?php echo $cate2->category_title?></li>
		<li><span><i class="fa fa-clock-o" style="color: #edb347; font-size: 16pt"></i> </span> <?php echo $Data->period_of_time?></li>
		<li><span><i class="fa fa-calendar" style="color: #edb347; font-size: 16pt"></i> </span> <?php echo $Data->duration?></li>   
		<li><span><i class="fa fa-plane" style="color: #edb347; font-size: 16pt"></i> </span> <?php echo $Data->airline?></li>	 
	  </ul>

	  <div class="clearfix"></div>

		<div id="fb-root"></div>
                <ul class="clients-list ">
				<li><div class="fb-share-button" 
    data-href="<?php echo base_url('Tour/package_Detail/').$Dataid?>" 
    data-layout="button">
  </div></li>
  <li style="padding-top: 27px;"><div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?php echo base_url('Tour/package_Detail/').$Dataid?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div></li>
				     				
			</ul>
             
	</div>
	  <!--end item-->

	  <div class="col-md-7">
		<h3><?php echo $Data->package_name_en?></h3>  
		<p>  <a class="btn btn-medium btn-orange btn-anim-2 btn-warning uppercase" href="#time_table"><i class="fa fa-pencil" aria-hidden="true"></i> <span>จองแพ็คเกจทัวร์</span></a></p>
	  </div>
	  <!--end item-->
	  
	 </section>
		
	 <div class="clearfix"></div>
	 <!-- end section -->
	  
	     
    <section class="section-light" style="width:100%">
     
        <div class="row hl-more-top-padd">         
          
          <div class="col-md-12">
            <div class="col-md-12 nopadding">
              <div class="tab-navbar-main tabstyle-9">
                <ul class="responsive-tabs">
                  <li><a href="#example-1-tab-1" target="_self"><span class="icon-star"></span> <br/>
                    ไฮไลท์ทัวร์</a></li>
                  <li><a href="#example-1-tab-2" target="_self"><span class="icon-documents"></span> <br/>
                    รายละเอียด</a></li>
                  <li><a href="#example-1-tab-3" target="_self"><span class="icon-video"></span> <br/>
                    คลิปวิดีโอ</a></li>
                  <li><a href="#example-1-tab-4" target="_self"><span class="icon-pencil"></span> <br/>
                    เงื่อนไขทัวร์</a></li>
                </ul>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="tab-content-holder-9">
              <div class="responsive-tabs-content">
                  <div id="example-1-tab-1" class="responsive-tabs-panel" style="width:100%">
                  <div class="responsive-tab-title ttitle"></div>
                  <div class="col-md-12">
                    <div class="tabstyle-9-feature-box-2">
                      <h4 class="uppercase">ไฮไลท์ทัวร์</h4>
                      <h6><?php echo $Data->detailHighlight_Tour?></h6>
                     	  <ul class="port-project-info" style="border:2px solid #f0ad4e;padding: 20px">
							<li><span><i class="fa fa-map-marker" style="color: #edb347; font-size: 16pt"></i> </span> ทัวร์ <?php echo $cate2->category_title?></li>
							<li><span><i class="fa fa-clock-o" style="color: #edb347; font-size: 16pt"></i> </span> <?php echo $Data->period_of_time?></li>
							<li><span><i class="fa fa-calendar" style="color: #edb347; font-size: 16pt"></i> </span> <?php echo $Data->duration?></li>   
							<li><span><i class="fa fa-plane" style="color: #edb347; font-size: 16pt"></i> </span> <?php echo $Data->airline?></li>	 
						  </ul>
                      <br/>                      
                  </div>
                  <!--end item-->
                  </div>
                </div>
                <!--end panel 1-->
                
                <div id="example-1-tab-2" class="responsive-tabs-panel" style="width:100%">
                  <div class="responsive-tab-title ttitle"></div>
                                   
                  <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
                    <div class="tabstyle-9-feature-box-2">
                      <h4 class="uppercase">รายละเอียดทัวร์</h4>
                      <h6><?php echo $Data->package_detail?></h6><br/>
                      <?php 
                      $pdflist = $this->Package_model->loadfile($Data->id);
                      $numpdf = $pdflist->num_rows();
                      if($numpdf>0){
                      ?>
					  
						<h5><i class="fa fa-file-pdf-o" style="font-size: 12pt"></i> ดาวน์โหลดรายละเอียดทัวร์</h5>
                                                
                      <ul class="">
                          <?php 
                          $n = 1;
                          foreach ($pdflist->result() AS $pdflist2){?>
                          <li><a href="<?php echo base_url('uploadfile/package_pdf/').$pdflist2->images_name?>" target="_blank" style="color:black"><span><i class="fa fa-file-pdf-o" style="font-size: 12pt"></i></span> 
							รายละเอียดแพ็คเกจทัวร์ #<?php echo $n?></a></li>
                          <?php $n++;}?>
						</ul>
                      <br/>
					  
                      <?php }?>
					  
                     </div>
					 <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">
					  <?php 
                          $n = 1;
                          $pdflimit1 = $this->Package_model->loadfilelimit1($Data->id);
                          $numpdflimit1 = $pdflimit1->num_rows();
                          foreach ($pdflimit1->result() AS $pdf2){}
						  if($numpdflimit1>0){
						  ?>
						  <iframe src="<?php echo base_url('uploadfile/package_pdf/').$pdf2->images_name?>" style="width: 100%;height: 500px;"></iframe>
                          <?php }?>					 
					 </div>
                  </div>
                  <!--end item--> 
                  
                </div>
                <!--end panel 2-->
                
                <div id="example-1-tab-3" class="responsive-tabs-panel" style="width:100%">
                  <div class="responsive-tab-title ttitle"></div>
                  <div class="col-md-12">
                    <div class="tabstyle-9-feature-box-2">
                        <?php 
                                                      $youtube = $this->Package_model->getlinkyoutube($Data->id);
                                                      $numyoutube = $youtube->num_rows();
                                                      if($numyoutube>0){
                                                      ?>
                      <h4 class="uppercase">คลิปวิดีโอ</h4>
                      
                      <div class="col-md-12 col-centered">
                          <?php 
                          foreach ($youtube->result() AS $youtube2){
                          ?>
						 <?php echo $youtube2 ->linkyoutube;?>
                          <?php }?>
<!--						  <iframe width="48%" height="300" src="https://www.youtube.com/embed/vbhGBeVJjn4" frameborder="0" allowfullscreen></iframe>			 
						  <iframe width="48%" height="300" src="https://www.youtube.com/embed/vbhGBeVJjn4" frameborder="0" allowfullscreen></iframe>
						  <iframe width="48%" height="300" src="https://www.youtube.com/embed/vbhGBeVJjn4" frameborder="0" allowfullscreen></iframe>-->
                        <br/>
                 	  </div>
                                                      <?php }?>
                  <!--end item-->
                  
                	</div>
				</div>
				</div>
                <!--end panel 3-->
                
                <div id="example-1-tab-4" class="responsive-tabs-panel" style="width:100%">
                  <div class="responsive-tab-title ttitle"></div>
                  <div class="col-md-12">
                    <div class="tabstyle-9-feature-box-2">
                      <h4 class="uppercase">เงื่อนไขทัวร์</h4>
                      <p><?php echo $Data->package_Condition?> </p>
                      <br/>
                  </div>
                  <!--end item-->
                </div>
                <!--end panel 4-->
                
              </div>
            </div>
            <!--end column--> 
            
          </div>
        </div>
     
    </section>
    <div class="clearfix"></div>
    
    <!-- end section --> 
	<?php  $option = $this->Package_model->listpackage_option($Data->id);
                          $numoption = $option->num_rows();
             if($numoption>0){             
                          ?>  
    
	<a name="time_table"></a>
	<section class="sec-padding section-light" style="margin-top: 20px" >
	  <div class="">
	  <div class="row" style="padding-left: 30px">
		 <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;ช่วงเวลาการเดินทาง</span></h4>

	  <div class="col-md-12">
	   <div class="table-responsive">
		   
	  <table class="sp-cart">
	    <tr>
                <th style="width:30%; background-color: #E5E5E5; text-align: center" class="fontsize">วันเดินทาง</th>
                <th style="width:15%; background-color: #E5E5E5; text-align: center" class="fontsize">ผู้ใหญ่<br>(พัก 2-3 ท่าน)</th>
                        <th style="width:15%; background-color: #E5E5E5; text-align: center" class="test">ผู้ใหญ่<br>(พักเดี่ยว)</th>
			<th style="width:15%; background-color: #E5E5E5; text-align: center" class="test">เด็ก<br>(ไม่เพิ่มเตียง)</th>
                        <th style="width:15%; background-color: #E5E5E5; text-align: center" class="test">เด็ก<br>(เพิ่มเตียง)</th>
			<th style="width:10%; background-color: #E5E5E5; text-align: center"></th>
		</tr>
 <?php $n = 1;
        foreach ($option->result() as $option2) { ?>
	 <tr>
             <td class="pro-title"><h6 class="fontsize"><i class="fa fa-calendar test"></i>&nbsp;&nbsp; <?php echo $option2->Traveling_date ?></h6></td>
             <td class="pro-des " align="center"><h6 class="fontsize"><?php echo number_format($option2->adult_price) ?> บาท</h6></td>
		<td class="pro-price test" align="center"><h6><?php echo number_format($option2->aloneadult_price) ?> บาท</h6></td>
		<td class="pro-des test" align="center"><h6><?php echo number_format($option2->child_price) ?> บาท</h6></td>
		<td class="pro-price test" align="center"><h6><?php echo number_format($option2->addchild_price) ?> บาท</h6></td>
                <td ><a class="btn btn-small btn-orange btn-anim-2 uppercase btn-warning" href="#book_detail" onclick="bookdetail('<?php echo number_format($option2->adult_price) ?>','<?php echo number_format($option2->aloneadult_price)?>','<?php echo number_format($option2->child_price)?>','<?php echo number_format($option2->addchild_price)?>','<?php echo $option2->adult_price?>','<?php echo $option2->aloneadult_price?>','<?php echo $option2->child_price?>','<?php echo $option2->addchild_price?>','<?php echo $option2->id?>')" style="text-align: center"><i class="fa fa-pencil" aria-hidden="true"></i> <span class="fontsize">จองทัวร์</span></a></td>
	 </tr>  
         <?php }?>  
	  </table>
	</div> 
	  </div>
	  <!--end item-->

	  </div>
	  </div>
	</section>
	<div class="clearfix"></div>
 	<!-- end section -->
		
	<a name="book_detail"></a>
	<section class="sec-padding section-light" style="margin-top: 20px" >
	  <div class="">
	  <div class="row" style="padding-left: 30px">
		 <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;เลือกจำนวนผู้เดินทาง</span></h4>

	  <div class="col-md-12">
	   <div class="table-responsive">
		   
	  <table class="sp-cart">
	    <tr>
                <th style="width:40%; background-color: #E5E5E5; text-align: center" class="fontsize">ประเภทห้อง</th>
                <th style="width:20%; background-color: #E5E5E5; text-align: center" class="fontsize">ราคา/คน</th>
                <th style="width:20%; background-color: #E5E5E5; text-align: center" class="fontsize">จำนวนผู้เดินทาง</th>
                <th style="width:20%; background-color: #E5E5E5; text-align: center" class="fontsize">ราคา/คน</th>
		</tr>

	 <tr>
             <td class="pro-title "><h6 class="fontsize"><i class="fa fa-calendar test"></i>&nbsp;&nbsp; ผู้ใหญ่ (พัก 2-3 ท่าน)</h6></td>
             <td class="pro-des " align="center"><h6 class="fontsize"><span id="ad1">0</span> บาท</h6></td>
             <td class="pro-price " align="center"><h6 class="fontsize"><input class="form-control text-center" type="number"  id="people1" name="people1" onchange="changepeople1(this.value)" min="0"></h6></td>
             <td class="pro-des " align="center"><h6 class="fontsize"><span id="ad2">0</span> บาท</h6></td>
	 </tr>  
	  <tr>
              <td class="pro-title "><h6 class="fontsize"><i class="fa fa-calendar test"></i>&nbsp;&nbsp; ผู้ใหญ่ (พักเดี่ยว)</h6></td>
              <td class="pro-des " align="center"><h6 class="fontsize"><span id="alone1">0</span> บาท</h6></td>
              <td class="pro-price " align="center"><h6 class="fontsize"><input class="form-control text-center" type="number"  id="people2" name="people2" onchange="changepeople2(this.value)" min="0"></h6></td>
              <td class="pro-des " align="center"><h6 class="fontsize"><span id="alone2">0</span> บาท</h6></td>
	 </tr>  
	 <tr>
             <td class="pro-title "><h6 class="fontsize"><i class="fa fa-calendar test"></i>&nbsp;&nbsp; เด็ก (ไม่เพิ่มเตียง)</h6></td>
             <td class="pro-des " align="center"><h6 class="fontsize"><span id="child1">0</span> บาท</h6></td>
             <td class="pro-price " align="center"><h6 class="fontsize"><input class="form-control text-center" type="number"  id="people3" name="people3" onchange="changepeople3(this.value)" min="0"></h6></td>
             <td class="pro-des " align="center"><h6 class="fontsize"><span id="child2">0</span> บาท</h6></td>
	 </tr>  
	  <tr>
              <td class="pro-title "><h6 class="fontsize"><i class="fa fa-calendar test"></i>&nbsp;&nbsp; เด็ก (เพิ่มเตียง)</h6></td>
              <td class="pro-des " align="center"><h6 class="fontsize"><span id="childextra1">0</span> บาท</h6></td>
              <td class="pro-price " align="center"><h6 class="fontsize"><input class="form-control text-center" type="number"  id="people4" name="people4" onchange="changepeople4(this.value)" min="0"></h6></td>
              <td class="pro-des " align="center"><h6 class="fontsize"><span id="childextra2">0</span> บาท</h6></td>
	 </tr>  
	 <tr>
		<td class="pro-title"></td>
		<td class="pro-des" align="center"></td>
                <td class="pro-price " align="center"><h6 class="fontsize">รวม <span id="totalpeople"></span>  ท่าน </h6>
                <input type="hidden" id="totalpeople1" name="totalpeople1"/>
                </td>
                
                <td class="pro-des " align="center"><h5 style="color: #CF0104; font-weight: 600" class="fontsize"><span id="total1">0</span> บาท</h5>
                    <input type="hidden" id="total2" name="total2" value=""/>
                    <input type="hidden" id="ad3" name="ad3" value=""/>
                <input type="hidden" id="ad4" name="ad4" value=""/>
                <input type="hidden" id="optionid" name="optionid" value=""/>
                <input type="hidden" id="alone3" name="alone3" value=""/>
               <input type="hidden" id="alone4" name="alone4" value=""/>
               <input type="hidden" id="child3" name="child3" value=""/>
               <input type="hidden" id="child4" name="child4" value=""/>
               <input type="hidden" id="childextra3" name="childextra3" value=""/>
               <input type="hidden" id="childextra4" name="childextra4" value=""/>
                </td>
	 </tr>  
	  </table>
	</div> 
	  </div>
	  <!--end item-->

	  </div>
	  	<p style="padding: 20px;">หมายเหตุ  <br>
		  1. ราคาด้านบนนี้ อาจจะมีการเปลี่ยนแปลงได้ ขึ้นอยู่กับห้องเดียวที่เพิ่ม และการเพิ่มเตียง<br>
		  2. ผู้เดินทางที่ต้องการพักเดี่ยว มีค่าใช้จ่ายเพิ่มท่านละ 6,000.00 บาท<br>
		  3. เงื่อนไขการเข้าพัก 3 ท่านต่อห้องเป็นไปตามข้อกำหนดของโรงแรม จะมีเจ้าหน้าที่ติดต่อกลับเพื่อยืนยันอีกครั้ง
		</p>
		
		</div>
	</section>
	<div class="clearfix"></div>
 	<!-- end section -->	

	<section class="sec-padding section-light" style="margin-top: 20px" >
	  <div class="">
	  <div class="row" style="padding-left: 30px">
		 <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp; ข้อมูลผู้จอง</span></h4>

	  <div class="col-md-12">
	      <h5>กรุณากรอกข้อมูลเพื่อติดต่อกลับ</h5>
          <div class="col-xs-6 padding">
              <input class="sp-binfo" type="text"  id="name" name="name" placeholder="ชื่อผู้ติดต่อ">
          </div>
		  <div class="col-xs-6 padding">
                      <input class="sp-binfo" type="text" id="surname" name="surname" placeholder="นามสกุล">
          </div>
		  <div class="col-xs-12 padding">
                <input class="sp-binfo" type="text" id="phone" name="phone" placeholder="เบอร์ติดต่อกลับ">
		  </div>
		   <div class="col-xs-12 padding">
			   <input class="sp-binfo" type="text" id="email" name="email" placeholder="อีเมลติดต่อกลับ">
		  </div>
		  <div class="col-xs-12 padding">
		   	   <input class="sp-binfo" type="text" id="line" name="line" placeholder="Line ID">
		  </div>
		  <div class="col-xs-12 padding">
                      <textarea style="width:100%;height: 105px" id="comment" name="comment" type="text" class="textaria-1" placeholder="ความต้องการเพิ่มเติมอื่นๆ"></textarea>			   
		  </div>
		  <div class="col-xs-12 padding">
		       <a class="btn btn-gyellow  btn-fullwidth uppercase center-block" onclick="AddBooking('<?php echo $Data->code_package?>')" id="buttonClass">ส่งใบคำขอจองแพ็คเกจ</a> 
		  </div>
	  </div>
	  <!--end item-->

	  </div>
		
		</div>
	</section>
	<div class="clearfix"></div>
 	<!-- end section -->	
             <?php }else{?>
        <a name="time_table"></a>
	<section class="sec-padding section-light" style="margin-top: 20px" >
	  <div class="">
	  <div class="row">
		 <h4 style="padding-left: 30px"><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp; ข้อมูลผู้จอง</span></h4>

	  <div class="col-md-12">
	      <h5 style="padding-left: 20px">กรุณากรอกข้อมูลเพื่อติดต่อกลับ</h5>
          <div class="col-xs-6 padding">
              <input class="sp-binfo" type="text"  id="name" name="name" placeholder="ชื่อผู้ติดต่อ">
          </div>
		  <div class="col-xs-6 padding">
                      <input class="sp-binfo" type="text" id="surname" name="surname" placeholder="นามสกุล">
          </div>
		  <div class="col-xs-12 padding">
                <input class="sp-binfo" type="text" id="phone" name="phone" placeholder="เบอร์ติดต่อกลับ">
		  </div>
		   <div class="col-xs-12 padding">
			   <input class="sp-binfo" type="text" id="email" name="email" placeholder="อีเมลติดต่อกลับ">
		  </div>
		  <div class="col-xs-12 padding">
		   	   <input class="sp-binfo" type="text" id="line" name="line" placeholder="Line ID">
		  </div>
              <div class="col-xs-2 padding test">
                      <label style="padding-top:10px">&nbsp;&nbsp;วันที่เดินทางไป</label>
          </div>
              <div class="col-xs-2 padding test2" >
                      <label style="padding-top:10px">&nbsp;&nbsp;ไป</label>
          </div>
              <div class="col-xs-4 padding">
                  <input class="sp-binfo" type="date"  id="datestart" name="datestart" placeholder="วันที่เดินทางไป" onchange="getdateend(this.value)">
          </div>
              <div class="col-xs-2 padding test">
                      <label style="padding-top:10px">&nbsp;&nbsp;วันที่เดินทางกลับ</label>
          </div>
              <div class="col-xs-2 padding test2" >
                      <label style="padding-top:10px">&nbsp;&nbsp;กลับ</label>
          </div>
		  <div class="col-xs-4 padding">
                      <input class="sp-binfo" type="date" id="dateend" name="dateend" placeholder="วันที่เดินทางกลับ">
          </div>
                  <div class="col-xs-2 padding test">
                      <label style="padding-top:10px">&nbsp;&nbsp;จำนวนผู้ใหญ่</label>
          </div>
                  <div class="col-xs-2 padding test2" >
                      <label style="padding-top:10px">&nbsp;&nbsp;ผู้ใหญ่</label>
          </div>
                  <div class="col-xs-4 padding">
                      <input class="sp-binfo" type="number" id="adult" name="adult" placeholder="จำนวนผู้ใหญ่">
          </div>
		  <div class="col-xs-2 padding test">
                      <label style="padding-top:10px">&nbsp;&nbsp;จำนวนเด็ก</label>
          </div>
		  <div class="col-xs-2 padding test2" >
                      <label style="padding-top:10px">&nbsp;&nbsp;เด็ก</label>
          </div>
                  <div class="col-xs-4 padding ">
                      <input class="sp-binfo" type="number" id="child" name="child" placeholder="จำนวนเด็ก">
          </div>
		  <div class="col-xs-12 padding">
                      <textarea class="textaria-1" id="comment" name="comment" type="text" style="width:100%;height: 105px"  placeholder="ความต้องการเพิ่มเติมอื่นๆ"></textarea>			   
		  </div>
                  
		  <div class="col-xs-12 padding">
		       <a class="btn btn-gyellow  btn-fullwidth uppercase center-block" onclick="AddBooking2('<?php echo $Data->code_package?>')" id="buttonClass">ส่งใบคำขอจองแพ็คเกจ</a> 
		  </div>
	  </div>
	  <!--end item-->

	  </div>
	  	
		
		</div>
	</section>
	<div class="clearfix"></div>
             <?php }?>
		
		
	<input type="hidden" id="Dataid" name="Dataid" value="<?php echo $Dataid?>"/>	
		</div>
  	<!--end left column -->
  
  </div>
  </div>
  </section>
	  
	  
	  
<div class="clearfix"></div>
  <!-- end section -->
   

<!-- footer  -->
	 <?php include("footer2.php"); ?>
<!-- end footer>
    
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 

<!-- Scripts --> 
<script src="<?php echo base_url('HTML/js/jquery/jquery.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/less/less.min.js')?>" data-env="development"></script> 
<!-- Scripts END --> 
	


<!-- Template scripts --> 
<script src="<?php echo base_url('HTML/js/tabs/js/responsive-tabs.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('HTML/js/megamenu/js/main.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/custom.js')?>"></script> 

 
<script type="text/javascript" src="<?php echo base_url('HTML/js/cubeportfolio/jquery.cubeportfolio.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/cubeportfolio/main-mosaic3.js')?>"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js')?>"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="//connect.facebook.net/en_US/sdk.js"></script>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js')?>"></script> 
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
            $(document).ready(function() {
    $("iframe").removeAttr('width');
    $("iframe").removeAttr('height');
    
    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datestart").setAttribute("min", today);
});
function getdateend(datestart){
     var today = new Date(datestart);
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("dateend").setAttribute("min", today);
}
//-----------------------------------------------
function bookdetail(adult_price,aloneadult_price,child_price,addchild_price,adult_price1,aloneadult_price1,child_price1,addchild_price1,optionid){
    var total = parseInt(adult_price1);
//            +parseInt(aloneadult_price1)+parseInt(child_price1)+parseInt(addchild_price1);
    var total1 = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    $('#ad1').text(adult_price);
    $('#ad2').text(adult_price);
    $('#ad3').val(adult_price1);
    $('#ad4').val(adult_price1);
    $('#alone1').text(aloneadult_price);
    $('#alone2').text('0');
    $('#alone3').val(aloneadult_price1);
    $('#alone4').val(aloneadult_price1);
    $('#child1').text(child_price);
    $('#child2').text('0');
    $('#child3').val(child_price1);
    $('#child4').val(child_price1);
    $('#childextra1').text(addchild_price);
    $('#childextra2').text('0');
    $('#childextra3').val(addchild_price1);
    $('#childextra4').val(addchild_price1);
    $('#total1').text(total1);
    $('#total2').val(total);
    
    $('#people1').val(1);
    $('#people2').val(0);
    $('#people3').val(0);
    $('#people4').val(0);
    $('#totalpeople').text(1);
    $('#totalpeople1').val(1);
    $('#optionid').val(optionid);
     
}
//------------------------------------------------
function changepeople1(people){
    var alone4 = $('#alone4').val();
    var child4 = $('#child4').val();
    var childextra4 = $('#childextra4').val();
    var people2 = $('#people2').val();
    var people3 = $('#people3').val();
    var people4 = $('#people4').val();
    var ad3 = $('#ad3').val();
    var allpeople = parseInt(people2)+parseInt(people3)+parseInt(people4)+parseInt(people);
    var totalprice = parseInt(people)*parseInt(ad3);
    $('#totalpeople').text(allpeople);
    $('#totalpeople1').val(allpeople);
    $('#ad4').val(totalprice);
    $('#ad2').text(totalprice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'));
    var total = parseInt(alone4)+parseInt(child4)+parseInt(childextra4)+parseInt(totalprice);
    var total1 = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    $('#total1').text(total1);
    $('#total2').val(total);
}
//------------------------------------------------
function changepeople2(people){
    var ad4 = $('#ad4').val();
    var child4 = $('#child4').val();
    var childextra4 = $('#childextra4').val();
    var people2 = $('#people1').val();
    var people3 = $('#people3').val();
    var people4 = $('#people4').val();
    var alone3 = $('#alone3').val();
     var totalprice = parseInt(people)*parseInt(alone3);
    var allpeople = parseInt(people2)+parseInt(people3)+parseInt(people4)+parseInt(people);
    $('#totalpeople').text(allpeople);
    $('#totalpeople1').val(allpeople);
     $('#alone4').val(totalprice);
     $('#alone2').text(totalprice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'));
      var total = parseInt(ad4)+parseInt(child4)+parseInt(childextra4)+parseInt(totalprice);
    var total1 = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    $('#total1').text(total1);
    $('#total2').val(total);
}
//------------------------------------------------
function changepeople3(people){
    var ad4 = $('#ad4').val();
    var alone4 = $('#alone4').val();
    var childextra4 = $('#childextra4').val();
    var people2 = $('#people1').val();
    var people3 = $('#people2').val();
    var people4 = $('#people4').val();
     var child3 = $('#child3').val();
     var totalprice = parseInt(people)*parseInt(child3);
    var allpeople = parseInt(people2)+parseInt(people3)+parseInt(people4)+parseInt(people);
    $('#totalpeople').text(allpeople);
    $('#totalpeople1').val(allpeople);
    $('#child4').val(totalprice);
    $('#child2').text(totalprice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'));
     var total = parseInt(ad4)+parseInt(alone4)+parseInt(childextra4)+parseInt(totalprice);
    var total1 = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    $('#total1').text(total1);
    $('#total2').val(total);
}
//------------------------------------------------
function changepeople4(people){
    var ad4 = $('#ad4').val();
    var alone4 = $('#alone4').val();
    var child4 = $('#child4').val();
    var people2 = $('#people1').val();
    var people3 = $('#people2').val();
    var people4 = $('#people3').val();
    var childextra3 = $('#childextra3').val();
     var totalprice = parseInt(people)*parseInt(childextra3);
    var allpeople = parseInt(people2)+parseInt(people3)+parseInt(people4)+parseInt(people);
    $('#totalpeople').text(allpeople);
    $('#totalpeople1').val(allpeople);
    $('#childextra4').val(totalprice);
     $('#childextra2').text(totalprice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'));
      var total = parseInt(ad4)+parseInt(alone4)+parseInt(child4)+parseInt(totalprice);
    var total1 = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    $('#total1').text(total1);
    $('#total2').val(total);
}
//------------------------------------------
    function AddBooking(code) {
        var name = $('#name').val();
        var surname = $('#surname').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var line = $('#line').val();
        var comment = $('#comment').val();
          var people1 = $('#people1').val();
          var people2 = $('#people2').val();
          var people3 = $('#people3').val();
          var people4 = $('#people4').val();
          var totalpeople1 = $('#totalpeople1').val();
          var total2 = $('#total2').val();
          var optionid = $('#optionid').val();
          var Dataid = $('#Dataid').val();
          
        //var currentID = $('#currentID').val();
    if(optionid == ''){
        alert("กรุณาเลือก ช่วงเวลาการเดินทาง");
    }else if (name == '') {
        alert("กรุณาใส่ ชื่อผู้ติดต่อ");
            
    }else if (surname == '') {
         alert("กรุณาใส่ นามสกุล");
    }else if (phone == '') {
        alert("กรุณาใส่ เบอร์ติดต่อกลับ");
    }else if (email == '') {
        alert("กรุณาใส่ อีเมลติดต่อกลับ");
            
    }else if (comment == '') {
        alert("กรุณาใส่ ความต้องการเพิ่มเติมอื่นๆ");
            
    }else{
      
            $.post('<?php echo base_url('Tour/AddBooking') ?>', { name: name, surname: surname, phone: phone,email:email,line:line,code:code,comment:comment,people1:people1,people2:people2,people3:people3,people4:people4,totalpeople1:totalpeople1,total2:total2,optionid:optionid,Dataid:Dataid}, function (data) {
                if (data !=0) {
                    $.post('<?php echo base_url('Tour/send_mail')?>' , { data : data } , function(data1){
                        if(data1 !=0){
				 alert('ส่งใบคำขอจองแพ็คเกจเรียบร้อย');
 window.location.href = "<?php echo base_url('Tour/BookingDetail/')?>"+data1;	
 }
						});
                } else {
                 alert("ไม่สามารถส่งใบคำขอจองแพ็คเกจ");
                }
            })
        }
        }
//------------------------------------------
    function AddBooking2(code) {
        var name = $('#name').val();
        var surname = $('#surname').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var line = $('#line').val();
        var comment = $('#comment').val();
        var datestart = $('#datestart').val();
        var dateend = $('#dateend').val();
        var adult = $('#adult').val();
        var child = $('#child').val();
        var totalpeople1 = parseInt(adult)+parseInt(child);
        var Dataid = $('#Dataid').val();
     if (name == '') {
        alert("กรุณาใส่ ชื่อผู้ติดต่อ");
            
    }else if (surname == '') {
         alert("กรุณาใส่ นามสกุล");
    }else if (phone == '') {
        alert("กรุณาใส่ เบอร์ติดต่อกลับ");
    }else if (email == '') {
        alert("กรุณาใส่ อีเมลติดต่อกลับ");
            
    }else if (datestart == '') {
        alert("กรุณาใส่ วันที่เดินทางไป");
            
    }else if (dateend == '') {
        alert("กรุณาใส่ วันที่เดินทางกลับ");
            
    }else if (adult == '') {
        alert("กรุณาใส่ จำนวนผู้ใหญ่");
            
    }else if (child == '') {
        alert("กรุณาใส่ จำนวนเด็ก");
            
    }else if (comment == '') {
        alert("กรุณาใส่ ความต้องการเพิ่มเติมอื่นๆ");
            
    }else{
       
            $.post('<?php echo base_url('Tour/AddBooking2') ?>', { name: name, surname: surname, phone: phone,email:email,line:line,code:code,comment:comment,datestart:datestart,dateend:dateend,adult:adult,child:child,totalpeople1:totalpeople1,Dataid:Dataid}, function (data) {
               if (data !=0) {
                    $.post('<?php echo base_url('Tour/send_mail2')?>' , { data : data } , function(data1){
                        if(data1 !=0){
				 alert('ส่งใบคำขอจองแพ็คเกจเรียบร้อย');
 window.location.href = "<?php echo base_url('Tour/BookingDetail2/')?>"+data1;	
 }
						});
                } else {
                 alert("ไม่สามารถส่งใบคำขอจองแพ็คเกจ");
                }
            })
        }
        }
       
       
    //---------------------------------------------------------
    function searchinput1(searchtext){
     if (searchtext == '') {
       return false;
            
    }else{
       $.post('<?php echo base_url('Tour/searchdata')?>',{ searchtext:searchtext },
       function(data){ 
				$('#searchID').empty();
				$('#searchID').html(data);
			})
   }
   }
    //----------------------------
   var arraydata = [];
   var arrayfeaturexx = [];
   function checkdata(type,checkxx,inorfeature){
   if(inorfeature == '1'){
   if(checkxx == true){
    arraydata.push(type);
   
   }else{
       if(jQuery.inArray(type , arraydata) != -1) {
     
     var Index2 = arraydata.indexOf(type); 
     arraydata.splice(Index2, 1);
}
   }
   $('#arrayinout').val(arraydata);
   }
   if(inorfeature == '2'){
   if(checkxx == true){
    arrayfeaturexx.push(type);
   
   }else{
       if(jQuery.inArray(type , arrayfeaturexx) != -1) {
     
     var Index2 = arrayfeaturexx.indexOf(type); 
     arrayfeaturexx.splice(Index2, 1);
}
   }
   $('#arrayfeature').val(arrayfeaturexx);
   }
   
   var arrayinout =  $('#arrayinout').val();
   var arrayfeature =  $('#arrayfeature').val();
   $.post('<?php echo base_url('Tour/checkdata')?>' , { arrayinout : arrayinout,arrayfeature : arrayfeature}, 
			function(data){
                            $('#searchID').empty();
				$('#searchID').html(data);
                        })
   }
  </script>
<script type="text/javascript">
    
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
	if(tpj("#rev_slider").revolution == undefined){
	revslider_showDoubleJqueryError("#rev_slider");
	}else{
		revapi4 = tpj("#rev_slider").show().revolution({
		sliderType:"standard",
		jsFileLocation:"js/revolution-slider/js/",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
		keyboardNavigation:"off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation:"off",
		onHoverStop:"off",
		arrows: {
		style:"erinyen",
		enable:true,
		hide_onmobile:true,
		hide_under:778,
		hide_onleave:true,
		hide_delay:200,
		hide_delay_mobile:1200,
		tmp:'',
		left: {
		h_align:"left",
		v_align:"center",
		h_offset:80,
		v_offset:0
		},
		right: {
		h_align:"right",
		v_align:"center",
		h_offset:80,
		v_offset:0
		}
		}
		,
		touch:{
		touchenabled:"on",
		swipe_threshold: 75,
		swipe_min_touches: 1,
		swipe_direction: "horizontal",
		drag_block_vertical: false
	}
	,
										
										
										
	},
		viewPort: {
		enable:true,
		outof:"pause",
		visible_area:"80%"
	},
	
	responsiveLevels:[1240,1024,778,480],
	gridwidth:[1240,1024,778,480],
	gridheight:[650,640,1300,820],
	lazyType:"smart",
		parallax: {
		type:"mouse",
		origo:"slidercenter",
		speed:2000,
		levels:[2,3,4,5,6,7,12,16,10,50],
		},
	shadow:0,
	spinner:"off",
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",
	autoHeight:"off",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	disableProgressBar:"on",
	debugMode:false,
		fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
		}
	});
	}
	});	/*ready*/
</script> 
 <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

 
<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })
    


  </script>
<script src="<?php echo base_url('HTML/js/functions/functions.js')?>"></script>
</body>
</html>
