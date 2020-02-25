
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
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Data->Traveling_date?></h4>  
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div class="row">
	  <div class="col-md-6" style="padding-left: 30px">	 
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
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พัก 2-3 ท่าน)</h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format($Data->adult_price)?></h6></td>
		<td class="pro-price" align="center"><h6><?php echo $Data->customer_adult?></h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format(intval($Data->adult_price)*intval($Data->customer_adult))?></h6></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พักเดี่ยว)</h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format($Data->aloneadult_price)?></h6></td>
		<td class="pro-price" align="center"><h6><?php echo $Data->customer_adultalone?></h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format(intval($Data->aloneadult_price)*intval($Data->customer_adultalone))?></h6></td>
	 </tr>  
	 <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (ไม่เพิ่มเตียง)</h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format($Data->child_price)?></h6></td>
		<td class="pro-price" align="center"><h6><?php echo $Data->customer_child?></h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format(intval($Data->child_price)*intval($Data->customer_child))?></h6></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (เพิ่มเตียง)</h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format($Data->addchild_price)?></h6></td>
		<td class="pro-price" align="center"><h6><?php echo $Data->customer_childextra?></h6></td>
		<td class="pro-des" align="center"a><h6><?php echo number_format(intval($Data->addchild_price)*intval($Data->customer_childextra))?></h6></td>
	 </tr>  
	 <tr>
		<td class="pro-title"></td>
		<td class="pro-des" align="center"a></td>
		<td class="pro-price" align="center"><h6>รวม <?php echo $Data->total_customer?>  ท่าน </h6></td>
		<td class="pro-des" align="center"a><h5 style="color: #CF0104; font-weight: 600"><?php echo number_format($Data->total_price)?> บาท</h6></td>
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
  