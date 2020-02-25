<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        $this->load->model('Fontend_model');
        $this->load->model('Package_model');
    }
	
	
	//---------------------------------
	public function index()
	{
             $data['slidedata'] = $this->Fontend_model->list_slideData();
             $data['promotionDetail'] = $this->Fontend_model->promotionDetail();
             $data['getpackageDetail'] = $this->Fontend_model->getpackageDetail();
             $data['exchangeDetail'] = $this->Fontend_model->exchangeDetail();
             $data['Categorylimit'] = $this->Fontend_model->getCategorylimit('7');
           $this->load->view('package/fontend/index',$data);
	}
	//---------------------------------
	public function Ticket()
	{
		$data['list_ticket_text'] = $this->Fontend_model->list_ticket_text();
		$data['slidedata'] = $this->Fontend_model->list_slideticket();
            $data['categoryList']=$this->Fontend_model->getCategory('2');
             $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/ticket',$data);
           $this->load->view('package/fontend/footer');
	}
	//---------------------------------
	public function Visa()
	{
            $data['categoryList']=$this->Fontend_model->getCategory('2');
             $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/visa_service');
           $this->load->view('package/fontend/footer');
	}
	//---------------------------------
	public function Grouptour()
	{
            $data['categoryList']=$this->Fontend_model->getCategory('2');
             $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/grouptour_service');
           $this->load->view('package/fontend/footer');
	}
        //----------------------------------------------
         public function addgrouptour(){
	$namesurmame = $this->input->post('namesurmame');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $line = $this->input->post('line');
        $program = $this->input->post('program');
        $datestart = $this->input->post('datestart');
        $dateend = $this->input->post('dateend');
        $day = $this->input->post('day');
        $night = $this->input->post('night');
        $totalcustomer = $this->input->post('totalcustomer');
        $Budget = $this->input->post('Budget');
        $comment = $this->input->post('comment');

       
        $result_id = $this->Fontend_model->addgrouptour($namesurmame,$phone,$email,$line,$program,$datestart,$dateend,$day,$night,$totalcustomer,$Budget,$comment);
        
        echo $result_id;
        }
        //--------------------------------------
        public function grouptour2($id=null)
	{
            $data['categoryList']=$this->Fontend_model->getCategory('2');
            $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
            $data['checkinData'] = $this->Fontend_model->getgrouptour($id);
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/group',$data);
           $this->load->view('package/fontend/footer');
	}
             //-------------------
	public function send_mail(){	 
		$txt='';
		/*$emaildata = $this->input->post('email');
		$typedata = $this->input->post('type');
		$userID = $this->input->post('userID');*/		
		$keygroup = $this->input->post('data');				
             $checkinData = $this->Fontend_model->getgrouptour($keygroup);
             foreach($checkinData->result() as $Data){} 

		$from_email = 'sunnyhatyai@gmail.com';
		$subject = "Group Tour ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว";		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$to_email = $Data->email;
		$email_body = '<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sunny Tours Hatyai ซั่นนี่ ทัวร์ หาดใหญ่ ศูนย์รวมการท่องเที่ยว บริการจองตั๋วเครื่องบิน นำเที่ยว จำหน่าย แพ็คเกจทัวร์ในประเทศ แพ็คเกจทัวร์ต่างประเทศ ด้วยบริการที่ดีที่สุด</title>
<meta name="keywords" content="แพคเกจทัวร์, แพ็คเกจทัวร์, แพ็คเก็จทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ, ทัวร์ทั่วโลก, ทัวร์ราคาประหยัด, ทัวร์อิสระ, มาเลเซีย, ไต้หวัน, ฮ่องกง, ญี่ปุ่น, เกาหลี, เวียดนาม, รัสเซีย, ออสเตรเรีย, ภาคเหนือ, ภาคใต้, ทัวร์, แลกเงิน, หาดใหญ่, ประเทศไทย, บริษัททัวร์, ราคาถูก, จองตั๋ว, ตั๋วเครื่องบิน, รับทำวีซ่า, วีซ่า" />
<meta name="description" content="ซันนี่ทัวร์ หาดใหญ่ บริการจองตั๋วเครื่องบินหลากหลายสายการบิน  บริการนำเที่ยว จำหน่ายแพ็คเกจทัวร์ในประเทศ ทัวร์ต่างประเทศ วางแผนการท่องเที่ยวของคุณอย่างอิสระ เลือกแพคเกจทัวร์ที่ตรงใจคุณวันนี้ โทร : (081) 990-2137 แผนกตั๋วเครื่องบิน (081) 990-2137">
<meta name="author" content="ME-FI.COM">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	

<link rel="stylesheet" href="'.base_url().'HTML/js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/theme-default.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shop.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="'.base_url().'HTML/fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/navigation.css">
<link href="'.base_url().'HTML/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="'.base_url().'HTML/js/owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/cubeportfolio/cubeportfolio.min.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shortcodes.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/css/corporate.css" type="text/css">
<link href="'.base_url().'HTML/js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet/less" type="text/css" href="'.base_url().'HTML/less/skin.less">


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

    
    <div class="clearfix"></div>
    
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-6"> <h3>ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว</h3></div>
        	
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

	
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div class="row">
            <div class="col-md-12" style="padding-left:50px">	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการเดินทาง</span></h4>
		  <table style="width:100%">
			  <tr>
				<th class="col-md-4"></th>
				<th class="col-md-8"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>ชื่อ-นามสกุล ผู้จอง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->name.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>โทรศัพท์</h4></td>
				<td class="pro-des" align="left"a>'.$Data->phone.'</td>
			 <tr>
				<td class="pro-title"><h4>อีเมล</h4></td>
				<td class="pro-des" align="left"a>'.$Data->email.'</td>
			 </tr>';
                   if($Data->line!=''){
			  $email_body=$email_body.'<tr>
				<td class="pro-title"><h4>Line ID</h4></td>
				<td class="pro-des" align="left"a>'.$Data->line.'</td>
			 </tr>';  
                   }
			  $email_body=$email_body.'<tr>
				<td class="pro-title"><h4>โปรแกรม</h4></td>
				<td class="pro-des" align="left"a>'.$Data->program.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>วันที่เดินทางไป</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_start).'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>วันที่เดินทางกลับ</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_end).'</td>
			 </tr>';
                   if($Data->day!=''){
			  $email_body=$email_body.'<tr>
				<td class="pro-title"><h4>จำนวนวันและคืน</h4></td>
				<td class="pro-des" align="left"a>'.$Data->day.' วัน '.$Data->night.' คืน</td>
			 </tr>';  
                   }
			  $email_body=$email_body.'<tr>
				<td class="pro-title"><h4>จำนวนผู้เดินทาง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->total_customer.' ท่าน </td>
			 </tr>';
                   if($Data->bugjet!=''){
			  $email_body=$email_body.'<tr>
				<td class="pro-title"><h4>Budget</h4></td>
				<td class="pro-des" align="left"a>'.number_format($Data->bugjet).' บาท/ท่าน </td>
			 </tr>';  
                   }
                   if($Data->note!=''){
			  $email_body=$email_body.'<tr>
				<td class="pro-title"><h4>หมายเหตุ</h4></td>
				<td class="pro-des" align="left"a>'.$Data->note.'</td>
			 </tr>';  
                   }
			  $email_body=$email_body.'</table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h4>เราได้รับข้อมูลของคุณเรียบร้อย อีเมลยืนยันการจองส่งไปแล้วที่: '.$Data->email.'</h4>

			  <p style="color:#B50003">ขณะนี้เจ้าหน้าที่กำลังตรวจสอบที่นั่งให้กับคุณ และจะติดต่อกลับ อย่างเร็วที่สุดใน 1-3 วัน<br><br>

				หมายเหตุ<br>
				1. การจองผ่านเว็บเป็นการส่งคำจองที่นั่งกับบริษัทเท่านั้น และจะยังไม่ได้รับการยืนยันจนกว่า จะมีเจ้าหน้าที่ติดต่อกลับหาคุณ<br>
			  </p>
		  </div>
	  </div>
			
			
			
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
<script src="'.base_url().'HTML/js/jquery/jquery.js"></script> 
<script src="'.base_url().'HTML/js/bootstrap/bootstrap.min.js"></script> 
<script src="'.base_url().'HTML/js/less/less.min.js" data-env="development"></script> 
<!-- Scripts END --> 
	


<!-- Template scripts --> 
<script src="'.base_url().'HTML/js/tabs/js/responsive-tabs.min.js" type="text/javascript"></script>
<script src="'.base_url().'HTML/js/megamenu/js/main.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/main-mosaic3.js"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
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
		tmp:"",
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

        $(".loader-live").fadeOut();
      },1000);
    })

  </script>
<script src="'.base_url().'HTML/js/functions/functions.js"></script>
</body>
</html>
';	 	
		

                    $subject = " Group Tour ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว";		
                    $this->email->from($from_email, 'Group Tour Sunny Tour'); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
       	$this->email->message($email_body); 
        if($this->email->send()){
                $from_email1 = 'sunnyhatyai@gmail.com';
		$subject1 = "[For Admin]Group Tour ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว";		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$email_body1 = '<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sunny Tours Hatyai ซั่นนี่ ทัวร์ หาดใหญ่ ศูนย์รวมการท่องเที่ยว บริการจองตั๋วเครื่องบิน นำเที่ยว จำหน่าย แพ็คเกจทัวร์ในประเทศ แพ็คเกจทัวร์ต่างประเทศ ด้วยบริการที่ดีที่สุด</title>
<meta name="keywords" content="แพคเกจทัวร์, แพ็คเกจทัวร์, แพ็คเก็จทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ, ทัวร์ทั่วโลก, ทัวร์ราคาประหยัด, ทัวร์อิสระ, มาเลเซีย, ไต้หวัน, ฮ่องกง, ญี่ปุ่น, เกาหลี, เวียดนาม, รัสเซีย, ออสเตรเรีย, ภาคเหนือ, ภาคใต้, ทัวร์, แลกเงิน, หาดใหญ่, ประเทศไทย, บริษัททัวร์, ราคาถูก, จองตั๋ว, ตั๋วเครื่องบิน, รับทำวีซ่า, วีซ่า" />
<meta name="description" content="ซันนี่ทัวร์ หาดใหญ่ บริการจองตั๋วเครื่องบินหลากหลายสายการบิน  บริการนำเที่ยว จำหน่ายแพ็คเกจทัวร์ในประเทศ ทัวร์ต่างประเทศ วางแผนการท่องเที่ยวของคุณอย่างอิสระ เลือกแพคเกจทัวร์ที่ตรงใจคุณวันนี้ โทร : (081) 990-2137 แผนกตั๋วเครื่องบิน (081) 990-2137">
<meta name="author" content="ME-FI.COM">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	

<link rel="stylesheet" href="'.base_url().'HTML/js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/theme-default.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shop.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="'.base_url().'HTML/fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/navigation.css">
<link href="'.base_url().'HTML/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="'.base_url().'HTML/js/owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/cubeportfolio/cubeportfolio.min.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shortcodes.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/css/corporate.css" type="text/css">
<link href="'.base_url().'HTML/js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet/less" type="text/css" href="'.base_url().'HTML/less/skin.less">


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

    
    <div class="clearfix"></div>
    
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-6"> <h3>ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว</h3></div>
        	
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

	
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-bpadding-2">
  <div class="container">
  <div class="row">  
  	<!--end right column -->
	<div class="col-md-12">      

	
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div class="row">
            <div class="col-md-12" style="padding-left:50px">	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการเดินทาง</span></h4>
		  <table style="width:100%">
			  <tr>
				<th class="col-md-4"></th>
				<th class="col-md-8"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>ชื่อ-นามสกุล ผู้จอง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->name.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>โทรศัพท์</h4></td>
				<td class="pro-des" align="left"a>'.$Data->phone.'</td>
			 <tr>
				<td class="pro-title"><h4>อีเมล</h4></td>
				<td class="pro-des" align="left"a>'.$Data->email.'</td>
			 </tr>';
                   if($Data->line!=''){
			  $email_body1=$email_body1.'<tr>
				<td class="pro-title"><h4>Line ID</h4></td>
				<td class="pro-des" align="left"a>'.$Data->line.'</td>
			 </tr>';  
                   }
			  $email_body1=$email_body1.'<tr>
				<td class="pro-title"><h4>โปรแกรม</h4></td>
				<td class="pro-des" align="left"a>'.$Data->program.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>วันที่เดินทางไป</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_start).'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>วันที่เดินทางกลับ</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_end).'</td>
			 </tr>';
                   if($Data->day!=''){
			  $email_body1=$email_body1.'<tr>
				<td class="pro-title"><h4>จำนวนวันและคืน</h4></td>
				<td class="pro-des" align="left"a>'.$Data->day.' วัน '.$Data->night.' คืน</td>
			 </tr>';  
                   }
			  $email_body1=$email_body1.'<tr>
				<td class="pro-title"><h4>จำนวนผู้เดินทาง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->total_customer.' ท่าน </td>
			 </tr>';
                   if($Data->bugjet!=''){
			  $email_body1=$email_body1.'<tr>
				<td class="pro-title"><h4>Budget</h4></td>
				<td class="pro-des" align="left"a>'.number_format($Data->bugjet).' บาท/ท่าน </td>
			 </tr>';  
                   }
                   if($Data->note!=''){
			  $email_body1=$email_body1.'<tr>
				<td class="pro-title"><h4>หมายเหตุ</h4></td>
				<td class="pro-des" align="left"a>'.$Data->note.'</td>
			 </tr>';  
                   }
			  $email_body1=$email_body1.'</table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h4>เราได้รับข้อมูลของคุณเรียบร้อย อีเมลยืนยันการจองส่งไปแล้วที่:  '.$Data->email.'</h4>

			  <p style="color:#B50003">ขณะนี้เจ้าหน้าที่กำลังตรวจสอบที่นั่งให้กับคุณ และจะติดต่อกลับ อย่างเร็วที่สุดใน 1-3 วัน<br><br>

				หมายเหตุ<br>
				1. การจองผ่านเว็บเป็นการส่งคำจองที่นั่งกับบริษัทเท่านั้น และจะยังไม่ได้รับการยืนยันจนกว่า จะมีเจ้าหน้าที่ติดต่อกลับหาคุณ<br>
			  </p>
		  </div>
	  </div>
			
			
			
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
<script src="'.base_url().'HTML/js/jquery/jquery.js"></script> 
<script src="'.base_url().'HTML/js/bootstrap/bootstrap.min.js"></script> 
<script src="'.base_url().'HTML/js/less/less.min.js" data-env="development"></script> 
<!-- Scripts END --> 
	


<!-- Template scripts --> 
<script src="'.base_url().'HTML/js/tabs/js/responsive-tabs.min.js" type="text/javascript"></script>
<script src="'.base_url().'HTML/js/megamenu/js/main.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/main-mosaic3.js"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
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
		tmp:"",
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

        $(".loader-live").fadeOut();
      },1000);
    })

  </script>
<script src="'.base_url().'HTML/js/functions/functions.js"></script>
</body>
</html>
';	 	
		

                    $subject = "[For Admin]Group Tour ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว";		
                    $this->email->from($from_email1, 'Group Tour Sunny Tour'); 
        $this->email->to($from_email1);
        $this->email->subject($subject1); 
       	$this->email->message($email_body1); 
        if($this->email->send()){ 
		   	$result2 = $keygroup;			
        }		
        }	
          	$result = $result2;  			
		echo $result;		
	}
     
      
}
