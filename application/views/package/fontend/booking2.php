
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
    <h3 class="uppercase text-white less-mar-1 title">Booking Detail</h3>
    <h6 class="uppercase text-white sub-title">รายละเอียดการจองแพ็คเกจทัวร์</h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->
    <?php 
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
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h5>เราได้รับข้อมูลของคุณเรียบร้อย อีเมลยืนยันการจองส่งไปแล้วที่: <?php echo $Data->customer_email?></h5>

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
  