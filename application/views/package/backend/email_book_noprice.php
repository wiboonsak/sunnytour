<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sunny Tours Hatyai ซั่นนี่ ทัวร์ หาดใหญ่ ศูนย์รวมการท่องเที่ยว บริการจองตั๋วเครื่องบิน นำเที่ยว จำหน่าย แพ็คเกจทัวร์ในประเทศ แพ็คเกจทัวร์ต่างประเทศ ด้วยบริการที่ดีที่สุด</title>
<meta name="keywords" content="แพคเกจทัวร์, แพ็คเกจทัวร์, แพ็คเก็จทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ, ทัวร์ทั่วโลก, ทัวร์ราคาประหยัด, ทัวร์อิสระ, มาเลเซีย, ไต้หวัน, ฮ่องกง, ญี่ปุ่น, เกาหลี, เวียดนาม, รัสเซีย, ออสเตรเรีย, ภาคเหนือ, ภาคใต้, ทัวร์, แลกเงิน, หาดใหญ่, ประเทศไทย, บริษัททัวร์, ราคาถูก, จองตั๋ว, ตั๋วเครื่องบิน, รับทำวีซ่า, วีซ่า" />
<meta name="description" content="ซันนี่ทัวร์ หาดใหญ่ บริการจองตั๋วเครื่องบินหลากหลายสายการบิน  บริการนำเที่ยว จำหน่ายแพ็คเกจทัวร์ในประเทศ ทัวร์ต่างประเทศ วางแผนการท่องเที่ยวของคุณอย่างอิสระ เลือกแพคเกจทัวร์ที่ตรงใจคุณวันนี้ โทร : (081) 990-2137 แผนกตั๋วเครื่องบิน (081) 990-2137">
<meta name="author" content="ME-FI.COM">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url('HTML/images/favicon.ico')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.css')?>">

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

</head>
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
    <div class=" clearfix"></div>
    <!--end header section -->
    <?php $keygroup = $this->uri->segment(3);
    $checkinData = $this->Fontend_model->getbooking($keygroup);
    foreach ($checkinData->result() AS $Data){}?>
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-6"> <h3>ใบคำขอจองแพ็คเกจทัวร์</h3></div>
        	<div class="col-md-6">
                    <h4><?php echo $Data->booking_id?></h4>
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
  	<!--end right column -->
	<div class="col-md-12">      

	<section class="">	  
		<h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $Data->package_name_en?></h4>  
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Data->Traveling_date?></h4>
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div class="row">
	  <div class="col-md-6" style="padding-left: 30px">	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;ข้อมูลการเดินทาง</span></h4>
	 <div class="table-responsive">
             <table style="width:100%">
			  <tr>
                              <th class="col-md-4"></th>
				<th class="col-md-8"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h6>วันที่เดินทางไป</h6></td>
				<td class="pro-des" align="left"><?php echo $this->Fontend_model->getDayMonthYearthai($Data->date_start)?></td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>วันที่เดินทางกลับ</h6></td>
				<td class="pro-des" align="left"><?php echo $this->Fontend_model->getDayMonthYearthai($Data->date_end)?></td>
			 <tr>
				<td class="pro-title"><h6>จำนวนผู้ใหญ่</h6></td>
				<td class="pro-des" align="left"><?php echo $Data->customer_adult?>&nbsp;&nbsp; ท่าน</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>จำนวนเด็ก</h6></td>
				<td class="pro-des" align="left"><?php echo $Data->customer_child?>&nbsp;&nbsp; ท่าน</td>
			 </tr>   
			  <tr>
				<td class="pro-title"><h6>ผู้เดินทางทั้งหมด</h6></td>
				<td class="pro-des" align="left"><?php echo $Data->total_customer?>&nbsp;&nbsp; ท่าน</td>
			 </tr>   
		  </table>
	  
		
	  </div>
	  </div>
		
	  <div class="col-md-6">	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการติดต่อ</span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h6>ชื่อ-นามสกุล ผู้จอง</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->customer_name?> <?php echo $Data->customer_Lastname?></td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>โทรศัพท์</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->customer_telephone?></td>
			 <tr>
				<td class="pro-title"><h6>อีเมล</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->customer_email?></td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>Line ID</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->IDLine?></td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h6>ความต้องการเพิ่มเติม</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->comment?> </td>
			 </tr> 
		  </table>	

	</div>
		
		
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
<script src="<?php echo base_url('HTML/js/megamenu/js/main.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/custom.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/custom.js')?>"></script> 
<script type="<?php echo base_url('HTML/text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/cubeportfolio/main-mosaic3.js')?>"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js')?>"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js')?>"></script> 
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
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

  </script>
<script src="<?php echo base_url('HTML/js/functions/functions.js')?>"></script>
</body>
</html>