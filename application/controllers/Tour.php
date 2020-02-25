<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {

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
	public function index($page=null)
	{
 
           
              $perpage = 6; $limit =''; $notUse = '';$cate_id = '';$type='';
              $data['cate_id'] = $cate_id;
              $data['type'] = $type;
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['packageDetail'] = $this->Fontend_model->getpackageDetail1($limit,$notUse,$start,$perpage);
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
                
           $this->load->view('package/fontend/tour',$data);
	}
	//---------------------------------
	public function Tourbycate($cate_id=null,$type=NULL,$page=NULL)
	{
 
           
              $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['packageDetail'] = $this->Fontend_model->getpackageDetail1($limit,$notUse,$start,$perpage,$cate_id,$type);
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
                $data['cate_id'] = $cate_id;
              $data['type'] = $type;
           $this->load->view('package/fontend/tour',$data);
	}
        //----------------------------------------------------
         public function PageTourbycate($cate_id=null,$type=NULL,$page=null)
	{
	
	     $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['packageDetail'] = $this->Fontend_model->getpackageDetail1($limit,$notUse,$start,$perpage,$cate_id,$type);
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
                $data['cate_id'] = $cate_id;
              $data['type'] = $type;
           $this->load->view('package/fontend/tour',$data);
        }
        //----------------------------------------------------
        public function Page($page=null)
	{
	$cate_id = '';$type='';
        $data['cate_id'] = $cate_id;
        $data['type'] = $type;
	    $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['packageDetail'] = $this->Fontend_model->getpackageDetail1($limit,$notUse,$start,$perpage);
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
                
           $this->load->view('package/fontend/tour',$data);
        }
        //--------------------------------------------
         public function package_Detail($dataID=null)
	{
	

                $data['getpackageDetail'] = $this->Fontend_model->getpackageDetailByID($dataID);
                $data['imagesList']=$this->Fontend_model->loadpackageImg($dataID);
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
		
		//--------------------------------

                $this->load->view('package/fontend/tour_detail',$data);
                

        }
        //----------------------------------------------
         public function AddBooking2(){
	$name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $line = $this->input->post('line');
        $code = $this->input->post('code');
        $comment = $this->input->post('comment');
        $datestart = $this->input->post('datestart');
        $dateend = $this->input->post('dateend');
        $adult = $this->input->post('adult');
        $child = $this->input->post('child');
        $totalpeople1 = $this->input->post('totalpeople1');
        $Dataid = $this->input->post('Dataid');
        
        $keygroup = $this->Fontend_model->getbookingid($code);
        $numberbook = $this->Fontend_model->getnumberbook($code);
        
       
        $result_id = $this->Fontend_model->Addbooking2($name, $surname,$phone,$email,$line,$keygroup,$comment,$datestart,$dateend,$adult,$child,$totalpeople1,$numberbook,$Dataid);
        
        echo $result_id;
        }
        //----------------------------------------------
         public function AddBooking(){
	$name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $line = $this->input->post('line');
        $code = $this->input->post('code');
        $comment = $this->input->post('comment');
        $people1 = $this->input->post('people1');
        $people2 = $this->input->post('people2');
        $people3 = $this->input->post('people3');
        $people4 = $this->input->post('people4');
        $totalpeople1 = $this->input->post('totalpeople1');
        $total2 = $this->input->post('total2');
        $optionid = $this->input->post('optionid');
        $Dataid = $this->input->post('Dataid');
        
        $keygroup = $this->Fontend_model->getbookingid($code);
        $numberbook = $this->Fontend_model->getnumberbook($code);
        
       
        $result_id = $this->Fontend_model->Addbooking($name, $surname,$phone,$email,$line,$keygroup,$comment,$people1,$people2,$people3,$people4,$totalpeople1,$total2,$optionid,$numberbook,$Dataid);
        
        echo $result_id;
        }
         //-------------------
	public function send_mail(){	 
		$txt='';
		/*$emaildata = $this->input->post('email');
		$typedata = $this->input->post('type');
		$userID = $this->input->post('userID');*/		
		$keygroup = $this->input->post('data');				
             $checkinData = $this->Fontend_model->getbooking($keygroup);
             foreach($checkinData->result() as $Data){} 

		$from_email = 'sunnyhatyai@gmail.com';
		$subject = "Booking Package ใบแจ้งการจองแพ็คเกจ";		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$to_email = $Data->customer_email;
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
       		<div class="col-md-6"> <h3>ใบคำขอจองแพ็คเกจทัวร์</h3></div>
        	<div class="col-md-6">
        		'.$Data->booking_id.'
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
		<h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;'.$Data->package_name_en.'</h4> 
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Data->Traveling_date.'</h4>
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div style="display: inline-flex;">
	  <div style="width:50%;"  >	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;จำนวนผู้เดินทาง</span></h4>
	
		  <div class="table-responsive">

	  <table class="sp-cart">
	    <tr>
		 	<th style="width:40%; background-color: #E5E5E5; text-align: center">ประเภทห้อง</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">ราคา/คน</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">จำนวนผู้เดินทาง</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">ราคา/คน</th>
		</tr>

	 <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พัก 2-3 ท่าน)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->adult_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_adult.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->adult_price)*intval($Data->customer_adult)).' บาท</h4></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พักเดี่ยว)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->aloneadult_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_adultalone.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->aloneadult_price)*intval($Data->customer_adultalone)).' บาท</h4></td>
	 </tr>  
	 <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (ไม่เพิ่มเตียง)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->child_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_child.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->child_price)*intval($Data->customer_child)).' บาท</h4></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (เพิ่มเตียง)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->addchild_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_childextra.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->addchild_price)*intval($Data->customer_childextra)).' บาท</h4></td>
	 </tr>  
	 <tr>
		<td class="pro-title"></td>
		<td class="pro-des" align="center"a></td>
		<td class="pro-price" align="center"><h4>รวม '.$Data->total_customer.'  ท่าน </h4></td>
		<td class="pro-des" align="center"a><h4 style="color: #CF0104; font-weight: 600">'.number_format($Data->total_price).' บาท</h4></td>
	 </tr>  
	  </table>
	   </div> 
	  
		
	  </div>
		
	  <div style="width:50%;padding-left:15px;" >	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการติดต่อ</span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>ชื่อ-นามสกุล ผู้จอง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_name.' '.$Data->customer_Lastname.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>โทรศัพท์</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_telephone.'</td>
			 <tr>
				<td class="pro-title"><h4>อีเมล</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_email.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>Line ID</h4></td>
				<td class="pro-des" align="left"a>'.$Data->IDLine.'</td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h4>ความต้องการเพิ่มเติม</h4></td>
				<td class="pro-des" align="left"a>'.$Data->comment.'</td>
			 </tr> 
		  </table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h5>เราได้รับข้อมูลของคุณเรียบร้อย อีเมลยืนยันการจองส่งไปแล้วที่: '.$Data->customer_email.'</h5>

			  <p style="color:#B50003">ขณะนี้เจ้าหน้าที่กำลังตรวจสอบที่นั่งให้กับคุณ และจะติดต่อกลับ อย่างเร็วที่สุดใน 1-3 วัน<br><br>

				หมายเหตุ<br>
				1. การจองผ่านเว็บเป็นการส่งคำจองที่นั่งกับบริษัทเท่านั้น และจะยังไม่ได้รับการยืนยันจนกว่า จะมีเจ้าหน้าที่ติดต่อกลับหาคุณ<br>
				2. ราคาและจำนวนที่นั่งอาจมีการเปลี่ยนแปลง
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
		

                    $subject = " Booking Package ใบแจ้งการจองแพ็คเกจ";		
                    $this->email->from($from_email, 'Booking Package Sunny Tour'); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
       	$this->email->message($email_body); 
        if($this->email->send()){
                $from_email1 = 'sunnyhatyai@gmail.com';
		$subject1 = "[For Admin]Booking Package ใบแจ้งการจองแพ็คเกจ";		
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
       		<div class="col-md-6"> <h3>ใบคำขอจองแพ็คเกจทัวร์</h3></div>
        	<div class="col-md-6">
        		'.$Data->booking_id.'
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

	<section class="sec-padding">	  
		<h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;'.$Data->package_name_en.'</h4>  
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Data->Traveling_date.'</h4>
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div style="display: inline-flex;">
	  <div style="width:50%;"  >	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;จำนวนผู้เดินทาง</span></h4>
	
		  <div class="table-responsive">

	  <table class="sp-cart">
	    <tr>
		 	<th style="width:40%; background-color: #E5E5E5; text-align: center">ประเภทห้อง</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">ราคา/คน</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">จำนวนผู้เดินทาง</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">ราคา/คน</th>
		</tr>

	 <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พัก 2-3 ท่าน)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->adult_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_adult.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->adult_price)*intval($Data->customer_adult)).' บาท</h4></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พักเดี่ยว)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->aloneadult_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_adultalone.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->aloneadult_price)*intval($Data->customer_adultalone)).' บาท</h4></td>
	 </tr>  
	 <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (ไม่เพิ่มเตียง)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->child_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_child.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->child_price)*intval($Data->customer_child)).' บาท</h4></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h4><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (เพิ่มเตียง)</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format($Data->addchild_price).' บาท</h4></td>
		<td class="pro-price" align="center"><h4>'.$Data->customer_childextra.'</h4></td>
		<td class="pro-des" align="center"a><h4>'.number_format(intval($Data->addchild_price)*intval($Data->customer_childextra)).' บาท</h4></td>
	 </tr>  
	 <tr>
		<td class="pro-title"></td>
		<td class="pro-des" align="center"a></td>
		<td class="pro-price" align="center"><h4>รวม '.$Data->total_customer.'  ท่าน </h4></td>
		<td class="pro-des" align="center"a><h4 style="color: #CF0104; font-weight: 600">'.number_format($Data->total_price).' บาท</h4></td>
	 </tr>  
	  </table>
	   </div> 
	  
		
	  </div>
		
	  <div style="width:50%;padding-left:15px;" >	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการติดต่อ</span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>ชื่อ-นามสกุล ผู้จอง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_name.' '.$Data->customer_Lastname.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>โทรศัพท์</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_telephone.'</td>
			 <tr>
				<td class="pro-title"><h4>อีเมล</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_email.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>Line ID</h4></td>
				<td class="pro-des" align="left"a>'.$Data->IDLine.'</td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h4>ความต้องการเพิ่มเติม</h4></td>
				<td class="pro-des" align="left"a>'.$Data->comment.'</td>
			 </tr> 
		  </table>	
		  
		 
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
		

                    $subject = "[For Admin] Booking Package ใบแจ้งการจองแพ็คเกจ";		
                    $this->email->from($from_email1, 'Booking Package Sunny Tour'); 
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
        
            //-------------------
	public function send_mail2(){	 
		$txt='';
		/*$emaildata = $this->input->post('email');
		$typedata = $this->input->post('type');
		$userID = $this->input->post('userID');*/		
		$keygroup = $this->input->post('data');				
             $checkinData = $this->Fontend_model->getbooking2($keygroup);
             foreach($checkinData->result() as $Data){} 

		$from_email = 'sunnyhatyai@gmail.com';
		$subject = "Booking Package ใบแจ้งการจองแพ็คเกจ";		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$to_email = $Data->customer_email;
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
       		<div class="col-md-6"> <h3>ใบคำขอจองแพ็คเกจทัวร์</h3></div>
        	<div class="col-md-6">
        		'.$Data->booking_id.'
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
		<h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;'.$Data->package_name_en.'</h4> 
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div style="display: inline-flex;">
	  <div style="width:50%;"  >	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;จำนวนผู้เดินทาง</span></h4>
          <div class="table-responsive">
	<table style="width:100%">
			  <tr>
				 <th class="col-md-4"></th>
				<th class="col-md-8"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>วันที่เดินทางไป</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_start).'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>วันที่เดินทางกลับ</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_end).'</td>
			 <tr>
				<td class="pro-title"><h4>จำนวนผู้ใหญ่</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_adult.' &nbsp;&nbsp; ท่าน</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>จำนวนเด็ก</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_child.' &nbsp;&nbsp; ท่าน</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>ผู้เดินทางทั้งหมด</h4></td>
				<td class="pro-des" align="left"a>'.$Data->total_customer.' &nbsp;&nbsp; ท่าน</td>
			 </tr>   
			 
		  </table>
	</div>	  
	  
		
	  </div>
		
	  <div style="width:50%;padding-left:15px;" >	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการติดต่อ</span></h4>
                   <div class="table-responsive">
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>ชื่อ-นามสกุล ผู้จอง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_name.' '.$Data->customer_Lastname.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>โทรศัพท์</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_telephone.'</td>
			 <tr>
				<td class="pro-title"><h4>อีเมล</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_email.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>Line ID</h4></td>
				<td class="pro-des" align="left"a>'.$Data->IDLine.'</td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h4>ความต้องการเพิ่มเติม</h4></td>
				<td class="pro-des" align="left"a>'.$Data->comment.'</td>
			 </tr> 
		  </table>	
		  </div>
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h5>เราได้รับข้อมูลของคุณเรียบร้อย อีเมลยืนยันการจองส่งไปแล้วที่: '.$Data->customer_email.'</h5>

			  <p style="color:#B50003">ขณะนี้เจ้าหน้าที่กำลังตรวจสอบที่นั่งให้กับคุณ และจะติดต่อกลับ อย่างเร็วที่สุดใน 1-3 วัน<br><br>

				หมายเหตุ<br>
				1. การจองผ่านเว็บเป็นการส่งคำจองที่นั่งกับบริษัทเท่านั้น และจะยังไม่ได้รับการยืนยันจนกว่า จะมีเจ้าหน้าที่ติดต่อกลับหาคุณ<br>
				2. ราคาและจำนวนที่นั่งอาจมีการเปลี่ยนแปลง
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
		

                    $subject = " Booking Package ใบแจ้งการจองแพ็คเกจ";		
                    $this->email->from($from_email, 'Booking Package Sunny Tour'); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
       	$this->email->message($email_body); 
        if($this->email->send()){
                $from_email1 = 'sunnyhatyai@gmail.com';
		$subject1 = "[For Admin]Booking Package ใบแจ้งการจองแพ็คเกจ";		
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
       		<div class="col-md-6"> <h3>ใบคำขอจองแพ็คเกจทัวร์</h3></div>
        	<div class="col-md-6">
        		'.$Data->booking_id.'
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

	<section class="sec-padding">	  
		<h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;'.$Data->package_name_en.'</h4>  
                
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div style="display: inline-flex;">
	  <div style="width:50%;"  >	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;จำนวนผู้เดินทาง</span></h4>
	
		  <div class="table-responsive">

	  <table style="width:100%">
			  <tr>
				 <th class="col-md-4"></th>
				<th class="col-md-8"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>วันที่เดินทางไป</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_start).'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>วันที่เดินทางกลับ</h4></td>
				<td class="pro-des" align="left"a>'.$this->Fontend_model->getDayMonthYearthai($Data->date_end).'</td>
			 <tr>
				<td class="pro-title"><h4>จำนวนผู้ใหญ่</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_adult.' &nbsp;&nbsp; ท่าน</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>จำนวนเด็ก</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_child.' &nbsp;&nbsp; ท่าน</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>ผู้เดินทางทั้งหมด</h4></td>
				<td class="pro-des" align="left"a>'.$Data->total_customer.' &nbsp;&nbsp; ท่าน</td>
			 </tr>  
			 
		  </table>
	   </div> 
	  
		
	  </div>
		
	  <div style="width:50%;padding-left:15px;" >	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการติดต่อ</span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h4>ชื่อ-นามสกุล ผู้จอง</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_name.' '.$Data->customer_Lastname.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>โทรศัพท์</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_telephone.'</td>
			 <tr>
				<td class="pro-title"><h4>อีเมล</h4></td>
				<td class="pro-des" align="left"a>'.$Data->customer_email.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h4>Line ID</h4></td>
				<td class="pro-des" align="left"a>'.$Data->IDLine.'</td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h4>ความต้องการเพิ่มเติม</h4></td>
				<td class="pro-des" align="left"a>'.$Data->comment.'</td>
			 </tr> 
		  </table>	
		  
		 
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
		

                    $subject = "[For Admin] Booking Package ใบแจ้งการจองแพ็คเกจ";		
                    $this->email->from($from_email1, 'Booking Package Sunny Tour'); 
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
        //--------------------------------------
        public function BookingDetail($keygroup=null)
	{
            $data['categoryList']=$this->Fontend_model->getCategory('2');
            $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
            $data['checkinData'] = $this->Fontend_model->getbooking($keygroup);
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/booking',$data);
           $this->load->view('package/fontend/footer');
	}
        //--------------------------------------
        public function BookingDetail2($keygroup=null)
	{
            $data['categoryList']=$this->Fontend_model->getCategory('2');
            $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
            $data['checkinData'] = $this->Fontend_model->getbooking2($keygroup);
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/booking2',$data);
           $this->load->view('package/fontend/footer');
	}
           //-------------------------------------------
        public function searchdata(){
        $searchtext = $this->input->post('searchtext');
        $result_id = $this->Fontend_model->search($searchtext);
            $numresult = $result_id->num_rows();
            if($numresult>0){ 
            ?>

		
    <?php 

    foreach ($result_id->result() AS $packageDetail2){
        $include = $this->Fontend_model->Listpackageinclude($packageDetail2->id);

            $cate = $this->Fontend_model->getCategorybyidbycate($packageDetail2->category_id,$packageDetail2->type_cate);

         foreach ($cate->result() AS $cate2){}
         foreach ($include->result() AS $include2){}
    ?>
	  <div class="col-md-6 col-sm-6 col-xs-12" style="padding: 10px;height: 650px">
            <div class="sp-feature-box-3 margin-bottom" style="background-color: #f5f5f5;">
              <div class="img-box"> 
				<a href="tour_detail.php" class="view-btn uppercase"><i class="fa fa-search-plus"></i>  View</a>
                <div class="badge" style="background-color:#4290d4 !important;"><?php echo $include2->include_name_en?></div>
                <img src="<?php echo base_url('uploadfile/package_img/').$packageDetail2->img?>" alt="" class="img-responsive" style="width:404px;height: 404px"/>
			  </div>
              <div class="clearfix"></div>
              
              <h5 class="less-mar-1" style="padding: 10px; background-color: #E7E7E7; font-weight: 600"><i class="fa fa-map" style="color:#EC7500;"></i>&nbsp;&nbsp;ทัวร์ <?php echo $cate2->category_title?></h5>
              <p style="padding: 10px;"><?php echo $packageDetail2->package_name_en?></p>
              <h6>&nbsp;&nbsp;ราคาเริ่มต้น</h6>
              <?php if($packageDetail2->package_discount !='0.00'){?>
              <h5 class="text-gyellow" style="padding-left: 10px; color: #ee222b;"><span style="font-size: 10pt; text-decoration:line-through; color:#2A2A2A;"><?php echo number_format($packageDetail2->package_price)?> บาท</span> <?php echo number_format($packageDetail2->package_discount)?> บาท</h5>
              <?php }else{?>
              <h5 class="text-gyellow" style="padding-left: 10px; color: #ee222b;"> <?php echo number_format($packageDetail2->package_price)?> บาท</h5>
              <?php }?>
              <a class="btn btn-border light btn-small" href="<?php echo base_url('Tour/package_Detail/').$packageDetail2->id?>" style="float: right;">จองแพ็คเกจทัวร์</a>
			</div>
       </div>
    <?php }?> 
	   <!--end item--> 
        <div class="clearfix"></div>
        <?php }else{?>
<div class="row heading_space">
						<div class="col-md-12">
							<div class="commerce_heading">
								<h2>ไม่พบเนื้อหาที่ค้นหา</h2>
							</div>
						</div>
					</div>
 <?php  }}
       //----------------------------------------------------
        public function checkdata()
	{
	 $arrayinout = $this->input->post('arrayinout');
	 $arrayfeature = $this->input->post('arrayfeature');
        $result_id = $this->Fontend_model->checkdata($arrayinout,$arrayfeature);
	$numresult = $result_id->num_rows();
            if($numresult>0){ 
            ?>

		
    <?php 

    foreach ($result_id->result() AS $packageDetail2){
        $include = $this->Fontend_model->Listpackageinclude($packageDetail2->id);

            $cate = $this->Fontend_model->getCategorybyidbycate($packageDetail2->category_id,$packageDetail2->type_cate);

         foreach ($cate->result() AS $cate2){}
         foreach ($include->result() AS $include2){}
    ?>
	  <div class="col-md-6 col-sm-6 col-xs-12" style="padding: 10px;height: 650px"  >
            <div class="sp-feature-box-3 margin-bottom" style="background-color: #f5f5f5;">
              <div class="img-box"> 
				<a href="tour_detail.php" class="view-btn uppercase"><i class="fa fa-search-plus"></i>  View</a>
                <div class="badge" style="background-color:#4290d4 !important;"><?php echo $include2->include_name_en?></div>
                <img src="<?php echo base_url('uploadfile/package_img/').$packageDetail2->img?>" alt="" class="img-responsive" style="width:404px;height: 404px"/>
			  </div>
              <div class="clearfix"></div>
              
              <h5 class="less-mar-1" style="padding: 10px; background-color: #E7E7E7; font-weight: 600"><i class="fa fa-map" style="color:#EC7500;"></i>&nbsp;&nbsp;ทัวร์ <?php echo $cate2->category_title?></h5>
              <p style="padding: 10px;"><?php echo mb_substr($packageDetail2->package_name_en,0,50,'UTF-8');?></p>
              <h6>&nbsp;&nbsp;ราคาเริ่มต้น</h6>
              <?php if($packageDetail2->package_discount !='0.00'){?>
              <h5 class="text-gyellow" style="padding-left: 10px; color: #ee222b;"><span style="font-size: 10pt; text-decoration:line-through; color:#2A2A2A;"><?php echo number_format($packageDetail2->package_price)?> บาท</span> <?php echo number_format($packageDetail2->package_discount)?> บาท</h5>
              <?php }else{?>
              <h5 class="text-gyellow" style="padding-left: 10px; color: #ee222b;"> <?php echo number_format($packageDetail2->package_price)?> บาท</h5>
              <?php }?>
              <a class="btn btn-border light btn-small" href="<?php echo base_url('Tour/package_Detail/').$packageDetail2->id?>" style="float: right;">จองแพ็คเกจทัวร์</a>
			</div>
       </div>
    <?php }?> 
	   <!--end item--> 
        <div class="clearfix"></div>
        <?php }else{?>
<div class="row heading_space">
						<div class="col-md-12">
							<div class="commerce_heading">
								<h2>ไม่พบเนื้อหาที่ค้นหา</h2>
							</div>
						</div>
					</div>
 <?php  }}   
      
}
