<?php  $Dataid = $this->uri->segment(3);
 foreach ($promotionDetail->result() AS $Data){}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sunny Tours Hatyai ซั่นนี่ ทัวร์ หาดใหญ่ ศูนย์รวมการท่องเที่ยว บริการจองตั๋วเครื่องบิน นำเที่ยว จำหน่าย แพ็คเกจทัวร์ในประเทศ แพ็คเกจทัวร์ต่างประเทศ ด้วยบริการที่ดีที่สุด</title>
<meta name="keywords" content="แพคเกจทัวร์, แพ็คเกจทัวร์, แพ็คเก็จทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ, ทัวร์ทั่วโลก, ทัวร์ราคาประหยัด, ทัวร์อิสระ, มาเลเซีย, ไต้หวัน, ฮ่องกง, ญี่ปุ่น, เกาหลี, เวียดนาม, รัสเซีย, ออสเตรเรีย, ภาคเหนือ, ภาคใต้, ทัวร์, แลกเงิน, หาดใหญ่, ประเทศไทย, บริษัททัวร์, ราคาถูก, จองตั๋ว, ตั๋วเครื่องบิน, รับทำวีซ่า, วีซ่า" />
<meta name="description" content="ซันนี่ทัวร์ หาดใหญ่ บริการจองตั๋วเครื่องบินหลากหลายสายการบิน  บริการนำเที่ยว จำหน่ายแพ็คเกจทัวร์ในประเทศ ทัวร์ต่างประเทศ วางแผนการท่องเที่ยวของคุณอย่างอิสระ เลือกแพคเกจทัวร์ที่ตรงใจคุณวันนี้ โทร : (081) 990-2137 แผนกตั๋วเครื่องบิน (081) 990-2137">
<meta name="author" content="ME-FI.COM">

                <meta property="fb:app_id"        content="355179808591281"/>
         <meta property="og:url"           content="<?php echo base_url('Promotion/promotion_Detail/').$Dataid?>"/>
         <meta property="og:type"          content="website"/>
        <meta property="og:title"         content="<?php echo $Data->topic?>"/>
        <meta property="og:description"   content="<?php echo strip_tags($Data->promotion_detail)?>"/>
        <meta property="og:image"         content="<?php echo base_url('uploadfile/promotion_img/').$Data->img?>"/>
<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url('HTML/images/favicon.ico')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.css')?>">
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c0747ce0624ce0011ee8bbb&product=inline-share-buttons' async='async'></script>
<script type='text/javascript' src='https://social-plugins.line.me/lineit/share?url={encodeURIComponent(URL)}' ></script>
<script type='text/javascript' src='https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fline.me%2Fen' ></script>
<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

<!-- Template's stylesheets -->
<link rel="stylesheet" href="<?php echo base_url('HTML/js/megamenu/stylesheets/screen.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/theme-default.css" type="text/css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/js/loaders/stylesheets/screen.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/shop.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')?>" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/et-line-font/et-line-font.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/settings.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/layers.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/navigation.css')?>">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.theme.css')?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/cubeportfolio/cubeportfolio.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/shortcodes.css')?>" type="text/css">
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
}
</style> 
</head>
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  </script>

<body>
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
	<!-- end header --->
     <?php include("header2.php"); ?>
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
    <h3 class="uppercase text-white less-mar-1 title">Promotions</h3>
    <h6 class="uppercase text-white sub-title">พบกับโปรโมชั่นกิจกรรมน่าสนใจมากมายจากซันนี่ทัวร์</h6>
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
    <li><a href="<?php echo base_url('Promotion')?>" style="color:black">Promotions</a></li>
    <li class="current"><a href="<?php echo base_url('Promotion/promotion_Detail/').$Dataid?>"><?php echo $Data->topic ?></a></li>
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
                                              <input type="checkbox" onclick="checkdata(this.value,this.checked,'1')" value="2"/>
						  <div class="control__indicator red"></div>
					  </label>
					  <label class="control control--checkbox">เที่ยวในประเทศ
						 <input type="checkbox" onclick="checkdata(this.value,this.checked,'1')" value="1"/>
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
                                              <input type="checkbox" onclick="checkdata(this.value,this.checked,'2')" value="<?php echo $feature->id?>"/>
						  <div class="control__indicator red"></div>
                                                  
					  </label>
                                       <?php }?>  
                                       <input type="hidden" id="arrayfeature" name="arrayfeature"/>
				  </div>
              </div>
              <!--end item holder--> 
              
  			    <div class="sidebar-item-holder">
                <h5 class="uppercase sp-sb-title">ค้นหาข้อมูล</h5>
                <input type="text" name="name" class="sp-news-letter" placeholder="Search" maxlength="100" onchange="searchinput1(this.value)"/>
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
<?php $n = 1;
foreach ($imagesList->result() AS $imagesList2){ 
?>
			<div class="item">
			<div class="col-md-12">
                            <img src="<?php echo base_url('uploadfile/promotion_img/').$imagesList2->images_name?>" alt="" class="img-responsive" id="img<?php echo $n?>"/>                           
			  </div> 

			</div>
<?php $n++;}?>


	

		</div>
		<!--end carousel-->
	</div>

	 <div class="col-divider-margin-6"></div>

	 
	  <!--end item-->

	  <div class="col-md-12">
		<h4><?php echo $Data->topic?></h4>  
		<br>
		  <h5>รายละเอียดโปรโมชั่น</h5>
		  <p><?php echo $Data->promotion_detail?></p>
		  <br>
		  <h5>เงื่อนไขในการจอง</h5>
		  <p><?php echo $Data->position_Condition?>
		  </p>
		  <br>
             </div>      
		<div id="fb-root"></div>
             <div class="row"> 
                 <div class="col-md-1">
<div class="fb-share-button" 
    data-href="<?php echo base_url('Promotion/promotion_Detail/').$Dataid?>" 
    data-layout="button">
  </div>
                 </div>
                 <div class="col-md-1" style="
    padding-top: 2px;
">
<div class="line-it-button" data-lang="en" data-type="share-a" data-ver="3" data-url="<?php echo base_url('Promotion/promotion_Detail/').$Dataid?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
             </div>
             </div>
                
                
		  
<!--		  <ul class="social-icons h-anim-rotate socila-sm">
                      <li class="hover-facebook"><a onclick="fbs_click('img1')"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      
			<li class="hover-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		 </ul>-->
			
	 		  

	  <!--end item-->

	  
	  </section>
	 <div class="clearfix"></div>
	 <!-- end section -->
	  

		
		</div>
  	<!--end left column -->
  
  </div>
  </div>
  </section>
	  
	  
	  
<div class="clearfix"></div>
  <!-- end section -->
   


